<div id="navbar-categories">
    <nav class="navbar navbar-expand-md navbar-light shadow-sm navigation-clean-button">
        <div class="container">
            <div class="d-flex justify-content-center mx-auto align-items-center">
                <img class="navbar-brand" style="width: 30px" src="/storage/img/logo.png"/>
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mx-auto">
                    <li role="presentation" class="nav-item"><a class="nav-link" href="/home">Home</a></li>
                    <li role="presentation" class="nav-item"><a class="nav-link" href="/articles">Articles</a></li>
                    <li role="presentation" class="nav-item"><a class="nav-link" href="#">About</a></li>
                </ul>

                {{-- Search by Algolia --}}
                <form class="form-inline ml-auto" method="GET" action="/search">
                    @csrf
                    <input required class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-light action-button my-2 my-sm-0" type="submit">Search</button>
                </form>
    
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a role="button" class="nav-link btn btn-light action-button" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->username }} <span class="caret"></span>
                            </a>
    
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/profiles/{{Auth::user()->profile->id}}">Profile</a>
                                <a class="dropdown-item" href="/conversations">Inbox</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
    
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container category_container">
        <div class="row">
            <div class="col"><a href="/categories/2">Fashion</a></div>
            <div class="col"><a href="/categories/3">Science</a></div>
            <div class="col"><a href="/categories/4">Entertainment</a></div>
            <div class="col"><a href="/categories/5">Movies</a></div>
            <div class="col"><a href="/categories/6">Comics</a></div>
            <div class="col"><a href="/categories/7">Tech</a></div>
            <div class="col"><a href="/categories/8">Politics</a></div>
        </div>
    </div>    
</div>