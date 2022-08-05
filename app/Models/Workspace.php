<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workspace extends Model
{
    // protected $workspace ='workspaces';
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'location',
        'gallery',
        'price',
        'width',
        'height',
        // 'rating',
        'status',
        'remaining_days',
        'features',
        'owner_id',
        'user_id',
        'city_id',
    ];

    protected $casts = [
        'gallery' => 'json',
        'features' => 'json',
    ];

    // Relation With Owner
    public function owner(){
        return $this->belongsTo(Owner::class);
    }

    // Relation With City
    public function city(){
        return $this->belongsTo(City::class, 'city_id')->withDefault();
    }

}
