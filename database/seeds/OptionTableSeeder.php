<?php

use Illuminate\Database\Seeder;

class OptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('options')->insert([
            [
                'key' => 'text_footer',
                'value' => 'Sách không đơn thuần chỉ là những trang giấy mà trong đó còn chứa đựng một thế giới mà con người luôn khao khát được khám phá.',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'key' => 'banner',
                'value' => '1.jpg',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'key' => 'banner',
                'value' => '2.jpg',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'key' => 'banner_book',
                'value' => 'banner-sach.png',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'key' => 'app',
                'value' => 'wsm_logo.png',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'key' => 'app',
                'value' => 'ac_logo.png',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'key' => 'app',
                'value' => 'goal_logo.png',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'key' => 'app',
                'value' => 'fitm_logo.png',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'key' => 'app',
                'value' => 'gas_logo.png',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'key' => 'app',
                'value' => 'ask_logo.png',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'key' => 'app',
                'value' => 'poll_logo.png',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'key' => 'app',
                'value' => 'survey_logo.png',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'key' => 'app',
                'value' => 'club_logo.png',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'key' => 'app',
                'value' => 'logo4.png',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'key' => 'app_text',
                'value' => 'WSM',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'key' => 'app_text',
                'value' => 'AC-Staff',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'key' => 'app_text',
                'value' => 'Goal',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'key' => 'app_text',
                'value' => 'FITM',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'key' => 'app_text',
                'value' => 'Gas',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'key' => 'app_text',
                'value' => 'Ask',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'key' => 'app_text',
                'value' => 'Poll',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'key' => 'app_text',
                'value' => 'Survey',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'key' => 'app_text',
                'value' => 'Club',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'key' => 'text_banner',
                'value' => 'S*Book',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'key' => 'text_banner',
                'value' => 'Sun Asterisk',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'key' => 'contact',
                'value' => '84-4-3795-5417',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'key' => 'address',
                'value' => '13F Keangnam Landmark 72 Tower, Plot E6, Pham Hung Road, Nam Tu Liem, Ha Noi, Viet Nam.',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'key' => 'email',
                'value' => 'education@sun-asterisk.com',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
        ]);
    }
}