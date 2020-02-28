<?php

use Illuminate\Database\Seeder;
use App\Eloquent\Category;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();
        $data = [
            [
                'name' => 'Tâm Lý - Kỹ Năng Sống',
                'slug' => 'XYZ',
                'description' => 'Tâm Lý - Kỹ Năng Sống',
            ],
            [
                'name' => 'Y Học - Sức Khỏe',
                'slug' => 'XYZ',
                'description' => 'Y Học - Sức Khỏe',
            ],
            [
                'name' => 'Thể Thao - Nghệ Thuật',
                'slug' => 'XYZ',
                'description' => 'Thể Thao - Nghệ Thuật',
            ],
            [
                'name' => 'Tử Vi - Phong Thủy',
                'slug' => 'XYZ',
                'description' => 'Tử Vi - Phong Thủy',
            ],
            [
                'name' => 'Truyện Ngắn - Ngôn Tình',
                'slug' => 'XYZ',
                'description' => 'Truyện Ngắn - Ngôn Tình',
            ],
            [
                'name' => 'Truyện Ma - Truyện Kinh Dị',
                'slug' => 'XYZ',
                'description' => 'Truyện Ma - Truyện Kinh Dị',
            ],
            [
                'name' => 'Phiêu Lưu - Mạo Hiểm',
                'slug' => 'XYZ',
                'description' => 'Phiêu Lưu - Mạo Hiểm',
            ],
            [
                'name' => 'Triết Học',
                'slug' => 'XYZ',
                'description' => 'Triết Học',
            ],
            [
                'name' => 'Kiến Trúc - Xây Dựng',
                'slug' => 'XYZ',
                'description' => 'Kiến Trúc - Xây Dựng',
            ],
            [
                'name' => 'Tài Liệu Học Tập',
                'slug' => 'XYZ',
                'description' => 'Tài Liệu Học Tập',
            ],
            [
                'name' => 'Truyện Tranh',
                'slug' => 'XYZ',
                'description' => 'Truyện Tranh',
            ],
            [
                'name' => 'Kinh Tế - Quản Lý',
                'slug' => 'XYZ',
                'description' => 'Kinh Tế - Quản Lý',
            ],
            [
                'name' => 'Học Ngoại Ngữ',
                'slug' => 'XYZ',
                'description' => 'Học Ngoại Ngữ',
            ],
            [
                'name' => 'Trinh Thám - Hình Sự',
                'slug' => 'XYZ',
                'description' => 'Trinh Thám - Hình Sự',
            ],
            [
                'name' => 'Lịch Sử - Chính Trị',
                'slug' => 'XYZ',
                'description' => 'Lịch Sử - Chính Trị',
            ],
            [
                'name' => 'Truyện Cười - Tiếu Lâm',
                'slug' => 'XYZ',
                'description' => 'Truyện Cười - Tiếu Lâm',
            ],
            [
                'name' => 'Ẩm thực - Nấu ăn',
                'slug' => 'XYZ',
                'description' => 'Ẩm thực - Nấu ăn',
            ],
            [
                'name' => 'Truyên Teen - Tuổi Học Trò',
                'slug' => 'XYZ',
                'description' => 'Truyên Teen - Tuổi Học Trò',
            ],
            [
                'name' => 'Cổ Tích - Thần Thoại',
                'slug' => 'XYZ',
                'description' => 'Cổ Tích - Thần Thoại',
            ],
        ];
        foreach ($data as $item) {
            Category::create($item);
        }
    }
}
