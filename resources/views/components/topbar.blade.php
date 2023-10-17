<nav class="flex justify-between items-center mb-1 bg-indigo-500 p-2">
    <a href="/" class="text-lg uppercase font-bold">
        <i class="fa fa-book fa-lg" aria-hidden="true"></i> <span class="text-white">Book</span><span class="text-yellow-500">SAVER</span>
    </a>
    <ul class="flex space-x-6 mr-6 text-lg">
        @auth
        <li>
            <span class="font-bold uppercase">
                Welcome {{auth()->user()->name}}
            </span>
        </li>
        <li>
            <a href="/listings" class="hover:text-laravel"
                ><i class="fa-solid fa-gear"></i>
                Manage Listings</a
            >
        </li>
        <li>
            <form class="inline" method="POST" action="/logout">
                @csrf
                <button type="submit" >
                    <i class="fa-solid fa-door-closed"></i> Logout
                </button>
            </form>
        </li>
        @else
        <li>
            <a href="/register" class="hover:text-laravel"
                ><i class="fa-solid fa-user-plus"></i> Register</a
            >
        </li>
        <li>
            <a href="/login" class="hover:text-laravel"
                ><i class="fa-solid fa-arrow-right-to-bracket"></i>
                Login</a
            >
        </li>
        @endauth
    </ul>
</nav>