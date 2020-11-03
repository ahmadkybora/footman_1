<?php

/**
 */
namespace App\Repositories;

use App\Models\Model;

class UserRepository implements Repository
{
    protected $model;
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function create(array $data)
    {
        return $this->model->create();
    }

    public function show($id)
    {
        return $this->model->find();
    }

    public function update(array $data, $id)
    {
        return $this->model->update();
    }

    public function destroy($id)
    {
        return $this->model->destroy();
    }
}