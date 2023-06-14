<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makanan 
{
    private static $data_makanan = [
        [
            "kategori" => "pizza",
            "nama"=> "Meat Lover",
            "deskripsi"=> "Irisan sosis sapi, daging sapi cincang, burger sapi, sosis ayam.",
            "harga"=> 49500
        ],
        [
            "kategori"=> "pizza",
            "nama"=> "Super Supreme",
            "deskripsi"=> "Daging ayam dan sapi asap, daging sapi cincang, burger sapi, jamur, paprika merah dan paprika hijau.",
            "harga"=> 49500
        ],
        [
            "kategori"=> "pizza",
            "nama"=> "Tuna Melt",
            "deskripsi"=> "Irisan daging ikan tuna, butiran jagung, saus mayonnaise.",
            "harga"=> 49500
        ],
        [
            "kategori"=> "pizza",
            "nama"=> "American Favourite",
            "deskripsi"=> "Pepperoni sapi, daging sapi cincang, jamur.",
            "harga"=> 49500
        ],
        [
            "kategori"=> "pasta",
            "nama"=> "Beef Spaghetti",
            "deskripsi"=> "Pepperoni sapi, daging sapi cincang, jamur.",
            "harga"=> 43000
        ],
        [
            "kategori"=> "pasta",
            "nama"=> "Beef Lasagna",
            "deskripsi"=> "Dipanggang, daging sapi cincang. krim putih lembut di tiap lapisan.",
            "harga"=> 48000
        ],
        [
            "kategori"=> "pasta",
            "nama"=> "Creamy Beef Fettuccine",
            "deskripsi"=> "Daging sapi asap dan jamur, ditumis dengan saus krim lembut.",
            "harga"=> 43000
        ],
        [
            "kategori"=> "nasi",
            "nama"=> "Meatballs Beef Mushroom",
            "deskripsi"=> "Bola daging sapi dengan saus daging sapi cincang dan jamur.",
            "harga"=> 40000
        ],
        [
            "kategori"=> "nasi",
            "nama"=> "Black Pepper Chicken",
            "deskripsi"=> "Ayam dengan saus lada hitam.",
            "harga"=> 40000
        ],
        [
            "kategori"=> "nasi",
            "nama"=> "Oriental Chicken",
            "deskripsi"=> "Daging ayam berpadu dengan saus oriental.",
            "harga"=> 40000
        ],
        [
            "kategori"=> "minuman",
            "nama"=> "Choco Mint",
            "deskripsi"=> "",
            "harga"=> 24000
        ],
        [
            "kategori"=> "minuman",
            "nama"=> "Toffee Coffee",
            "deskripsi"=> "",
            "harga"=> 24000
        ],
        [
            "kategori"=> "minuman",
            "nama"=> "Green Tea Shake",
            "deskripsi"=> "",
            "harga"=> 24000
        ],
        [
            "kategori"=> "minuman",
            "nama"=> "Strawberry Milkshake",
            "deskripsi"=> "",
            "harga"=> 24000
        ],
        [
            "kategori"=> "minuman",
            "nama"=> "Chocolate Milkshake",
            "deskripsi"=> "",
            "harga"=> 24000
        ]
    ];
    public static function all()
    {
        return collect(self::$data_makanan);
    }
}
