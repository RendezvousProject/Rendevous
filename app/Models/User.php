<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'password',
        'avatar',
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'avatar' => 'json',

    ];
    public function workspace(){
        return $this->hasOne(Workspace::class);
    }

     // Relation With City
     public function city(){
        return $this->belongsTo(City::class, 'city_id')->withDefault();
    }

    // Accessor Methods
    public function getImageAttribute(){
        if(!$this->avatar) {
            return asset('assets/images/author/avatar.png');
        }
        return asset('user/avatar' . '/' . $this->avatar);

    }
    // Mutators
    // $user->email = "R@Gmail.com" -> "r@gmail.com
    // public function setEmailAttribute($value) {
    //     $this->attributes['email'] = Str::lower($value);
    // }

}
