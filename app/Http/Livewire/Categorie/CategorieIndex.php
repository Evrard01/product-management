<?php

namespace App\Http\Livewire\Categorie;

use App\Models\Type;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CategorieIndex extends Component
{
    public $upadteOrCreateMode=false;
    public $titre="";
    public $showMode=false;
    public $cate;

    public function mode()
    {
        $this->upadteOrCreateMode=true;
        $this->showMode=false;
    }

    public function resetMode()
    {
        $this->upadteOrCreateMode=false;
        $this->showMode=false;
    }

    public function create()
    {
        $this->validate([
            "titre"=>"required|string"
        ]);
        Type::create([
            "user_id"=>Auth::id(),
            "titre"=>$this->titre
        ]);

        $this->reset('titre');
        return redirect()->route('type.index');
    }

    public function showecat(Type $type)
    {
        $this->upadteOrCreateMode=true;
        $this->showMode=true;
        $this->cate = $type;
        $this->titre = $type->titre;
    }

    public function modifier()
    {
        $cate = $this->cate;
        $cate->titre = $this->titre;
        $cate->user_id = Auth::id();
        $cate->save();
        redirect()->route('type.index');
        $this->upadteOrCreateMode=false;
        $this->showMode=false;
        $this->reset('titre');
        $this->resetErrorBag('titre');

    }

    public function render()
    {
        return view('livewire.categorie.categorie-index',[
            "categories"=>Type::paginate(5)
        ]);
    }
}
