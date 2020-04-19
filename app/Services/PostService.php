<?php

namespace App\Services;

use App\Repositories\Post\PostRepositoryInterface;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class PostService extends BaseService
{
    protected $repository;
    protected $uploadFileService;

    public function __construct(PostRepositoryInterface $repository, UploadFileService $uploadFileService)
    {
        $this->repository = $repository;
        $this->uploadFileService = $uploadFileService;
    }

    public function withRelation($relation)
    {
        return $this->repository->withRelation($relation);
    }

    public function getAll()
    {
        return $this->repository->getAll();
    }

    public function orderByField($field, $orderBy)
    {
        return $this->repository->orderByField($field, $orderBy);
    }

    public function filter($models, $field, $operator, $value)
    {
        return $this->repository->filter($models, $field, $operator, $value);
    }

    public function store($data)
    {
        $data['post_user_id'] = Auth::id() ? Auth::id() : 0;
        $data['post_slug']     = Str::slug($data['post_name']);
        if (isset($data['post_avatar'])) {
            $avatarPath = $this->uploadFileService->upload($data['post_avatar'], 'posts');
            $data['post_avatar'] = $avatarPath;
        }

        return $this->repository->store($data);
    }

    public function paginate($models, $itemPerPage)
    {
        return $this->repository->paginate($models, $itemPerPage);
    }

    public function findById($id)
    {
        return $this->repository->findById($id);
    }

    public function update($data, $id)
    {
        $data['post_user_id'] = Auth::id() ? Auth::id() : 0;
        $data['post_slug'] = Str::slug($data['post_name']);
        if (isset($data['post_avatar'])) {
            $avatarPath = $this->uploadFileService->upload($data['post_avatar'], 'posts');
            $data['post_avatar'] = $avatarPath;
        }

        return $this->repository->update($data, $id);
    }

    // =============== client ==========
    public function getHotPosts($courseNumber)
    {
        return $this->repository->getHotPosts($courseNumber);
    }
}
