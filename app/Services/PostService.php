<?php

namespace App\Services;

use App\Repositories\Post\PostRepositoryInterface;
use Illuminate\Support\Str;

class PostService extends BaseService
{
    protected $repository;
    protected $uploadFileService;

    public function __construct(PostRepositoryInterface $repository, UploadFileService $uploadFileService)
    {
        $this->repository = $repository;
        $this->uploadFileService = $uploadFileService;
    }
    public function store($data)
    {
        $data['post_slug']     = Str::slug($data['post_name']);
        if (isset($data['post_avatar'])) {
            $avatarPath = $this->uploadFileService->upload($data['post_avatar'], 'posts');
            $data['post_avatar'] = $avatarPath;
        }

        return $this->repository->store($data);
    }
}
