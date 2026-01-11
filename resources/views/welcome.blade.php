<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            /* * {
            scrollbar-width: thin;
            scrollbar-color: #13379C #DFE9EB;
            } */

            /* Chrome, Edge and Safari */
            *::-webkit-scrollbar {
            height: 8px;
            width: 8px;
            }

            *::-webkit-scrollbar-track {
            border-radius: 5px;
            background-color: #727272;
            }

            *::-webkit-scrollbar-track:hover {
            background-color: #727272;
            }

            *::-webkit-scrollbar-track:active {
            background-color: #727272;
            }

            *::-webkit-scrollbar-thumb {
            border-radius: 5px;
            background-color: #252636;
            }

            *::-webkit-scrollbar-thumb:hover {
            background-color: #292b3f;
            }

            *::-webkit-scrollbar-thumb:active {
            background-color: #252636;
            }

        </style>
    </head>
    <body class="bg-theme p-4">
        <livewire:main/>
    </body>
</html>
