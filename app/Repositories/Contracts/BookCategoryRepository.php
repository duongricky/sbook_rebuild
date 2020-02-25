<?php

namespace App\Repositories\Contracts;

use App\Eloquent\BookCategory;

interface BookCategoryRepository extends AbstractRepository
{
    public function getData($data = [], $with = [], $dataSelect = ['*']);
    
    public function storeBookCate($book_id, $data = []);

    public function find($id);
}
