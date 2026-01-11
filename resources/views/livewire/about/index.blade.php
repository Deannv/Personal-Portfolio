<div class="p-2">
    <h2 class="text-white">> About</h2>
    <div class="flex flex-col overflow-y-scroll max-h-[60dvh] md:max-h-[75dvh] py-2 mt-2 gap-4">
        {{-- <pre class="text-xs text-center md:text-start text-secondary">██     ██ ▄▄▄▄▄ ▄▄     ▄▄▄▄  ▄▄▄  ▄▄   ▄▄ ▄▄▄▄▄
██ ▄█▄ ██ ██▄▄  ██    ██▀▀▀ ██▀██ ██▀▄▀██ ██▄▄
 ▀██▀██▀  ██▄▄▄ ██▄▄▄ ▀████ ▀███▀ ██   ██ ██▄▄▄
================================================
------------------------------------------------</pre> --}}

        <div class="flex flex-col md:justify-between md:pr-6 gap-4 md:flex-row md:items-start">
            <div>
                <div class="flex items-center gap-2">
                    <span class="text-yellow-500">name:</span>
                    <span class="text-white">{{ config('app.name') }}</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="text-yellow-500">role:</span>
                    <span class="text-white">{{ $content->role }}</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="text-yellow-500">passion:</span>
                    <span class="text-white">{{ $content->passion }}</span>
                </div>
            </div>
            <div class="flex flex-col gap-2">
                <a 
                href="&#x6d;&#x61;&#x69;&#x6c;&#x74;&#x6f;&#x3a;&#x6b;&#x65;&#x6d;&#x61;&#x73;&#x40;&#x65;&#x69;&#x76;&#x65;&#x72;&#x6e;&#x2e;&#x63;&#x6f;&#x6d;"
                target="_blank"
                class="flex items-center gap-2 px-4 py-2 bg-gray-800 cursor-pointer hover:bg-gray-900 text-white rounded-md justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                    </svg>
                    E-Mail
                </a>

                <a 
                href="{{ $content->linkedin_url }}"
                target="_blank"
                class="flex items-center gap-2 px-4 py-2 bg-gray-800 cursor-pointer hover:bg-gray-900 text-white rounded-md justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
                    </svg>
                    LinkedIn
                </a>
            </div>
        </div>

        <div class="flex flex-col gap-2">
            <div class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-emerald-500">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                </svg>
                <h3 class="text-white">Top Skills</h3>
            </div>
            <div class="flex-wrap flex gap-2">
                @foreach ($topSkills as $skill)
                    <span class="flex-1 text-primary border border-primary rounded-sm text-sm px-4 min-w-fit max-w-fit">{{ $skill->name }}</span>
                @endforeach
            </div>
        </div>

        <div class="flex flex-col gap-4">
            <div class="p-2 rounded-md bg-theme flex flex-col gap-2">
                <span class="text-white">README.md</span>
                <span class="text-gray-400 text-sm">
                    {{ $content->description }}
                </span>
            </div>
            <div class="flex flex-col gap-1">
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-secondary">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                    </svg>
                    <h3 class="text-white">Education</h3>
                </div>
                <div class="flex flex-col gap-2">
                    @foreach ($education as $edu)
                        <div class="flex flex-col gap-1 rounded-md bg-theme p-2">
                            <h4 class="text-white">{{ $edu->major }}</h4>
                            <span class="text-secondary">{{ $edu->name }}</span>
                            <span class="text-sm text-gray-400">{{ $edu->start_date->format('Y') }} - {{ $edu->end_date ? $edu->end_date->format('Y') : 'Present' }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
