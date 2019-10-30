<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected  $table = 'currency';
    protected $fillable = ['title','code'];

    public function payway()
    {
        return $this->hasOne(Payway::class);
    }
}
