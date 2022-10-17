<div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                       Produits
                    </h3>
                    <div class="card-tools">
                        <div class="" style="width: 150px;">
                            <button wire:click.prevent="" class="btn btn-primary">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                Produit
                            </button>
                        </div>
                    </div>
                </div>

                @if (count($produits)>0)
                <div class="card-body table-responsive p-0" style="height: 300px;">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr>
                                <th>Profile</th>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Abilitation</th>
                                <th>Modifier</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($users as $user)
                            <tr>
                                <td>
                                    {{-- <button wire:click.prevent="showUser({{$user->id}})">bbbbb</button> --}
                                    <a href="#" wire:click.prevent='showUser({{$user->id}})'>
                                        <img src="https://via.placeholder.com/40">
                                    </a>
                                </td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->abilitation->nom}}</td>
                                <td> il y'a {{$user->updated_at->diffForHumans()}}</td>
                            </tr>
                            @endforeach --}}
                        </tbody>
                    </table>
                </div>
                @else
                    <p>
                        <h4>Aucun produit pour le moment</h4>
                    </p>
                @endif
            </div>

        </div>
    </div>

</div>
