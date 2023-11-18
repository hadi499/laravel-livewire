<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                @auth

                <x-nav-link :active="request()->routeIs('home')" href="{{route('home')}}">Home</x-nav-link>

                <x-nav-link :active="request()->routeIs('posts.*')" href="{{route('posts.index')}}">Posts
                </x-nav-link>
                <x-nav-link :active="request()->routeIs('users.*')" href="{{route('users.index')}}">Users
                </x-nav-link>
            </ul>
            <ul class="navbar-nav me-4">

                <li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item">Logout</button>
                    </form>
                </li>
            </ul>

            @endauth


        </div>
    </div>
</nav>