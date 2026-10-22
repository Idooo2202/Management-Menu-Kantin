<nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container">
        <a class="navbar-brand text-black fw-bold" href="{{ route('home') }}">
            {{ config('app.name') }}
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTop"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTop">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <x-nav-item :href="route('home')" :active="request()->routeIs('home')">
                    Home
                </x-nav-item>
                <x-nav-item :href="route('about')" :active="request()->routeIs('about')">
                    About
                </x-nav-item>
                <x-nav-item :href="route('menukantin.index')" :active="request()->routeIs('menukantin.index')">
                    Menu Kantin
                </x-nav-item>
            </ul>
        </div>
    </div>
</nav>
