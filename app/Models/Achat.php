<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achat extends Model
{
    use HasFactory;
    protected $guarded=[];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function panier()
    {
        return $this->belongsTo(Panier::class);
    }

    public function getRouteKeyName()
    {
        return $this->uuid;
    }


}
