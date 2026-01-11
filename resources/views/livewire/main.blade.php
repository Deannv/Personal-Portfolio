<div>
   <header class="flex justify-between items-center">
        <h1 class="text-secondary text-2xl">{{ config('app.name') }}<span class="text-white">.terminal</span></h1>
        <div class="flex gap-1 items-center">
            <span class="block size-3 rounded-full bg-red-500"></span>
            <span class="block size-3 rounded-full bg-yellow-500"></span>
            <span class="block size-3 rounded-full bg-green-500"></span>
        </div>
    </header>
    <main
        x-data="{
            commandText: @entangle('commandText'),
            selectedShortcut: @entangle('selectedShortcut'),
            typedText: '',
            index: 0,
            speed: 50,
            loadContent: false,
            isTyping: false,
            audio: null,

            init() {
                this.audio = new Audio('/sounds/click.mp3');
                this.audio.volume = 0.8;
            },

            startTyping() {
                if (!this.commandText || this.isTyping) return;

                this.loadContent = false;
                this.isTyping = true;
                this.typedText = '';
                this.index = 0;

                this.$nextTick(() => this.typeCharacter());
            },

            typeCharacter() {
                if (this.index < this.commandText.length) {
                    this.typedText += this.commandText[this.index];
                    this.playSound();
                    this.index++;

                    setTimeout(() => this.typeCharacter(), this.speed);
                } else {
                    this.isTyping = false;
                    this.loadContent = true;
                }
            },

            playSound() {
                if (!this.audio) return;
                this.audio.currentTime = 0;
                this.audio.play().catch(() => {});
            }
        }"
        x-init="init()"
        x-effect="if (commandText && typedText !== commandText) {
                startTyping()
            }" class="py-2 flex flex-col md:flex-row gap-4">
        <section class="min-h-[70dvh] max-h-[70dvh] md:min-w-[75dvw] md:max-w-[75dvw] md:min-h-[85dvh] md:max-h-[85dvh] bg-tertiary rounded-xl relative">
            <span class="text-white flex p-2 bg-gray-800">Output</span>
            {{-- Content --}}
            <div x-cloak x-show="loadContent || selectedShortcut === 'Home'">
                @if ($selectedShortcut == 'Experience')
                    <livewire:experience.index wire:key="experience-index"/>
                @elseif($selectedShortcut == 'Projects')
                    <livewire:project.index wire:key="project-index"/>
                @elseif($selectedShortcut == 'Certifications')
                    <livewire:certification.index wire:key="certification-index"/>
                @else
                    <livewire:about.index wire:key="about-index-2"/>
                @endif
            </div>
            {{-- End of Content --}}
        </section>
        <section class="min-h-[15dvh] md:min-w-[22dvw] md:max-w-[22dvw] md:min-h-[85dvh] bg-tertiary rounded-xl flex flex-col justify-between">
            <div class="p-2 flex items-center">
                <div class="flex gap-1 mr-1">
                    <span class="text-green-500">kemz@dev</span>
                    <span class="text-white">:</span>
                    <span class="text-primary">/</span>
                    <span class="text-white">$</span>
                </div>
                <span x-text="typedText" class="text-white block"></span>
                <span class="bg-white w-2 h-4 block caret"></span>
            </div>
            <div class="p-2">
                <hr class="border-secondary"/>
                <span class="text-white block pb-2 pt-1">Shortcut buttons</span>
                <div class="flex flex-wrap gap-2 text-white">
                    @foreach ($shortcuts as $shortcut)
                        <button 
                        wire:key="shortcut-{{ $shortcut }}" 
                        wire:click="selectShortcut('{{ $shortcut }}')" 
                        class="flex-1 border border-white @if ($selectedShortcut == $shortcut)
                            border-indigo-500 bg-indigo-500 text-white
                        @endif rounded-md flex justify-center items-center px-2 py-1 text-sm
                        disabled:opacity-25"
                        wire:loading.attr="disabled">
                            /{{ $shortcut }}
                        </button>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
</div>
