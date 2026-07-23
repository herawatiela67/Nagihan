<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded = ['id'];

    public function village()
    {
        return $this->belongsTo(Village::class);
    }

    public function credits()
    {
        return $this->hasMany(Credit::class);
    }
}
