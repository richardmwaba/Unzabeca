<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    protected $primaryKey = 'article_id';

    protected $fillable = [
        'articleTitle', 'author', 'articleBody'
    ];


    public function articlePhoto(){
        return $this->hasOne('App\ArticlePhotos', 'article_id');
    }

}
