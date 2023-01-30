<?php

namespace App;

use App\Traits\Slugger;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'category_id',
        'slug',
        'title',
        'image',
        'content',
        'excerpt',
    ];
    use Slugger;

    public function category() {
        return $this->belongsTo('App\Category');
    }
}
