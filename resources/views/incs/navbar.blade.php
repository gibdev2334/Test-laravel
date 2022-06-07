
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      {{-- j'ai changé ici # par route('home') --}}
      <a class="navbar-brand" href="{{ route('home') }}">
        <i class="fas fa-house-chimney"></i>
          Accueil
        </a>

    
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            {{--       j'ai changé ici pour remplacer Link par Articles en changeant le href="#" 
            par href=" {{ route('articles') }}""       --}}

            {{-- <a class="nav-link active" aria-current="page" href="{{ route('articles') }}">Articles</a> --}}
            <a class="nav-link active" aria-current="page" href="{{ route('articles') }}">
              <i class="fa-solid fa-tags"></i>
              
              Boutiques
            
            </a>
          </li>
         
          
          
        </ul>

         {{-- j'ai rajouté pour le front-end vestiges boutiques contact paiement --}}

        <a class="navbar-brand" href="{{ route('home') }}">
        <i class="fa-solid fa-monument"></i>
          Vestiges
        </a>

        <a class="navbar-brand" href="{{ route('home') }}">
        <i class="fa-solid fa-cart-shopping"></i>
          Cami Romieu
        </a>


        <a class="navbar-brand" href="{{ route('home') }}">
         <i class="fa-solid fa-money-check-dollar"></i>
          Paiement
        </a>

        <a class="navbar-brand" href="{{ route('home') }}">
        <i class="fa-solid fa-envelope"></i>
          Contact
        </a>

      {{-- fin des éléments rajoutés pour le front-end --}}

        {{-- rajouter pour l'implémentation de l'authentification --}}
        <ul class="navbar-nav ml-auto mb-2 mb-lg-0">

          @if (Auth::user())
          <li class="nav-item">
            <form action=" {{ route('logout') }} " method="post">
              @csrf 
              <button type="submit" class="btn">Déconnexion</button> 

            </form>
            
          </li>

          @else
          <li class="nav-item active">
            {{-- <a class="nav-link active" aria-current="page" href="{{ route('login') }} ">Me connecter</a> --}}
            <a class="nav-link active" aria-current="page" href="{{ route('login') }} ">
              <i class="fa-solid fa-right-to-bracket"></i> 
              Connexion
            </a>
           
          </li>
         
          
          @endif
        </ul>
       
      </div>
    </div>
  </nav>