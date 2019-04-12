<nav class="navbar navbar-expand navbar-dark bg-somecolor">
    <a class="navbar-brand ml-5" href="#">MB24Black</a>



        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ml-auto mr-5">
                <li class="nav-item ">
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
