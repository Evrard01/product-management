<?php

namespace App\Models;

use App\Traits\Uuid;
use App\Traits\HasUuid;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasUuid;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function abilitation()
    {
        return $this->belongsTo(Abilitation::class);
    }
    public function types()
    {
        return $this->hasMany(Type::class);
    }
    public function produits()
    {
        return $this->hasMany(Produit::class);
    }
    public function paniers()
    {
        return $this->hasMany(Panier::class);
    }
    public function achats()
    {
        return $this->hasMany(Achat::class);
    }

    public function getRouteKeyName()
    {
        return $this->uuid;
    }
}
