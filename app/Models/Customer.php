<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded = [];

    public function country() {
        return $this->belongsTo(Country::class);
    }

    public function link() {
        return $this->belongsTo(Link::class);
    }
}
