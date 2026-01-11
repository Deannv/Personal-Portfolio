<div class="p-2">
    <h2 class="text-white">> Certifications & Licenses</h2>
    <div x-data="{ open: false, image: null }" class="flex flex-col overflow-y-scroll max-h-[60dvh] md:max-h-[75dvh] py-2 mt-2 gap-4">
        @foreach ($certifications as $certification)
            <div class="p-2 rounded-md bg-theme flex flex-col gap-2 md:pr-6" wire:key={{ $certification->id . $certification->title }}>
                <div class="flex items-start justify-between">
                    <div class="flex flex-col gap-1">
                        <h3 class="text-white text-lg">{{ $certification->title }}</h3>
                        <span class="text-secondary">{{ $certification->organization }}</span>
                    </div>
                    <span class="text-sm text-gray-400 text-end min-w-fit">Issued on<br/>{{ $certification->issued_on->format('M Y') }}</span>
                </div>

                @if ($certification->credential_id)
                    <span class="text-gray-400">
                        Credential ID:
                        {{ $certification->credential_id }}
                    </span>
                @endif

                @if ($certification->image)
                    <div class="relative w-fit cursor-pointer" @click="open = true; image = '{{ $certification->image }}'">
                        <div class="bg-black/65 rounded-sm p-1 text-white w-fit flex items-center justify-center absolute bottom-4 right-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15" />
                            </svg>
                        </div>
                        <img 
                        src="storage/{{ $certification->image }}" 
                        alt="{{ $certification->title }} - {{ config('app.name') }} Certification Image"
                        class="size-56 rounded-md"
                        >
                    </div>
                @endif
            </div>
        @endforeach

        <div
            x-show="open"
            x-transition.opacity.duration.300ms
            class="fixed inset-0 z-50 flex items-center justify-center"
            x-cloak
        >
            <div
                class="absolute inset-0 bg-black/60 backdrop-blur-sm"
            ></div>

            <div
                x-transition.scale.duration.300ms
                class="relative z-10 max-w-4xl w-full mx-4 bg-white rounded-2xl shadow-2xl overflow-hidden"
            >
                <button
                    @click="open = false"
                    class="absolute top-3 right-3 w-9 h-9 rounded-full bg-black/60 text-white flex items-center justify-center hover:bg-black transition"
                    aria-label="Close"
                >
                    ✕
                </button>

                <img
                    :src="'storage/' + image"
                    class="w-full max-h-[85vh] object-contain bg-black"
                    alt="Preview"
                >
            </div>
        </div>
    </div>
</div>

