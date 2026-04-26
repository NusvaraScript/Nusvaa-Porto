<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $keyType = 'int';
    protected $guarded = ['id'];
    protected $fillable = ['name', 'email', 'message'];
}
