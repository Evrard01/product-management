<div>
    <div class="d-flex" >
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        Categories
                    </h3>
                    <div class="card-tools">
                        <div class="" style="width: 150px;">
                            <button wire:click.prevent='mode' class="btn btn-primary">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                Categorie
                            </button>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @if (count($categories)>0)
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                {{-- <th style="width: 10px"> # </th> --}}
                                <th> Titre </th>
                                <th> Progrès </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $type)
                            <tr class="position-relative">
                                {{--  --}}
                                <td>
                                    {{$type->titre}}
                                </td>
                                <td>
                                    <div class="progress progress-xs">
                                        <a href="#" wire:click.prevent='showecat({{$type}})' class="stretched-link" ></a>
                                        <div class="progress-bar progress-bar-danger" style="width: {{count($type->produits)}}%"></div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                        <h4>Aucune categorie</h4>
                    @endif
                </div>

                <div class="card-footer clearfix">
                    {{$categories->links()}}
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            @if ($upadteOrCreateMode)
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">
                        @if ($showMode)
                        Modifier une categorie
                        @else
                        Ajouter une categorie
                        @endif
                    </h3>
                </div>
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="#">
                                Titre
                            </label>
                            <input type="text" class="form-control" id="titre" value="{{old('titre')}}"
                                placeholder="Fruit" wire:model='titre'>
                            @error('titre')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="card-footer">
                        @if ($showMode)
                        <button type="submit" wire:click.prevent='modifier' class="btn btn-primary">
                            Modifier
                        </button>
                        @else
                        <button type="submit" wire:click.prevent='create' class="btn btn-primary">
                            Soumettre
                        </button>
                        @endif
                        <button type="submit" wire:click.prevent='resetMode' class="btn btn-info">
                            Annuler
                        </button>
                    </div>
                </form>
            </div>
            @else

            @endif
        </div>
    </div>
</div>
