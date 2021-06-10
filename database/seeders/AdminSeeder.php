<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
Use Carbon\Carbon;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'username' => 'admin',
            'password' => bcrypt('admin'),
             'avatar' => 'profile.jpg',
             'created_at'=> Carbon::now(),
             'updated_at'  =>   Carbon::now()
        ]);
    }
}
