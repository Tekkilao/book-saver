<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="{{ asset('js/sweet-alert.js') }}"></script>

    <script src="https://cdn.tailwindcss.com"></script>
    
    <title>Document</title>
</head>

<body class="mb-48">
    <x-topbar/>
    <div
    class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24"
>
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Register
        </h2>
        <p class="mb-4">Create an account to post gigs</p>
    </header>

    <form method="POST" action="/users">
        @csrf
        <div class="mb-6">
            <label for="name" class="inline-block text-lg mb-2">
                Name
            </label>
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="name"
                value="{{ old('name') !== '' ? old('name') : '' }}"
            />
            @error('name')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="email" class="inline-block text-lg mb-2"
                >Email</label
            >
            <input
                type="email"
                class="border border-gray-200 rounded p-2 w-full"
                name="email"
                value="{{old('email') !== '' ? old('email') : ''}}""
            />
            @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label
                for="password"
                class="inline-block text-lg mb-2"
            >
                Password
            </label>
            <input
                type="password"
                class="border border-gray-200 rounded p-2 w-full"
                name="password"
            />
            @error('password')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
        </div>

        <div class="mb-6">
            <label
                for="password_confirmation"
                class="inline-block text-lg mb-2"
            >
                Confirm Password
            </label>
            <input
                type="password"
                class="border border-gray-200 rounded p-2 w-full"
                name="password_confirmation"
            />
            @error('password_confirmation')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
        </div>

        <div class="mb-6">
            <button
                type="submit"
                class="bg-black text-white rounded py-2 px-4 hover:bg-black"
            >
                Sign Up
            </button>
        </div>

        <div class="mt-8">
            <p>
                Already have an account?
                <a href="/login" class="text-red-500"
                    >Login</a
                >
            </p>
        </div>
    </form>
</div>
</main>
<x-footer></x-footer>
<x-flash-message />

</body>
</html>
