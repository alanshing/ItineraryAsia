<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laracasts\Presenter\PresentableTrait;

class Post extends Model
{
    use HasFactory;
    use PresentableTrait;

    /**
    * Presenter for Posts
    */
    protected $presenter = 'App\Presenters\PostPresenter';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'slug',
        'body',
        'published_at',
    ];

    /**
     * Relationship: 
     * A post belongs to a user
     */
    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * Relationship: 
     * A post belongs to many tags 
     */
    public function tags() {
        return $this->belongsToMany('App\Models\Tag');
    }
    
    /**
     * Pass in a parameter of 'Tag'
     * Check if the post has any of tag
     */
    public function hasTag($tag) {
        return null !== $this->tags()->where('name', $tag)->first();
    }

    /**
     * Relationship: 
     * A post belongs to many categories 
     */
    public function categories() {
        return $this->belongsToMany('App\Models\Category');
    }
    
    /**
     * Pass in a parameter of 'Category'
     * Check if the post has any of category
     */
    public function hasCategory($category) {
        return null !== $this->categories()->where('name', $category)->first();
    }
}
