<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payway extends Model
{
    protected $table = 'payway';
    protected $fillable = ['title','payway_type_id','currency_id'];

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

    public function payway_type()
    {
        return $this->belongsTo(PaywayType::class);
    }
}
