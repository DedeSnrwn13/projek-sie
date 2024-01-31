<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('welcome') }}">Sukabumi<span>Jelajah Wisata</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item @if (url()->current() == route('welcome')) active @endif"><a href="{{ route('welcome') }}" class="nav-link">Beranda</a></li>
                <li class="nav-item @if (url()->current() == route('destination')) active @endif"><a href="{{ route('destination') }}" class="nav-link">Destinasi</a></li>
                <li class="nav-item @if (url()->current() == route('blog')) active @endif"><a href="{{ route('blog') }}" class="nav-link">Blog</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->
