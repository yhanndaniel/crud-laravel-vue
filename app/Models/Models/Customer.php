<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name',
        'city_id'
    ];


    public function city(){
        return $this->belongsTo(City::class);
    }
}
