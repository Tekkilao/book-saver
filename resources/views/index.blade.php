<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Manga Saver</title>
</head>
<body class="mb-48 bg-cover" style="background-image: url({{ asset('images/back.jpg') }});"> 
        <x-topbar/>
        <main>
                    <section
            class="relative h-72 bg-gray-500 flex flex-col justify-center align-center text-center mt-52 space-y-4 mb-4"
            >
            <div
                class="absolute top-0 left-0 w-full h-full opacity-10 bg-no-repeat bg-center"
                style="background-image: url('images/laravel-logo.png')"
            ></div>

            <div class="z-10">
                <h1 class="text-6xl font-bold uppercase text-white">
                    Book<span class="text-black"> Saver</span>
                </h1>
                <p class="text-2xl text-gray-200 font-bold my-4">
                    Never forget the chapter you stopped ever again
                </p>
                <div>
                    <a
                        href="/register"
                        class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black"
                        >Sign Up</a
                    >
                </div>
            </div>
            </section>
        </main>
        <footer class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-indigo-500 text-white h-24 mt-24 opacity-90 md:justify-center">
            <p class="ml-2">Copyright &copy; 2023, All Rights reserved</p>
        </footer>
        <x-flash-message />
</body>
</html>