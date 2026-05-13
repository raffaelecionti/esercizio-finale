<nav class="navbar navbar-expand-lg bg-body-tertiary shadow">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('homepage')}}">Presto.it</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbarNav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('homepage')}}">Home</a>
                </li>
                @auth 
                @if (Auth::user()->is_revisor)
                <li class="nav-item">
                <a class="nav-link btn btn-outline-success btn-sm position-relative w-sm-25" href="{{route('revisor.index')}}">Zona revisore</a>
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                {{ \App\Models\Article::toBeRevisedCount()}}
              </span>
                </li>

                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ciao, {{Auth::user()->name}}
                    </a>
                    <ul class="dropdown-menu">
                   <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
                </li>
                <li><a class="dropdown-item" href="{{route('create.article')}}">Crea</a></li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('article.index')}}">Tutti gli articoli</a>
                </li>
                <form action="{{route ('logout')}}" method="POST" class="d-none" id="form-logout">
                    @csrf
                </form>
                    </ul>
                </li>  
                @else
                 <li class="nav-items dropdown">
                    <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">ciao utente</a>
                <ul class="dropdown-menu">
                 <li><a class="dropdown-item" href="{{ route('login') }}">Accedi</a></li>
                <hr class="dropdown-divider">
                <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
                </ul>
                </li>   
            @endauth
            <li class="nav-item dropdown">
                <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" class="nav-link dropdown-toggle">Categorie</a>
            <ul class="dropdown-menu">
             @foreach ($categories as $category)
                 <li>
                    <a href="{{route('byCategory', ['category' => $category])}}" class="dropdown-item text-capitalize">{{$category-> name}}</a>
                 </li>
                 @if (!$loop->last)
                 <hr class="dropdown-divider">
                 @endif
             @endforeach
            </ul>
            </li>
            </ul>
        </div>
    </div>
    <form class="d-flex ms-auto" role="search" action="{{route ('article.search')}}" method="GET">
        <div class="input-group">
         <input type="search" name="querly" class="form-control" placeholder="Search" aria-label="search">
         <button type="submit" class="input-group-text btn btn-outline-success" id="basic-addon2">
          Search
         </button>
        </div>
    </form>
</nav>
