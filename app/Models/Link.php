<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $guarded = [];

    public function customers(){
        return $this->hasMany(Customer::class);
    }
}
