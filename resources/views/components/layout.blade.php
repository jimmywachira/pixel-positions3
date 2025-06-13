<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>

    <script src="https://cdn.tailwindcss.com">
    </script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body 
    class="h-full antialiased capitalize font-semibold bg-black text-white pb-20" 
    style="font-family:Quicksand"
    >

    <div class="px-5">
        <nav class="flex justify-between items-center py-4 ">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
                </a>
            </div>

            <div class="space-x-6 font-bold ">
                <a href="#">Jobs</a>
                <a href="#">Careers</a>
                <a href="#">Companies</a>
                <a href="#">Blog</a>
            </div>

            <div class="space-x-3 font-bold flex">
                <a href="">Post a Job</a>
                <a href="">logOut</a>
            </div>

        </nav>

        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>

</body>
</html>