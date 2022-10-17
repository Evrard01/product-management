<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    use HasUuid;

    protected $guarded = [];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function paniers()
    {
        return $this->belongsToMany(Panier::class,'panier_produits','panier_id','produit_id')->withPivot('panier_produits','panier_id','produit_id');
    }

    public function getRouteKeyName()
    {
        return $this->uuid;
    }

}
