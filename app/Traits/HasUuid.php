<?php
namespace App\Traits;

use Illuminate\Support\Str;

trait HasUuid
{
    public static function bootHasUuid(){
        static::saving(function($model){
            $model->uuid = (String) Str::uuid();
        });
    }
}
