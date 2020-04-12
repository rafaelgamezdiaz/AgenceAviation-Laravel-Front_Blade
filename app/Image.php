<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';
    protected $fillable = ['project_id', 'name'];

    public function project(){
        return $this->belongsTo('App\Project');
    }
}
