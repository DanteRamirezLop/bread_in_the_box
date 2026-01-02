<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Contact extends Model
{
    use HasFactory;
    protected $guarded = ['id','created_at','updated_at'];
    protected static function booted()
    {
        static::addGlobalScope('only_bussines',function(Builder $builder){
            $builder->where('business_id',12)->whereNotNull('custom_field1')->whereNotNull('custom_field2');
        });
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
