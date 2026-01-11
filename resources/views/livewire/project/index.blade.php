<div class="p-2">
    <h2 class="text-white">> Projects</h2>
    <div class="flex flex-col overflow-y-scroll max-h-[60dvh] md:max-h-[75dvh] py-2 mt-2 gap-4">
        @foreach ($projects as $project)
            <div class="p-2 bg-theme rounded-md flex flex-col gap-2 md:pr-6">
                <div class="flex items-center justify-between">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-secondary">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                    </svg>

                    <a href="{{ $project->url }}" target="_blank" class="flex items-center gap-2 text-white underline underline-offset-2 hover:opacity-85 cursor-pointer">
                        <span class="text-white text-sm">View</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                        </svg>
                    </a>
                </div>
                <h3 class="text-white text-lg">{{ $project->name }}</h3>
                <span class="text-gray-400 text-sm">
                    {{ $project->description }}
                </span>
                <div class="flex flex-col gap-1 items-start">
                    <div class="text-gray-400 flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                        </svg>
                        <span>Relevant Skills</span>
                    </div>
                    <div class="flex flex-wrap gap-1">
                        @foreach ($project->skills as $skill)
                            <span class="flex-1 px-2 border border-amber-600 rounded-sm text-amber-600 text-sm justify-center items-center flex min-w-fit max-w-fit">{{ $skill->name }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
        <a 
        href="{{ $githubUrl }}" 
        target="_blank"
        class="p-2 flex items-center justify-center rounded-md bg-theme text-white underline underline-offset-2 cursor-pointer"
        >More on GitHub</a>
    </div>
</div>
