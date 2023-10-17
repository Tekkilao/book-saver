@include('sweetalert::alert')
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
    <x-topbar></x-topbar>
                   {{-- <a href="/" class="inline-block text-black ml-4 mb-4"
                ><i class="fa-solid fa-arrow-left"></i> Back
            </a> --}}
            @include('partials._search')
    <div class="mx-4">
    <x-card class="p-10">
    <header>
        <h1
            class="text-3xl text-center font-bold my-6 uppercase"
        >
            Save your chapters
        </h1>
    </header>
    <main>
        <div class="mx-4">
            
            <div class="bg-gray-50 border border-gray-200 p-10 rounded">
                <table class="w-full table-auto rounded-sm">
                    <tbody>
                        @unless($listings->isEmpty())
                        <tr class="py-2 border-t border-b border-gray-300">
                            <th class="px-2 py-2  text-lg">Name</th>
                            <th class="px-2 py-2  text-lg">Chapter</th>
                            <th class="text-lg">Genre</th>

                        </tr>
                        @foreach($listings as $listing)
                        <x-listing-card :listing="$listing" />
                        @endforeach
                        @else
                        <tr class="border-gray-300">
                            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                <p class="text-center">
                                    No Listings Found
                                </p>
                            </td>
                        </tr>
                        @endunless
                    </tbody>
                    
                </table>
                
                <div class="mt-6 p-4">
                    {{ $listings->appends(['search' => request('search')])->links() }}
                </div>
        </x-card>
        <div class="relative mt-2">
            <a href="/listings/add" class="absolute bottom-4 right-4 bg-green-600 text-white py-2 px-6 rounded">
                Add book
            </a>
        </div>
        
    </div>
        </main>
        <x-footer></x-footer>
        <x-flash-message />

</body>
</html>
