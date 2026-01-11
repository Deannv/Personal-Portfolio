<div class="p-2">
    <h2 class="text-white">> Experience</h2>
    <div class="flex flex-col overflow-y-scroll max-h-[60dvh] md:max-h-[75dvh] py-2 mt-2 gap-4">
        @foreach ($companies as $company)
            <div class="bg-theme p-2 rounded-lg flex flex-col gap-2 md:pr-6">
                <h3 class="text-secondary font-semibold text-lg">{{ $company->name }}</h3>

                @foreach ($company->experiences as $experience)
                    <div class="pl-2 border-l border-white border-dashed flex flex-col gap-1">
                        <div class="flex items-center gap-3">
                            <h4 class="text-white text-lg">{{ $experience->title }}</h4>
                            @if ($experience->is_currently_working)
                                <span class="text-white bg-blue-700 text-sm px-2 rounded-sm">
                                    Current
                                </span>
                            @endif
                        </div>
    
                        <div class="flex flex-col items-start md:flex-row md:items-center">
                            <div class="text-gray-400 flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                                </svg>
                                <span>
                                    {{ $experience->start_date->format('M Y') }} - {{ $experience->is_currently_working ? 'Present' : $experience->end_date->format('M Y') }}
                                </span>
                            </div>
    
                            <div class="text-gray-400 flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                </svg>
                                <span>
                                    {{ $experience->location }} ({{ $experience->location_type }})
                                </span>
                            </div>
                        </div>
    
                        <ul class="list-['>'] text-gray-300 pl-2 text-sm marker:text-secondary">
                            @foreach ($experience->experienceBulletPoints as $point)
                                <li class="pl-1">{{ $point->description }}</li>
                            @endforeach
                        </ul>

                        <div class="flex flex-col gap-1 items-start">
                            <div class="text-gray-400 flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                                </svg>
                                <span>Relevant Skills</span>
                            </div>
                            <div class="flex flex-wrap gap-1">
                                @foreach ($experience->skills as $skill)
                                    <span class="flex-1 px-2 border border-amber-600 rounded-sm text-amber-600 text-sm justify-center items-center flex min-w-fit max-w-fit">{{ $skill->name }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</div>
