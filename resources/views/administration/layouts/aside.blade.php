
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="{{route('home')}}" class="brand-link text-center" style="font-size: 30px;">
        <span class="brand-text font-weight-light">GDB</span>
    </a>

    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info text-primary">
                {{Auth::user()->abilitation->nom}}
            </div>
        </div>

        <nav class="mt-2" >
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-item  pt-3">
                    <a href="{{route('utilisateurs.index')}}" class="nav-link {{Request()->route()->getName() == ('utilisateurs.index') ? 'active' : ''}}">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <p>
                            Utilsateurs
                        </p>
                    </a>
                </li>

                <li class="nav-item pt-3">
                    <a href="{{route('achats.index')}}" class="nav-link {{Request()->route()->getName() == ('achats.index') ? 'active' : ''}}">
                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                        <p>
                            Achats
                        </p>
                    </a>
                </li>

                <li class="nav-item {{Request()->route()->getName() == ('produits.index') ? 'menu-open' : ''}} pt-3">
                    <a href="#" class="nav-link {{Request()->route()->getName() == ('produits.index') ? 'menu-is-opening menu-open active' : ' '}} ">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Produits
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item pl-1">
                            <a href="{{route('produits.index')}}" class="nav-link {{Request()->route()->getName() == ('produits.index') ? 'active' : ''}}">
                                {{-- <i class="far fa-circle nav-icon"></i> --}}
                                <p>Tous nos produits</p>
                            </a>
                        </li>
                        <li class="nav-item pl-1">
                            <a href="#" class="nav-link">
                                {{-- <i class="far fa-circle nav-icon"></i> --}}
                                <p>Par categorie</p>
                            </a>
                        </li>
                    </ul>
                    <li class="nav-item pt-3">
                        <a href="#" class="nav-link">
                            <i class="fa fa-sitemap" aria-hidden="true"></i>
                            <p>
                                Le site
                            </p>
                        </a>
                    </li>
                </li>
            </ul>
        </nav>

    </div>

</aside>
