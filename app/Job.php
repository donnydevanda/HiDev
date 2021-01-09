<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'users_id', 'name', 'location', 'role', 'salary', 'description', 'image'
    ];
}
