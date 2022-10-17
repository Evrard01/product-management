@extends('administration.master.master')

@section('titre','Produits')

@section('content')
    <h1>Produits</h1>
    @livewire('produit.produit-index')
@endsection
