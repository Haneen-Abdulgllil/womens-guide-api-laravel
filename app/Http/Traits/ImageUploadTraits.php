<?php

namespace App\Http\Traits;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;

Trait ImageUploadTraits
{

    public function uploadImage($image, $dir) {

        try {

            // $image      = $request->file($inputName);
            $imageName  = uniqid().'_'.trim($image->getClientOriginalName());
            $path        = public_path()."/Admin/Uploading/images/".$dir;
            if ( ! file_exists($path) ) {mkdir($path, 0777, true);}
            $image->move($path,$imageName);
            return $imageName;


        } catch (\Throwable $th) {
            report($th);
            return $th->getMessage();
        }
    }

}