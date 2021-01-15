<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    use HasFactory;

    /**
     * Relationship: 
     * An advertisement belongs to a user 
     */
    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
