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
         $this->call(RolesPermissionsSeeder::class);
         $this->call(StatusTableSeeder::class);
         $this->call(CategoryAndTypeSeeder::class);
         $this->call(UserTableSeeder::class);
    }
}
