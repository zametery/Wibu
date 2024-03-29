<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';

    protected $fillable = [
        'chapter_id',
        'creator_id',
        'content',
        'like'
    ];

    protected function lcomment()
    {
        return $this->belongsTo('App\Chapter');
    }

    protected function lreply()
    {
        return $this->hasMany('App\Reply');
    }
}
