<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ url('/') }}">GegeRent</a>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto gap-2 align-items-lg-center">

                <li class="nav-item"><a class="nav-link" href="{{ url('/houses') }}">Appartamenti</a></li>

                @auth
                    <li class="nav-item"><a class="nav-link" href="{{ url('/houses/create') }}">Inserisci</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/profile') }}">Profilo</a></li>
                    <li class="nav-item"><span class="navbar-text">Welcome, {{ auth()->user()->name }}</span></li>

                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button class="btn btn-outline-dark btn-sm">Esci</button>
                        </form>
                    </li>
                @else
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                @endauth

            </ul>
        </div>
    </div>
</nav>
