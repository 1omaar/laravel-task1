<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['nom','path','user_id'];
    public function user()
    {
        
        return $this->belongsTo('App\User');
    }
}
