<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <style>
        /* Hide scrollbar */
        body::-webkit-scrollbar {
            width: 0.25rem;
        }
        body::-webkit-scrollbar-track {
            background: transparent;
        }
        body::-webkit-scrollbar-thumb {
            background-color: transparent;
        }
        body::-webkit-scrollbar-thumb:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

{{ $slot }}

</html>