<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;
use Laracasts\Presenter\PresentableTrait;

class Page extends Model
{
    use HasFactory;
    use NodeTrait;
    use PresentableTrait;

    /**
    * Presenter for Pages
    */
    protected $presenter = 'App\Presenters\PagePresenter';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'url',
        'content',
    ];

    /**
     * Relationship: 
     * A page belongs to a user
     */
    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    /**
    * Updating pages order
    */
    public function updateOrder($order, $orderPage) {
        $relative = Page::find($orderPage);

        if($order == 'before') {
            $this->beforeNode($relative)->save();
        } else if($order == 'after') {
            $this->afterNode($relative)->save();
        } else if($order == 'child') {
            $relative->appendNode($this);
        }

        Page::fixTree();        
    }
}

