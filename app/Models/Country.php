<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $guarded = [];

    public function customers(){
        return $this->hasMany(Customer::class);
    }
}
