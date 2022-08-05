<?php

namespace Database\Seeders;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->truncate();
        Admin::create([
            'first_name' => 'RawanAdmin',
            'last_name' => 'ha',
            'email' => 'rawan_admin@gmail.com',
            'phone_number' => '+7725698743',
            'password'=> Hash::make('password'),
            'super_admin' => 1,
            'status' => 'active',
            // 'avatar' =>  asset('user/avatar/avatar.png'),
        ]);
    }
}
