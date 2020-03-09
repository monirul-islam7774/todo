<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
    public function getBodyAttribute($value){
        return ucfirst($value);
    }
    public function getTitleAttribute($value){
        return ucfirst($value);
    }
    public function setBodyAttribute($value){
        return $this->attributes['body'] = ucfirst($value);
    }
    public function setTitleAttribute($value){
        return $this->attributes['title'] = ucfirst($value);
    }
}
