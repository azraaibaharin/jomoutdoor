<div role="navigation" class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="{{{ route('home') }}}" class="navbar-brand">jomoutdoor</a>
        </div>
        @if (!isset($hideSubMenus))
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <!-- <li><a href="{{{ route('home') }}}" title="Photo">Photo</a></li> -->
                <li><a href="https://vimeo.com/user25957853" target="_blank" title="Video">Video</a></li>
                <li><a href="mailto:info@jomoutdoor.com" title="info@jomoutdoor.com">Contact Us</a></li>
            @if (!Auth::check())
                <li><a href="{{{ route('admin') }}}" title="Sign In"><i class="fa fa-sign-in"></i> sign in</a></li>
            @else
                @if (Auth::user()->permission == 0)
                    <li><a href="{{{ route('admin') }}}" title="Administrator">{{ Auth::user()->username }}</a></li>
                @endif
                <li><a href="{{{ route('logout') }}}" title="Sign Out"><i class="fa fa-sign-in"></i> Sign Out</a></li>
            @endif
            </ul>
        </div>
        @endif
    </div>
</div>