<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  Illuminate\Database\Eloquent\Builder;
class Media extends Model
{
    use HasFactory;
    protected $table = "media";
    protected $fillable = ['file_name','model_type', 'model_id'];

    protected static function booted()
    {
        static::addGlobalScope('only_bussines',function(Builder $builder){
            $builder->where('business_id',12);
        });
    }

    public function imageble(){
        return $this->morphTo();
    }
}
