<?php

namespace App\Services;

use App\Repositories\Product\ProductRepositoryInterface;
use Illuminate\Support\Str;

class ProductService extends BaseService
{
    protected $uploadFileService;

    public function __construct(ProductRepositoryInterface $repository, UploadFileService $uploadFileService)
    {
        $this->repository = $repository;
        $this->uploadFileService = $uploadFileService;
    }

    public function paginate($itemPerPage)
    {
        return $this->repository->paginate($itemPerPage);
    }

    public function findById($id)
    {
        return $this->repository->findById($id);
    }

    public function store($data)
    {
        $data['pro_slug']     = Str::slug($data['pro_name']);
        $data['pro_eq_pickup'] = isset($data['pro_eq_pickup']) ? 1 : 0;
        if (isset($data['pro_avatar'])) {
            $avatarPath = $this->uploadFileService->upload($data['pro_avatar'], 'products');
            $data['pro_avatar'] = $avatarPath;
        }

        return $this->repository->store($data);
    }

    public function update($data, $id)
    {

        $data['c_slug']     = Str::slug($data['c_name']);
        if (isset($data['c_avatar'])) {
            $avatarPath = $this->uploadFileService->upload($data['c_avatar'], 'category');
            $data['c_avatar'] = $avatarPath;
        }

        return $this->repository->update($data, $id);
    }
}
