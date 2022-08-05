<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tainant extends Model
{
    use HasFactory;

    protected $fillable = [
        'workspace_id',
        'owner_id',
        'user_id',
        'start_date',
        'end_date',
        'per_day',
        'total',
        'remaining_days',
        'space',
        'status',
    ];
    /**
     * Relation
     */

    public function workspace()
    {
        return $this->belongsTo(Workspace::class);
    }

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
