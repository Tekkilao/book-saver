<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/sweet-alert.js') }}"></script>
    <title>Manga Saver</title>
</head>
<body class="mb-48">
<div
class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24"
>
<header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-1">
        Login
    </h2>
    <p class="mb-4">Log into your account to save your books</p>
</header>

<form method="POST" action="/users/authenticate">
    @csrf
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
        <button
            type="submit"
            class="bg-green-500 text-white rounded py-2 px-4 hover:bg-black"
        >
            Sign In
        </button>
    </div>
    <div class="mt-8">
        <p>
            Don't have an account?
            <a href="/register" class="text-red-500"
                >Register</a
            >
        </p>
    </div>
</form>
</div>
<x-flash-message />
<x-footer/>
</body>