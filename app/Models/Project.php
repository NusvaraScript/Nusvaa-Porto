<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $keyType = 'int';
    protected $guarded = ['id'];
    protected $fillable = ['title', 'description', 'image', 'tags'];
    protected $casts = [
        'tags' => 'array',
    ];
}   
