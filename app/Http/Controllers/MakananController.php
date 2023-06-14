<?php

namespace App\Http\Controllers;
use App\Models\Makanan;
use Illuminate\Http\Request;

class MakananController extends Controller
{
    public function index()
    {
        return view('resto', [
            'title' => 'DukResto',
            'data' => Makanan::all()
        ]);
    }
}
