<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'first_name' => 'RawanAdmin',
        //     'last_name' => 'ha',
        //     'email' => 'rawan_admin@gmail.com',
        //     'phone_number' => '+7725698743',
        //     'password'=> Hash::make('password'),
        //     //تخزن 0 وعدلته رجعت من الداتا بيز ل 1
        //     'user_type' => '1',
        // ]);
        User::create([
            'first_name' => 'haAdmin',
            'last_name' => 'ha',
            'email' => 'ha_admin@gmail.com',
            'phone_number' => '+7728298743',
            'password'=> Hash::make('12345678'),
            'user_type' => '1',
            // 'super_admin' => 1,
            // 'status' => 'active',
            // 'avatar' =>  asset('user/avatar/avatar.png'),
        ]);
    }
}
