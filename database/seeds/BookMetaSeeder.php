<?php

use App\Eloquent\Bookmeta;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookMetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookmeta')->truncate();
        $data = [
            [
                'key' => 'Handico Office',
                'value' => 1,
                'book_id' => 1,
            ],
            [
                'key' => 'Handico Office',
                'value' => 1,
                'book_id' => 2,
            ],
            [
                'key' => 'Tran Khat Chan',
                'value' => 1,
                'book_id' => 3,
            ],
            [
                'key' => 'HCMC Office',
                'value' => 1,
                'book_id' => 4,
            ],
            [
                'key' => 'Da Nang Office',
                'value' => 1,
                'book_id' => 5,
            ],
            [
                'key' => 'Hanoi Office',
                'value' => 1,
                'book_id' => 6,
            ],
        ];
        foreach ($data as $item) {
            Bookmeta::create($item);
        }
    }
}
