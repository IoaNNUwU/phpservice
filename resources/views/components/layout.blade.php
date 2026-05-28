<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    class="min-h-screen bg-neutral-950 text-white antialiased dark:bg-linear-to-b dark:from-neutral-950 dark:to-neutral-900">

    <x-head/>

    {{ $slot }}

    <footer class="bg-neutral-850 text-neutral-300 text-center py-4">
        <div class="container mx-auto">
            &copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. Created by <a href="https://github.com/ioannuwu"
                target="_blank" class="link-dark">ioannuwu</a>
        </div>
    </footer>

</body>

</html>