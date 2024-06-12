<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Copy extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsToMany('App\Models\User');
    }
    
    public function book(){
        return $this->belongsTo('App\Models\Copy');
    }
}