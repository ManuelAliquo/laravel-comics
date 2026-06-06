<header class="bg-white">
    <nav class="navbar navbar-expand-lg bg-white container">
      <div class="container-fluid">
        <img class="navbar-brand img-fluid" src="{{ Vite::asset("resources/imgs/dc-logo.png")}}" alt="logo">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          {{-- NAV-LINKS --}}
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{route("comics")}}">COMICS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route("other")}}">OTHER PAGE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Page 3</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Page 4</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Page 5</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Page 6</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Page 7</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Page 8</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Page 9</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Page 10</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
</header>