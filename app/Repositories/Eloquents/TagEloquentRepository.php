<?php

namespace App\Repositories\Eloquents;

use App\Eloquent\Tag;
use App\Repositories\Contracts\TagRepository;

class TagEloquentRepository extends AbstractEloquentRepository implements TagRepository
{
    public function model()
    {
        return new Tag;
    }

    public function getData($with = [], $data = [], $dataSelect = ['*'])
    {
        return $this->model()
            ->select($dataSelect)
            ->with($with)
            ->get();
    }

    public function store($data = [])
    {
        return $this->model()->create($data);
    }

    public function find($id, $with = [])
    {
        return $this->model()->with($with)->findOrFail($id);
    }

    public function update($id, $data = [])
    {
        $model = $this->model()->findOrFail($id);

        return $model->update($data);
    }

    public function destroy($id)
    {
        $model = $this->model()->findOrFail($id);

        return $model->delete();
    }
}
