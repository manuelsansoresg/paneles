<?php

namespace App\Models;

use App\Lib\Banxico;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'code',
        'name',
        'description_short',
        'description',
        'moneda_id',
        'price',
        'val_dolar',
        'observations',
        'type',
        'status',
    ];

    public static function saveEdit($request)
    {
        $data = $request->data;
        $product_id = $request->product_id;
        
        if (isset($data['price'])) {
            $data['price'] = $data['price'] * 100;
        }

        if (isset($data['moneda_id'])) {
            $banxico = new Banxico();
            $data['val_dolar'] = $banxico->getExchangeRate() * 100;
        }

        if ($product_id == null) {
            $product =  new Product($data);
            $product->save();
        } else {
            $product = Product::find($product_id);
            $product->fill($data)->update();
        }

        //if exist image
        if ($request->hasFile('image') != false) {
            $document = $request->file('image');
            $name_full = rand(1, 999).'-'.$document->getClientOriginalName();
            
            if ($document->move('products', $name_full)) {
                $get_product = Product::find($product->id);
                $get_product->image = $name_full;
                $get_product->update();
            }
        }
    }

    public static function getActives($type = null)
    {
        $product = Product::where('status', 1);
        if ($type != null) {
            $product->where('type', $type);
        }
        return $product->get();
    }

    public static function deleteImage($product)
    {
        @unlink('products/'.$product->image);
        $product->update(['image' => '']);
    }
}
