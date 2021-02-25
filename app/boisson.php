<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class boisson extends Model
{
    protected $fillable = ['nom','type','prix','quantité'];
    public $table = "boisson";
}
