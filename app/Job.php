<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'users_id', 'name', 'location', 'role', 'salary', 'description', 'image'
    ];

    public function jobs(){
        return $this->hasMany(Job::class, 'jobs_id', 'id');
    }
}
