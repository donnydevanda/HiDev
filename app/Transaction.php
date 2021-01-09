<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'users_id', 'jobs_id', 'status'
    ];

    public function users(){
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function jobs(){
        return $this->belongsTo(Job::class, 'jobs_id', 'id');
    }
}
