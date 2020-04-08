<?php

namespace App\Http\Controllers\Admin;

use App\Exceptions\SystemException;
use App\Services\UploadFileService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class AdminUploadController extends Controller
{
    protected $publicPath = 'uploads/';
    protected $folder = 'upload-content-images';
//    ===== bengin function for dropzone upload ================
    public function upload(Request $request, $folder = 'tempFiles/')
    {
        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();

        $path = $this->publicPath . $folder . '/' . date('Y/m/d');

        $file->move(public_path($path), $fileName);

        return '/' . $path . '/' . $fileName;
    }

    public function remove(Request $request)    // to delete when press remove button on dropzone preivew
    {
        $fileName = $request->get('fileName');
        $path = 'uploads/tempFiles/' . date('Y') . '/' . date('m') . '/' . date('d') . '/' . $fileName;
        \File::delete($path);
        \File::deleteDirectory(public_path('tempFiles'));

        return response([
            'filePath' => $path
        ]);
    }
    // ========== end function for dropzone upload =============

    public function uploadContentImages(Request $request)
    {
        try {
            if($request->hasFile('file')) {
                $file = $request->file('file');
                $user_id = \Auth::id();
                if (is_array($file)) {
                    $filenameArr = [];
                    foreach ($file as $item) {
                        $fileName= $file->getClientOriginalName();
                        $extension = $file->getClientOriginalExtension();
                        $name = trim(str_replace('.' . $extension, '', strtolower($fileName)));
                        $fileName = date('Y-m-d__') . \Illuminate\Support\Str::slug($name) . '.' . $extension;
                        $path = $this->publicPath . $this->folder . '/' . date('Y/m/d');
                        $file->move(public_path($path), $fileName);
                        array_push($filenameArr, '/' . $path . '/' . $fileName);
                    }

                    return json_encode($filenameArr);
                }

                $fileName= $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $name = trim(str_replace('.' . $extension, '', strtolower($fileName)));
                $fileName = date('Y-m-d__') . \Illuminate\Support\Str::slug($name) . '.' . $extension;
                $path = $this->publicPath . $this->folder . '/' . date('Y/m/d');
                $file->move(public_path($path), $fileName);

                return json_encode('/' . $path . '/' . $fileName);
            }

        } catch(\Exception $exception){
            Log::error('Something went wrong when uploading files ' . $exception->getMessage());
        }

        return json_encode('');
    }
}
