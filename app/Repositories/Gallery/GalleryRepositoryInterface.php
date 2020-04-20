<?php

namespace App\Repositories\Gallery;

interface GalleryRepositoryInterface
{
    public function withRelation($relation);

    public function filter($models, $field, $operator, $value);

    public function orderByField($models, $field, $orderBy);

    public function paginate($models, $itemPerPage);

    public function findById($id);

    public function store($data);

    public function update($data, $id);

    public function getTypesAttr();

    public function getGalleriesForHomePage();
}
