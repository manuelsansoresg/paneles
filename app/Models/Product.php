<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'code',
        'name',
        'description',
        'moneda_id',
        'price',
        'observations',
        'status',
    ];

    public  static function deleteImage($request)
    {
        # code...
    }
}
