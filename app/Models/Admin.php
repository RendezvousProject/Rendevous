<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Admin extends User
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'password',
        'super_admin',
        'status',
        'avatar',
    ];

    // // Accessor Methods
    // public function getImageAttribute(){
    //     if(!$this->avatar) {
    //         return asset('assets/images/author/avatar.png');
    //     }
    //     return asset('user/avatar/' . $this->avatar);

    // }


}
