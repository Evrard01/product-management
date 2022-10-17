<aside class="control-sidebar control-sidebar-dark">

    <div class="p-3">
        <div class="card-body box-profile">
            <div class="text-center">
                <img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg"
                    alt=" de l'utilisateur Photo de profil de l'">
            </div>
            <h3 class="profile-username text-center">
                {{Auth::user()->name}}
            </h3>
            <p class="text-muted text-center">
                {{Auth::user()->abilitation->nom}}
            </p>
            <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                    <b>
                        Abonnés
                    </b> <a class="float-right">
                         1,322
                    </a>
                </li>
                <li class="list-group-item">
                    <b>
                        Suite
                    </b>
                    <a class="float-right">
                         543
                    </a>
                </li>
                <li class="list-group-item">
                    <b>
                        Amis
                    </b> 
                    <a class="float-right">
                         13 287
                    </a>
                </li>
            </ul>
            <div class="btn btn-primary btn-block">
                <b>
                    <a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </b>
            </div>
        </div>

    </div>



</aside>
