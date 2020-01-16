<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">Learning Laravel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse float-right" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
            <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('about') }}">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('blog') }}">Blog</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('contact') }}">Contact</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                @if (Auth::check())
                    {{ Auth::user()->name }}
                @else
                    Member
                @endif
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            @if (Auth::check())
                @if (Auth::user()->hasRole('Manager'))
                    {!! link_to_action('Admin\PagesController@home', 'Admin', null, ['class' => 'dropdown-item']) !!}
                @endif
                    {!! link_to_action('Auth\LoginController@logout', 'Logout', null, ['class' => 'dropdown-item']) !!}
            @else
                {!! link_to_action('SocialController@showRegistrationForm', 'Register', null, ['class' => 'dropdown-item']) !!}
                {!! link_to_action('SocialController@showLoginForm', 'Login', null, ['class' => 'dropdown-item']) !!}
            @endif
            </div>
        </li>
        </ul>
    </div>
  </div>
</nav>
