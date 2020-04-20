<?php

namespace App\Services;

use App\Repositories\Gallery\GalleryRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GalleryService extends BaseService
{
    protected $repository;
    protected $uploadFileService;

    public function __construct(GalleryRepositoryInterface $repository, UploadFileService $uploadFileService)
    {
        $this->repository = $repository;
        $this->uploadFileService = $uploadFileService;
    }

    public function getTypesAttr()
    {
        return $this->repository->getTypesAttr();
    }

    public function withRelation($relation)
    {
        return $this->repository->withRelation($relation);
    }

    public function filter($models, $field, $operator, $value)
    {
        return $this->repository->filter($models, $field, $operator, $value);
    }

    public function orderByField($model, $field, $orderBy)
    {
        return $this->repository->orderByField($model, $field, $orderBy);
    }

    public function paginate($models, $itemPerPage)
    {
        return $this->repository->paginate($models, $itemPerPage);
    }

    public function uploadGaleries(Request $request) {
        $files = $request->file('files');
        return $this->saveImages($files, $request);

    }

    private function saveImages($files, Request $request) {
        foreach ($files as $file) {
            $galleryFilePath = $this->uploadFileService->upload($file, 'galleries');

            $userId = Auth::user()->id ? Auth::user()->id : 0;

            $request->merge([
                'gallery_file_path' => $galleryFilePath,
                'gallery_user_id' => $userId
            ]);
            $this->repository->store($request->only('gallery_file_path', 'gallery_type', 'gallery_user_id'));
        }
        return count($files);// replace this line later
    }

    public function findById($id)
    {
        return $this->repository->findById($id);
    }
}
