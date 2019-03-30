<nav class="navbar navbar-expand-sm navbar-dark bg-somecolor">
    <a class="navbar-brand ml-5" href="#">MB24Black</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03"
            aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample03">
        <ul class="navbar-nav ml-auto mr-5">
            <li class="nav-item active">
                <a class="nav-link mx-2" href="/">Go to Site</a>
            </li>
            @if(Auth::check())
            <li class="nav-item">
                <a class="nav-link mx-2" href="{{ route('logout') }}">Log Out</a>
            </li>
            @endif

        </ul>

    </div>
</nav>
