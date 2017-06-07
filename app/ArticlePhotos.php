<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticlePhotos extends Model
{
    protected $fillable = [
        'article_id', 'filename'
    ];

    /**
     * Handles the relation between articles table and the articlePhotos table
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function articles(){
        return $this->belongsTo('App\Articles', 'id', 'article_id'); // foreign key article_id
    }
}
