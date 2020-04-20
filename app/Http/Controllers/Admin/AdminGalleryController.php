<?php

namespace App\Http\Controllers\Admin;

use App\Services\GalleryService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class AdminGalleryController extends Controller
{
    protected $galleryService;

    public function __construct(GalleryService $galleryService)
    {
        $this->galleryService = $galleryService;
    }

    public function index()
    {
        $galleries = $this->galleryService->withRelation(['user']);
        $galleries = $this->galleryService->filter($galleries, 'gallery_active', '=', ACTIVE_STATUS);
        $galleries = $this->galleryService->orderByField($galleries,'created_at', 'desc');
        $galleries = $this->galleryService->paginate($galleries, 10);

        return view('admin.galleries.index', compact('galleries'));
    }

    public function create()
    {
        $types = $this->galleryService->getTypesAttr();

        return view('admin.galleries.create', compact('types'));
    }

    public function store(Request $request)
    {
        try {
            $gallery = $this->galleryService->uploadGaleries($request);
            return response()->json(['code' => 200, 'message' => 'Create medias successfully', 'data' => $gallery], 200);
        } catch (\Exception $exception) {
            Log::error('Something went wrong when insert galleries ' . $exception->getMessage());
            return response()->json(['code' => 500, 'message' => 'Internal server error . ' . $exception->getMessage()], 500);
        }
    }

    public function delete($id)
    {
        $gallery = $this->galleryService->findById($id);
        $imagePath = $gallery->gallery_file_path;

        File::delete(public_path().$imagePath);
        if ($gallery) $gallery->delete();

        return redirect()->back();
    }
}
