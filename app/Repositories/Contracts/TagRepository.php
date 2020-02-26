<?php

namespace App\Repositories\Contracts;

use App\Eloquent\Tag;

interface TagRepository extends AbstractRepository
{
    public function store($data = []);

    public function find($id);

    public function update($id, $data = []);

    public function destroy($id);
}
