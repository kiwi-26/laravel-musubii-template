<header class="inner">
@if (Route::has('login'))
    <div class="box is-flex is-space-left-sm is-right is-margin-vertical-md">
        @auth
        <a class="text is-link is-primary" href="{{ url('/home') }}">Home</a>
        @else
        <a class="text is-link is-primary" href="{{ route('login') }}">Login</a>

        @if (Route::has('register'))
        <a class="text is-link is-primary" href="{{ route('register') }}">Register</a>
        @endif
        @endauth
    </div>
@endif
</header>