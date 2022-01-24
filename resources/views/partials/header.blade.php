<header class="container py-5">
  <ul class="nav nav-pills">
     <li class="nav-item">
       <a class="nav-link {{ (Route::currentRouteName() === 'home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
     </li>
     <li class="nav-item">
       <a class="nav-link {{ (Route::currentRouteName() === 'attori') ? 'active' : '' }}" href="{{ route('attori') }}">Attori</a>
     </li>
     <li class="nav-item">
       <a class="nav-link {{ (Route::currentRouteName() === 'films') ? 'active' : '' }}" href="{{ route('movies') }}">Films</a>
     </li>
  </ul>
</header>