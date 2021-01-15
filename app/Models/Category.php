<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * Relationship: 
     * A category belongs to many posts 
     */
    public function posts() {
        return $this->belongsToMany('App\Models\Post');
    }
}
