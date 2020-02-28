<?php

use App\Eloquent\Media;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('media')->truncate();
        $data = [
            [
                'path' => 'coi_nguoi_rung_chuong_tan_the.jpg',
                'target_type' => 'App\Eloquent\Book',
                'target_id' => 1,
                'priority' => 1,
            ],
            [
                'path' => 'hai_huoc_mot_chut_the_gioi_khac_di.jpg',
                'target_type' => 'App\Eloquent\Book',
                'target_id' => 2,
                'priority' => 1,
            ],
            [
                'path' => 'dac_nhan_tam.jpg',
                'target_type' => 'App\Eloquent\Book',
                'target_id' => 3,
                'priority' => 1,
            ],
            [
                'path' => 'ha_do.jpg',
                'target_type' => 'App\Eloquent\Book',
                'target_id' => 4,
                'priority' => 1,
            ],
            [
                'path' => 'rung_nauy.jpg',
                'target_type' => 'App\Eloquent\Book',
                'target_id' => 5,
                'priority' => 1,
            ],
            [
                'path' => 'dem_dau_tien.jpg',
                'target_type' => 'App\Eloquent\Book',
                'target_id' => 6,
                'priority' => 1,
            ],
        ];
        foreach ($data as $item) {
            Media::create($item);
        }
    }
}
