<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'date_init',
        'date_fin',
        'description',
        'url',
        'observation',
    ];

    public static function saveEdit($request)
    {
        $data = $request->data;
        $banner_id = $request->banner_id;

        if ($banner_id == null) {
            $banner =  new Banner($data);
            $banner->save();
        } else {
            $banner = Banner::find($banner_id);
            $banner->fill($data)->update();
        }

        //if exist image
        if ($request->hasFile('image') != false) {
            $document = $request->file('image');
            $name_full = rand(1, 999).'-'.$document->getClientOriginalName();
            
            if ($document->move('banners', $name_full)) {
                $get_banner = Banner::find($banner->id);
                $get_banner->image = $name_full;
                $get_banner->update();
            }
        }
    }

    public static function getActives()
    {
        $now = date('Y-m-d'); // Obtenemos la fecha actual
        return Banner::where('date_init', '<=', $now)
        ->where('date_fin', '>=', $now)
        ->get();
    }

    public static function deleteImage($banner)
    {
        @unlink('banners/'.$banner->image);
        $banner->update(['image' => '']);
    }
}
