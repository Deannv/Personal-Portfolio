<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        {{-- Meta --}}
        <meta name="description" content="Software engineer specializing in backend and full-stack development, with hands-on experience in Laravel and modern web stacks. An Apple Developer Academy alumnus, trained in product thinking, teamwork, and delivering solutions based on real user needs.">
        <meta name="keywords" content="Kemas, {{ config('app.username') }}, Kemas Muhamad Abdillah Deanova, Kemz, Kemas Portfolio, portfolio, {{ config('app.username') }} Portfolio, Kemas Software Engineer, software engineer in Bali, software engineer nearby, Laravel, iOS Developer in Bali, iOS Developer, Kemas Developer, Kemas Eivern">
        <meta name="author" content="{{ config('app.username') }}">

        <meta name="robots" content="index, follow">
        <meta name="googlebot" content="index, follow">

        <meta property="og:type" content="website">
        <meta property="og:site_name" content="{{ config('app.username') }}'s Portfolio">
        <meta property="og:title" content="Console Portfolio">
        <meta property="og:description" content="Software engineer specializing in backend and full-stack development, with hands-on experience in Laravel and modern web stacks. An Apple Developer Academy alumnus, trained in product thinking, teamwork, and delivering solutions based on real user needs. I enjoy designing clean systems, solving complex problems, and building software that’s both scalable and meaningful.">
        <meta property="og:url" content="{{ config('app.url') }}">
        <meta property="og:image" content="{{ config('app.url') }}/kemas-draw.png">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="630">
        <meta property="og:image:alt" content="{{ config('app.username') }}'s Sketch">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ config('app.username') }}'s Portfolio">
        <meta name="twitter:description" content="Software engineer specializing in backend and full-stack development, with hands-on experience in Laravel and modern web stacks. An Apple Developer Academy alumnus, trained in product thinking, teamwork, and delivering solutions based on real user needs.">
        <meta name="twitter:image" content="{{ config('app.url') }}/kemas-draw.png">
        <meta name="twitter:site" content="@yourhandle">

        <link rel="icon" href="/kemas-draw.png">

        @verbatim
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Person",
                "name": "Kemas Deanova",
                "url": "https://kemas.eivern.com",
                "sameAs": [
                    "https://www.linkedin.com/in/kemasdnv",
                    "https://github.com/Deannv"
                ]
            }
        </script>
        @endverbatim

        {{-- End of Meta --}}

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
