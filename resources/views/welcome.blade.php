<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
    </head>
    <body class="bg-theme p-4">
        <header class="flex justify-between items-center">
            <h1 class="text-secondary text-2xl">{{ config('app.name') }}<span class="text-white">.terminal</span></h1>
            <div class="flex gap-1 items-center">
                <span class="block size-3 rounded-full bg-red-500"></span>
                <span class="block size-3 rounded-full bg-yellow-500"></span>
                <span class="block size-3 rounded-full bg-green-500"></span>
            </div>
        </header>
        <main class="py-2 flex flex-col md:flex-row gap-4">
            <section class="min-h-[70dvh] md:min-w-[75dvw] md:min-h-[85dvh] bg-tertiary rounded-xl">
                <span class="text-white flex p-2 bg-gray-800">Output</span>
                {{-- Content --}}
                
                {{-- End of Content --}}
            </section>
            <section class="min-h-[15dvh] md:min-w-[20dvw] md:min-h-[85dvh] bg-tertiary rounded-xl flex flex-col justify-between">
                <div class="p-2 flex items-center">
                    <div class="flex gap-1 mr-1">
                        <span class="text-green-500">kemz@dev</span>
                        <span class="text-white">:</span>
                        <span class="text-primary">/</span>
                        <span class="text-white">$</span>
                    </div>
                    <input type="text" id="dynamicInput" onchange="resizeInput(this)" class="text-white p-0">
                    <span class="bg-white w-2 h-4 block caret"></span>
                </div>
                <div class="p-2">
                    <hr class="border-secondary"/>
                    <span class="text-white block pb-2 pt-1">Shortcuts</span>
                    <div class="flex flex-wrap gap-2 text-white">
                        <button class="flex-1 border border-white focus:border-indigo-500 focus:bg-indigo-500 focus:text-white rounded-md flex justify-center items-center px-2 py-1 text-sm">/Experience</button>
                        <button class="flex-1 border border-white focus:border-indigo-500 focus:bg-indigo-500 focus:text-white rounded-md flex justify-center items-center px-2 py-1 text-sm">/Projects</button>
                        <button class="flex-1 border border-white focus:border-indigo-500 focus:bg-indigo-500 focus:text-white rounded-md flex justify-center items-center px-2 py-1 text-sm">/Contact</button>
                        <button class="flex-1 border border-white focus:border-indigo-500 focus:bg-indigo-500 focus:text-white rounded-md flex justify-center items-center px-2 py-1 text-sm">/Certifications</button>
                    </div>
                </div>
                
            </section>
        </main>
        <script>
            function resizeInput(element){
                element.size = element.value.length || 1;
            }

            resizeInput(document.getElementById('dynamicInput'))
        </script>
    </body>
</html>
