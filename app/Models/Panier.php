<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    use HasFactory;

    protected $guarded=[];


    public function produits()
    {
        return $this->belongsToMany(Produit::class,'panier_produits','produit_id','panier_id')->withPivot('panier_produits','produit_id','panier_id');
    }

    public function achats()
    {
        return $this->hasMany(Achat::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getRouteKeyName()
    {
        return $this->uuid;
    }
}
