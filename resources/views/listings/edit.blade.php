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
<script src="https://cdn.tailwindcss.com"></script>
    <title>Edit</title>
</head>
<body class="mb-48">
    <x-topbar/>
    <x-card
class="p-10 max-w-lg mx-auto mt-24">
<header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-1">
        Edit Chapter
    </h2>
    <p class="mb-4">Never forget the chapter you stopped reading</p>
</header>

<form method="POST" action="/listings/edit/{{$listing->id}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-6">
        <label
            for="title"
            class="inline-block text-lg mb-2"
            >Book</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="title"
            value="{{$listing->title}}"
        />
        @error('title')
         <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="chapter" class="inline-block text-lg mb-2"
            >Chapter</label
        >
        <input
            type="number"
            class="border border-gray-200 rounded p-2 w-full"
            name="chapter"
            placeholder="Example: Senior Laravel Developer"
            value="{{$listing->chapter}}"
        />
        @error('chapter')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
       @enderror
    </div>

    <div class="mb-6">
        <label
            for="genre"
            class="inline-block text-lg mb-2"
            >Genre</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="genre"
            placeholder="Example: Remote, Boston MA, etc"
            value="{{$listing->genre}}"
        />
        @error('genre')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
       @enderror
    </div>

    <div class="mb-6">
        <label for="link" class="inline-block text-lg mb-2">
            Link
        </label>
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="link"
            placeholder="Example: Laravel, Backend, Postgres, etc"
            value="{{$listing->link}}"
        />
        @error('link')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
       @enderror
    </div>




    <div class="mb-6">
        <a href="/listings" class="text-black ml-4"> Back </a>
        <button
        class="bg-black ml-10 text-white rounded py-2 px-4 hover:bg-black"
    >
        Create Gig
    </button>
    </div>
</form>
</x-card>
<x-footer/>
<x-flash-message />
</body>
</html>