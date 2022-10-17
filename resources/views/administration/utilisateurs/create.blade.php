@extends('administration.master.master')

@section('titre','Creation')

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">
            Creer un utilisateur
        </h3>
    </div>
    <form action="{{route('utilisateurs.store')}}" enctype="multipart/form-data" >
        {{-- @csrf
        @method('PUT') --}}
        {{-- <div class="card-body">
            <div class="form-group">
                <label for=""> --}}
                    Adresse e-mail
                {{-- </label> --}}
                <input type="email" class="form-control" id="email" placeholder="nom@domaine.com" name="email" >
                @error('email')
                    azerty
                @enderror
            {{-- </div>
            <div class="form-group">
                <label for=""> --}}
                    Nom
                {{-- </label> --}}
                <input type="text" class="form-control" id="nom" placeholder="exemple:louise" name="nom" >
            {{-- </div>
            <div class="form-group">
                <label for="">
                    Abilitation
                </label> --}}
                <select class="custom-select rounded-2" id="abilitation" name="abilitation" >
                    <option value="" >-------Choisir une abiliatation-------</option>
                    @foreach ($abilitaions as $abilitation)
                        <option value="{{$abilitation->id }}" >{{$abilitation->nom}}</option>
                    @endforeach
                </select>
            {{-- </div>
        </div>
        <div class="card-footer"> --}}
            <button class="btn btn-primary">
                Creer
            </button>
        {{-- </div> --}}
    </form>
</div>
@endsection
