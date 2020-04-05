<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;

class UploadFileService
{
    protected $publicPath = 'uploads/';

    public function upload(UploadedFile $file, $folder)
    {
        $fileName= $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();

        $name = trim(str_replace('.' . $extension, '', strtolower($fileName)));
        $fileName = date('Y-m-d__') . \Illuminate\Support\Str::slug($name) . '.' . $extension;
        $path = $this->publicPath . $folder . '/' . date('Y/m/d');

        $file->move(public_path($path), $fileName);

        return '/' . $path . '/' . $fileName;
    }
}
