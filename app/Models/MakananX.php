<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makanan 
{
    private static $data_makanan = [
        [
            "nama" => "Nasi Goreng",
            "slug" => "nasi-goreng",
            "deskripsi" => "Makanan enak",
            "harga" => "15000"
        ],
        [
            "nama" => "Ayam Bakar",
            "slug" => "ayam-bakar",
            "deskripsi" => "Daging ayam",
            "harga" => "25000"
        ],
        [
            "nama" => "Soto Ayam",
            "slug" => "soto-ayam",
            "deskripsi" => "Kuah hangat",
            "harga" => "12000"
        ],
        [
            "nama" => "Mie Goreng",
            "slug" => "mie-goreng",
            "deskripsi" => "Mie dengan sayur",
            "harga" => "10000"
        ],
        [
            "nama" => "Nasi Uduk",
            "slug" => "nasi-uduk",
            "deskripsi" => "Nasi dengan rempah",
            "harga" => "8000"
        ],
        [
            "nama" => "Es Teh",
            "slug" => "es-teh",
            "deskripsi" => "Minuman teh dingin",
            "harga" => "5000"
        ],
        [
            "nama" => "Kopi Hitam",
            "slug" => "kopi-hitam",
            "deskripsi" => "Kopi tanpa gula",
            "harga" => "8000"
        ],
        [
            "nama" => "Jus Jeruk",
            "slug" => "jus-jeruk",
            "deskripsi" => "Jus segar dari jeruk",
            "harga" => "10000"
        ],
        [
            "nama" => "Air Mineral",
            "slug" => "air-mineral",
            "deskripsi" => "Air mineral botol kecil",
            "harga" => "3000"
        ],
        [
            "nama" => "Es Campur",
            "slug" => "es-campur",
            "deskripsi" => "Campuran buah-buahan segar",
            "harga" => "12000"
        ],
    ];
    
    public static function all()
    {
        return collect(self::$data_makanan);
    }
    public static function find($slug)
    {
        $makanan = static::all();
        return $makanan->firstWhere('slug',$slug);
    }
}
