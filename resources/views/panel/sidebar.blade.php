<div class="sidebar">

    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                @can('view',\App\User::class)
                    <a class="nav-link" href="/"><i class="icon-speedometer"></i> Página Inicial </a>
                @endcan
            </li>
            <li class="nav-title">
                Menu
            </li>
            @can('empresa',\App\User::class)
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="icon-user"></i> Talentos</a>
                </li>
            @endcan
            @can('viewPermissao', \App\User::class)
                @can('Administrador',\App\User::class)
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('usuarios')}}"><i class="icon-people"></i> Ger de usuários</a>
                    </li>
                @endcan
                @can('view',\App\User::class)

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('talento')}}"><i class="fa fa-drivers-license"></i> Recrutar Talentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('empresa')}}"><i class="icon-briefcase"></i> Empresas</a>
                    </li>
                @endcan
                @can('view',\App\User::class)
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('talento')}}"><i class="icon-bag"></i> Recrutamentos</a>
                    </li>
                @endcan
                @can('Administrador',\App\User::class)
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-settings"></i> Configuração</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('cursos')}}"><i class="icon-graduation"></i> Cursos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('om')}}"><i class="fa fa-globe"></i> OMs</a>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('uf')}}"><i class="icon-map"></i> Cidades</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('formacao.militar')}}"><i class="icon-target"></i> Formação Militar</a>
                            </li>
                        </ul>
                    </li>

                @endcan
            @endcan

        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>

</div>