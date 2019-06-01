<?php

use Illuminate\Database\Seeder;
use App\Admin;
class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Admin::insert([
            [
              'name'  => 'HaiAdmin',
              'email' => 'hai@admin.com',
              'password'          => bcrypt('11111111'),
            ],
        ]);


    }
}
