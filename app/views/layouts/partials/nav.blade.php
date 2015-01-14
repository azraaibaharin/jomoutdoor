<div role="navigation" class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="{{{ route('home') }}}" class="navbar-brand"><img src="{{ asset('img/logo.png') }}"></a>
        </div>
        @if (!isset($hideSubMenus))
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{{ route('about') }}}">Photos</a></li>
                <li><a href="{{{ route('about') }}}">Videos</a></li>
            @if (!Auth::check())
                <li><a href="{{{ route('admin') }}}">Login</a></li>
            @else
                @if (Auth::user()->permission == 0)
                    <li><a href="{{{ route('admin') }}}">Admin</a></li>
                @endif
                <li><a href="{{{ route('logout') }}}">Logout ({{ Auth::user()->username }})</a></li>
            @endif
            </ul>
        </div>
        @endif
    </div>
</div>