<?php

namespace App\Http\Controllers\Admin;

use App\Services\UploadFileService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminUploadController extends Controller
{
    protected $publicPath = 'uploads/';

    public function upload(Request $request, $folder = 'tempFiles/')
    {
        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();

        $path = $this->publicPath . $folder . '/' . date('Y/m/d');

        $file->move(public_path($path), $fileName);

        return '/' . $path . '/' . $fileName;
    }

    public function remove(Request $request)
    {
        $fileName = $request->get('fileName');
        $path = 'uploads/tempFiles/' . date('Y') . '/' . date('m') . '/' . date('d') . '/' . $fileName;
        \File::delete($path);
        \File::deleteDirectory(public_path('tempFiles'));

        return response([
            'filePath' => $path
        ]);
    }
}
