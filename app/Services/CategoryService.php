<?php

namespace App\Services;

use App\Repositories\Category\CategoryRepositoryInterface;
use Illuminate\Support\Str;

class CategoryService extends BaseService
{
    protected $uploadFileService;

    public function __construct(CategoryRepositoryInterface $repository, UploadFileService $uploadFileService)
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

    public function index()
    {
        return $this->repository->index();
    }

    public function getAll()
    {
        return $this->repository->getAll();
    }

    public function store($data)
    {
        $data['c_slug']     = Str::slug($data['c_name']);
        if (isset($data['c_avatar'])) {
            $avatarPath = $this->uploadFileService->upload($data['c_avatar'], 'categories');
            $data['c_avatar'] = $avatarPath;
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

    public function getCategoriesSort()
    {
        $categories =$this->repository->getAll();
        $listCategoriesSort = [];
        $this->repository->getRecursive($categories, $listCategoriesSort, $parent = 0, $level = 1);
        return $listCategoriesSort;

    }
}
