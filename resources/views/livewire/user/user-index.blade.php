<div wire:poll>
    @if (session()->has('message'))
    {{session('message')}}
    @endif
    @if ($createUpdateMode)
    <div class="d-flex">
        <div class="col-lg-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">
                        Ajouter un Utilisateur
                    </h3>
                </div>
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="#">
                                E-mail
                            </label>
                            <input type="email" class="form-control" id="email" value="{{old('email')}}"
                                placeholder=" Entrez l'e-mail" wire:model='email'>
                            @error('email')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="#">
                                Nom
                            </label>
                            <input type="text" class="form-control" id="nom" value="{{old('nom')}}"
                                placeholder="exemple@domaine.com" wire:model='nom'>
                            @error('nom')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="#">
                                Abilitation
                            </label>
                            <select class="custom-select rounded-2" id="abilitation" name="abilitation"
                                wire:model='abilitation'>
                                <option value="">-------------------------------------</option>
                                @foreach ($abilitations as $abilitation)
                                <option value="{{$abilitation->id}}"> {{$abilitation->nom}} </option>
                                @endforeach
                            </select>
                            @error('abilitation')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="card-footer">
                        @if ($showMode)
                        <button type="submit" wire:click.prevent='update' class="btn btn-primary">
                            Modifier
                        </button>
                        @else
                        <button type="submit" wire:click.prevent="storeUser()" class="btn btn-primary">
                            Soumettre
                        </button>
                        @endif
                        <button type="submit" wire:click.prevent='resetFilters' class="btn btn-danger">
                            Annuler
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-6">
            5
        </div>
    </div>
    @elseif ($showMode)
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <a href="#" wire:click.prevent='back'>
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                    </a> &nbsp;
                        {{$user->name}}
                </h3>
                <div class="card-tools">

                </div>
            </div>
            <div class="card-body">
                <b>Abilitation: {{$user->abilitation->nom}}</b> <br>
                    Vous pouvez modifier les styles de rythme, consulter les<a
                    href="https://adminlte.io/docs/3.1/" target="_blank" rel="noopener noreferrer">
                     documents officiels AdminLTE
                </a>
                 en ligne.
            <br>

                    Commencez à créer votre incroyable application&nbsp;!

            </div>

            <div class="card-footer">
                <button class="btn btn-secondary" wire:click.prevent='updateUser({{$user->id}})' >Modifier</button> <button class="btn btn-danger">Supprimer</button>
            </div>

        </div>

    </section>
    @else
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        Utilisateurs
                    </h3>
                    <div class="card-tools">
                        <div class="" style="width: 150px;">
                            <button wire:click.prevent='createUser' class="btn btn-primary">
                                <i class="fa fa-user-plus" aria-hidden="true"></i>
                                Utilisateur
                            </button>
                        </div>
                    </div>
                </div>

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
                            @foreach ($users as $user)
                            <tr>
                                <td>
                                    {{-- <button wire:click.prevent="showUser({{$user->id}})">bbbbb</button> --}}
                                    <a href="#" wire:click.prevent='showUser({{$user->id}})'>
                                        <img src="https://via.placeholder.com/40">
                                    </a>
                                </td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->abilitation->nom}}</td>
                                <td> il y'a {{$user->updated_at->diffForHumans()}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    @endif
</div>
