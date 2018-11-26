<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('types')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        factory(App\Type::class, 5)->create();
    }
}
