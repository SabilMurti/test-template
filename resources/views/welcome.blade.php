<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Mengambil Title dari Config/Env -->
        <title>{{ config('app.name') }}</title> 
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="antialiased bg-gray-900 text-white flex items-center justify-center h-screen">
        <div class="text-center">
            <h1 class="text-6xl font-bold tracking-tight mb-4">
                {{-- INI POIN UTAMANYA: Mengambil variable dari .env --}}
                {{ config('app.name') }}
            </h1>
            <p class="text-xl text-gray-400">
                Setup by Klore Automation
            </p>
        </div>
    </body>
</html>