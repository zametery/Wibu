<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    protected $table = 'tag';
    protected $fillable = [
        'tag_name',
        'tag_desc'
    ];


    public function title()
    {
        return $this->belongsToMany('App\Title');
    }
}
