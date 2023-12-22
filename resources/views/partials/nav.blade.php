<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('welcome') }}">Pacific<span>Travel Agency</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item @if (url()->current() == route('welcome')) active @endif"><a href="{{ route('welcome') }}" class="nav-link">Home</a></li>
                <li class="nav-item @if (url()->current() == route('about')) active @endif"><a href="{{ route('about') }}" class="nav-link">About</a></li>
                <li class="nav-item @if (url()->current() == route('destination')) active @endif"><a href="{{ route('destination') }}" class="nav-link">Destination</a></li>
                <li class="nav-item @if (url()->current() == route('hotel')) active @endif"><a href="{{ route('hotel') }}" class="nav-link">Hotel</a></li>
                <li class="nav-item @if (url()->current() == route('blog')) active @endif"><a href="{{ route('blog') }}" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->
