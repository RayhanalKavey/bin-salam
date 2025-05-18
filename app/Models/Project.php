<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name',
        'description',
        'location',
        'value',
        'monitoring_body',
        'image',
        'status',
        'category_id',
        'user_id',
    ];


    protected $hidden = [
        'category_id',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
