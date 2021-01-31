<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'city',
    ];

    public function customers()
    {
        return $this->hasMany(Customer::class);
    }
}
