<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Relationship: 
     * A user has many pages 
     */
    public function pages() {
        return $this->hasMany('App\Models\Page');
    }

    /**
     * Relationship: 
     * A user has many posts 
     */
    public function posts() {
        return $this->hasMany('App\Models\Post');
    }

    /**
     * Relationship: 
     * A user belongs to many roles
     */
    public function roles() {
        return $this->belongsToMany('App\Models\Role');
    }

    /**
     * Relationship: 
     * A user is admin
     */
    public function isAdmin() {
        return $this->hasRole(['admin']);
    }

    /**
     * Relationship: 
     * A user is author
     */
    public function isAuthor() {
        return $this->hasRole(['author']);
    }

    /**
     * Relationship: 
     * A user is advertiser
     */
    public function isAdvertiser() {
        return $this->hasRole(['advertiser']);
    }

    /**
     * Pass in a parameter of 'Role'
     * Check if the user has any of role
     */
    public function hasRole($role) {
        return null !== $this->roles()->where('name', $role)->first();
    }
    

    /**
     * Relationship: 
     * A user has many advertisements 
     */
    public function advertisements() {
        return $this->hasMany('App\Models\Advertisement');
    }
}
