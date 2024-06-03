<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixel Entries</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black text-white px-4">
    <nav class="flex justify-between items-center py-4 border-b border-white/10">
        <div>
            <a href="/">
                <img src="{{ Vite::asset('resources/images/logo.svg')}}" alt="logo" />
            </a>
        </div>
        <div class="space-x-6 font-bold">
            <a href="">Job</a>
            <a href="">Career</a>
            <a href="">Salaries</a>
            <a href="">Companies</a>
        </div>
        <div>post a job</div>
    </nav>

    <main class="mt-10 max-w-[986px] mx-auto">
        {{ $slot }}
    </main>
</body>

</html>