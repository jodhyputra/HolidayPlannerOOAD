<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    //
    public function getRouteKeyName()
    {
        return 'code';
    }

    protected $fillable = [
        'name', 'description' ,'price','code','image'
    ];
}
