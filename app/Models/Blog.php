<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    protected $keyType = 'int';
    protected $guarded = ['id'];
    protected $fillable = ['title', 'content'];
}
