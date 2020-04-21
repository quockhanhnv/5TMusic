<?php

namespace App\Repositories\Gallery;

use App\Models\Gallery;
use App\Repositories\BaseRepository;

class GalleryRepository extends BaseRepository implements GalleryRepositoryInterface
{
    public function model()
    {
        return Gallery::class;
    }

    public function withRelation($relation)
    {
        return $this->model->with($relation);
    }

    public function filter($models, $field, $operator, $value)
    {
        return $models->where($field, $operator, $value);
    }

    public function orderByField($model, $field, $orderBy)
    {
        return $model->orderBy($field, $orderBy);
    }

    public function paginate($models, $itemPerPage)
    {
        return $models->paginate($itemPerPage);
    }

    public function findById($id)
    {
        return $this->model->find($id);
    }

    public function store($data)
    {
        return $this->model->fill($data)->save();
    }

    public function update($data, $id)
    {
        // TODO: Implement update() method.
    }

    public function getTypesAttr()
    {
        return $this->model->types;
    }

    public function getGalleriesForHomePage()
    {
        return $this->model->where('gallery_active', ACTIVE_STATUS);
    }
}
