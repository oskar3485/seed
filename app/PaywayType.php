<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaywayType extends Model
{
    protected $table = 'payway_type';
    protected $fillable = ['title'];

    public function payway()
    {
        return $this->hasMany(Payway::class);
    }
}
