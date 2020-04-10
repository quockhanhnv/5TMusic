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
    public function withRelation($relation)
    {
        return $this->repository->withRelation($relation);
    }

    public function paginate($models, $itemPerPage)
    {
        return $this->repository->paginate($models, $itemPerPage);
    }

    public function findById($id)
    {
        return $this->repository->findById($id);
    }

    public function store($data)
    {
        $data['pro_slug'] = Str::slug($data['pro_name']);
        $data['pro_eq_pickup'] = isset($data['pro_eq_pickup']) ? 1 : 0;
        if (isset($data['pro_avatar'])) {
            $avatarPath = $this->uploadFileService->upload($data['pro_avatar'], 'products');
            $data['pro_avatar'] = $avatarPath;
        }

        return $this->repository->store($data);
    }

    public function update($data, $id)
    {
        $data['pro_slug'] = Str::slug($data['pro_name']);
        $data['pro_eq_pickup'] = isset($data['pro_eq_pickup']) ? 1 : 0;
        if (isset($data['pro_avatar'])) {
            $avatarPath = $this->uploadFileService->upload($data['pro_avatar'], 'products');
            $data['pro_avatar'] = $avatarPath;
        }

        return $this->repository->update($data, $id);
    }

//    ====== client ===========
    public function getHotProducts()
    {
        return $this->repository->getAll();
    }
}
