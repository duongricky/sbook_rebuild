<?php

namespace App\Repositories\Contracts;

use App\Eloquent\Media;

interface MediaRepository extends AbstractRepository
{
    public function getData($data = []);

    public function store($data = []);

    public function find($id);

    public function updateAndRemoveOldMedia($bookId, $mainImage, $oldImages = []);

    public function addImageBook($bookId, $images = []);
}
