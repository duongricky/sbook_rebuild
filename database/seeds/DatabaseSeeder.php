<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(OfficeTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(BookTableSeeder::class);
        $this->call(BookCateSeeder::class);
        $this->call(BookMetaSeeder::class);
        $this->call(MediaSeeder::class);
        $this->call(OptionTableSeeder::class);
        $this->call(UserAdminSeeder::class);
    }
}
