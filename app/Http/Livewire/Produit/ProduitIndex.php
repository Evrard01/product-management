<?php

namespace App\Http\Livewire\Produit;

use App\Models\Produit;
use Livewire\Component;

class ProduitIndex extends Component
{
    public function render()
    {
        return view('livewire.produit.produit-index',[
            "produits"=>Produit::all(),
        ]);
    }
}
