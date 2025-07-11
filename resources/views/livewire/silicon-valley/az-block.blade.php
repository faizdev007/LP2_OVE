<div class="border-b md:h-screen border-white bg-sv-gradient-topbottom">
    {{-- Success is as dangerous as failure. --}}
    @if(Route::currentRouteName() === 'create_lp_content' || Route::currentRouteName() === 'livewire.update' && auth()->check())
    <fieldset class="container relative text-white max-w-6xl p-4 rounded mx-auto border-2 border-white">
        <x-messagestatus :successMessage="$successMessage" :errorMessage="$errorMessage"></x-messagestatus>
        <legend class="text-xl font-bold text-white  markque px-2">A-Z Section</legend>
        <p>Customize the A to Z section of your SiliconValley landing page.</p>
        <form wire:submit.prevent="save" class="mt-2 flex-1 overflow-hidden max-w-7xl mx-auto dark:border-neutral-700">
            <div class="flex flex-col gap-2 mb-4">
                <label for="title" class="text-sm font-medium">Title</label>
                <x-simple-text-editor id="title" name="title" content="{!! $title !!}" />
            </div>
            <!-- Save Button -->
            <div class="absolute -top-10 px-2 end-0 flex justify-center">
                <button type="submit" wire:loading.attr="disabled" class="px-6 py-3 cursor-pointer bg-black text-white rounded-full hover:bg-blue-600 transition">
                    <span wire:loading wire:target="save">saving...</span>
                    <span wire:loading.remove wire:target="save">Save</span>
                </button>
            </div>
        </form>
    </fieldset>   
    @else
    <div class="azblockbg h-full flex flex-col justify-center items-center">
        <div x-data="{ activeTab: 'A', letters: 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'.split('') }" class="p-6 max-w-5xl mx-auto">
            <h2 class="text-center text-white md:text-3xl text-2xl font-bold mb-10">Whatever You Envision We Have { A To Z } Ready For You</h2>
            <!-- Tabs -->
            <div class="grid md:grid-cols-13 grid-cols-6 md:gap-2 gap-1 justify-center mb-6">
                <template x-for="letter in letters" :key="letter">
                    <button
                        @click="activeTab = letter"
                        class="px-3 bg-sv-secondary cursor-pointer text-white aspect-[1/1] py-1 rounded-md inside-shadow md:text-2xl font-semibold transition-all duration-300"
                        :class="{
                            'border border-sv-primary': activeTab === letter,
                            'border-gray-300 hover:bg-sv-secondary/60': activeTab !== letter
                        }"
                        x-text="letter"
                    ></button>
                </template>
            </div>

            <!-- Tab Content -->
            <div class="bg-sv-gradient-topbottom inset-shadow-sm inset-shadow-white/50 text-white p-1 rounded-xl text-center text-gray-700">
                <div class="relative md:aspect-[2.5/1] aspect-[1/2] md:flex items-center overflow-hidden">
                    <template x-for="letter in letters" :key="letter">
                        <div 
                            x-show="activeTab === letter"
                            x-transition:enter="transition-opacity duration-500"
                            x-transition:enter-start="opacity-0 scale-95"
                            x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition-opacity duration-300"
                            x-transition:leave-start="opacity-100 scale-100"
                            x-transition:leave-end="opacity-0 scale-95"
                            class="absolute md:flex items-center inset-0 w-full h-full gap-4 justify-center md:px-6"
                        >
                            <h2 class="h-full md:text-[13rem] !h-[fit-content] text-[10rem] flex justify-center items-center font-bold" x-text="`${letter}`"></h2>
                            <div class="col-span-2 gap-2 custom-scroll items-center justify-center flex md:flex-wrap md:flex-row flex-col text-black overflow-y-auto">
                                <span class="bg-white h-max w-max rounded-full px-4 p-2 inside-shadow text-nowrap">Artificial Intelligence</span>
                                <span class="bg-white h-max w-max rounded-full px-4 p-2 inside-shadow">ASP .NET</span>
                                <span class="bg-white h-max w-max rounded-full px-4 p-2 inside-shadow">Auto CAD</span>
                                <span class="bg-white h-max w-max rounded-full px-4 p-2 inside-shadow">API Testing</span>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
