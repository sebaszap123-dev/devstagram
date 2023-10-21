<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ImageController extends Controller
{
    public function store(Request $request)
    {
        $image = $request->file('file');

        $nameImage = Str::uuid() . '.' . $image->extension();
        $serverImage = Image::make($image);
        // *  Fit sirve para cambiar el tamaño de la imagén
        $serverImage->fit(1000, 1000);
        $imagePath = public_path('uploads' . '/' . $nameImage);
        $serverImage->save($imagePath);
        return response()->json(['image' => $nameImage]);
    }
}
