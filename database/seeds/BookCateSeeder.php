<?php

use App\Eloquent\BookCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookCateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book_category')->truncate();
        $data = [
            [
                'book_id' => 1,
                'category_id' => 1,
            ],
            [
                'book_id' => 1,
                'category_id' => 2,
            ],
            [
                'book_id' => 1,
                'category_id' => 3,
            ],
            [
                'book_id' => 1,
                'category_id' => 4,
            ],
            [
                'book_id' => 2,
                'category_id' => 2,
            ],
            [
                'book_id' => 2,
                'category_id' => 3,
            ],
            [
                'book_id' => 2,
                'category_id' => 4,
            ],
            [
                'book_id' => 2,
                'category_id' => 5,
            ],
            [
                'book_id' => 3,
                'category_id' => 3,
            ],
            [
                'book_id' => 3,
                'category_id' => 4,
            ],
            [
                'book_id' => 3,
                'category_id' => 5,
            ],
            [
                'book_id' => 3,
                'category_id' => 6,
            ],
            [
                'book_id' => 4,
                'category_id' => 4,
            ],
            [
                'book_id' => 4,
                'category_id' => 5,
            ],
            [
                'book_id' => 4,
                'category_id' => 6,
            ],
            [
                'book_id' => 4,
                'category_id' => 7,
            ],
            [
                'book_id' => 5,
                'category_id' => 5,
            ],
            [
                'book_id' => 5,
                'category_id' => 6,
            ],
            [
                'book_id' => 5,
                'category_id' => 7,
            ],
            [
                'book_id' => 5,
                'category_id' => 8,
            ],
            [
                'book_id' => 6,
                'category_id' => 6,
            ],
            [
                'book_id' => 6,
                'category_id' => 7,
            ],
            [
                'book_id' => 6,
                'category_id' => 8,
            ],
            [
                'book_id' => 6,
                'category_id' => 9,
            ],
        ];
        foreach ($data as $item) {
            BookCategory::create($item);
        }
    }
}
