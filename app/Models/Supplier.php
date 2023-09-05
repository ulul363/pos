<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{   // Adjust the table name if it's different
    use HasFactory;
    protected $table = 'supplier';
    protected $fillable = ['nama_supplier', 'alamat', 'no_telp']; // Define the fillable fields
    public static function validate($request)
    {
        $request->validate([
            "nama_supplier" => "required|max:255", 
            "alamat" => "required|max:255",
            "no_telp" => "required|integer", 
            // "harga" => "required|numeric|gt:0", 
        ]);
    }
    // public static function total($products, $productsInSession)
    // {
    //     $total = 0;
    //     foreach ($products as $product) {
    //         $total = $total + ($product->getPrice() * $productsInSession[$product->getId()]);
    //     }

    //     return $total;
    // }
}
