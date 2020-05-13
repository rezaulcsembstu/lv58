<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{!! asset('images/logo.png') !!}" class="img-fluid rounded-circle" alt=""> Learning Laravel
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse float-right" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
            <a class="nav-link" href="{{ url('home') }}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('products') }}">Products</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('images/create') }}">Images</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('welcome') }}">Welcome</span></a>
        </li>
        @if (Auth::check())
            @if (Auth::user()->hasAnyRole(['Manager', 'Admin', 'Super Admin']))
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin/categories') }}">Categories</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin/posts') }}">Posts</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin/roles') }}">Roles</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin/users') }}">Users</span></a>
                </li>
            @endif
        @endif
        <li class="nav-item">
            <a class="nav-link" href="{{ url('about') }}">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('contactCrop') }}">ContactCrop</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('blog') }}">Blog</a>
        </li>
        <li class="nav-item">

        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Ticket
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                {!! link_to_action('TicketsController@create', 'Contact', null, ['class' => 'dropdown-item']) !!}
                {!! link_to_action('TicketsController@index', 'Tickets', null, ['class' => 'dropdown-item']) !!}
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                @if (Auth::check())
                    {{ Auth::user()->name }}
                @else
                    Socials
                @endif
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            @if (Auth::check())
                @if (Auth::user()->hasAnyRole(['Manager', 'Admin', 'Super Admin']))
                    {!! link_to_action('Admin\PagesController@home', 'Admin Home', null, ['class' => 'dropdown-item']) !!}
                @endif
                    {!! link_to_action(
                        'Admin\PagesController@home',
                        'Logout',
                        null,
                        [
                            'class' => 'dropdown-item',
                            'onclick' => 'event.preventDefault();document.getElementById("logoutForm").submit();'
                        ])
                    !!}

                    {!! Form::open(['action' => 'Auth\LoginController@logout', 'id' => 'logoutForm']) !!}
                    {!! Form::close() !!}
            @else
                {!! link_to_action('SocialsController@showRegistrationForm', 'Register', null, ['class' => 'dropdown-item']) !!}
                {!! link_to_action('SocialsController@showLoginForm', 'Login', null, ['class' => 'dropdown-item']) !!}
            @endif
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                AJAX
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                {!! link_to_action('AjaxController@getRegister', 'AJAX Register', null, ['class' => 'dropdown-item']) !!}
                {!! link_to_action('AjaxController@getLogin', 'AJAX Login', null, ['class' => 'dropdown-item']) !!}
            </div>
        </li>
        </ul>
    </div>
  </div>
</nav>
