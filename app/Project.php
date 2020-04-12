<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $fillable = ['category_id', 'name', 'description', 'description2', 'image'];

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function videos(){
        return $this->hasMany('App\Video');
    }

    public function images(){
        return $this->hasMany('App\Image');
    }

}
