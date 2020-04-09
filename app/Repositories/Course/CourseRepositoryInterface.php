<?php

namespace App\Repositories\Course;

interface CourseRepositoryInterface
{
    public function withRelation($relation);

    public function paginate($models, $itemPerPage);

    public function findById($id);

    public function getAll();

    public function store($data);

    public function update($data, $id);

    public function getHotCourses($courseNumber);
}
