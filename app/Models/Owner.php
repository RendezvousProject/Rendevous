<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Owner extends User
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'phone_number',
        'company_name',
        'email',
        'email_verified_at',
        'password',
        'avatar',
    ];

    public function workspace(){
        return $this->hasMany(Workspace::class);
    }
    // Relation With City
    public function city() {
        return $this->belongsTo(City::class, 'city_id')->withDefault();
    }
        // Accessor Methods
        public function getImageAttribute(){
            if(!$this->avatar) {
                return asset('assets/images/author/avatar.png');
            }
            return asset('user/avatar/' . $this->avatar);

        }
}
