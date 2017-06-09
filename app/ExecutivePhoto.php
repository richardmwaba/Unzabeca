<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExecutivePhoto extends Model
{
    protected $fillable = [
        'member_id', 'imagePath', 'filename'
    ];

    /**
     * Handles the relation between members table and the executive_photo table
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function members(){
        return $this->belongsTo('App\Member', 'member_id', 'member_id'); // foreign key article_id
    }
}
