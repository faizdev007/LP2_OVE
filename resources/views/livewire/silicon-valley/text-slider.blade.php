<div class="py-10 border-b border-white overflow-hidden bg-sv-gradient-topbottom text-white">
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    @if(Route::currentRouteName() === 'create_lp_content' || Route::currentRouteName() === 'livewire.update' && auth()->check())
        <fieldset class="container relative text-white max-w-6xl p-4 rounded mx-auto border-2 border-white">
        <x-messagestatus :successMessage="$successMessage" :errorMessage="$errorMessage"></x-messagestatus>
        <legend class="text-xl font-bold text-white  markque px-2">Paragraph with Slider Text Section</legend>
        <p>Customize Paragraph and Slider Text for SiliconValley landing page.</p>
        <form wire:submit.prevent="save" class="mt-2 flex-1 overflow-hidden max-w-7xl mx-auto dark:border-neutral-700">
            <div class="flex flex-col gap-2 mb-4">
                <label for="sliding_text" class="text-sm font-medium">Sliding Text</label>
                <input type="text"
                    class="px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-bacancy-primary"
                    placeholder="Enter Sliding Text"
                    wire:model="sliding_text"
                ></input>
            </div>

            <div class="flex flex-col gap-2 mb-4">
                <label for="paragraph" class="text-sm font-medium">Paragraph</label>
                <x-simple-text-editor id="paragraph" name="paragraph" content="{!! $paragraph !!}" />
            </div>            
            <!-- Save Button -->
            <div class="absolute -top-10 px-2 end-0 flex justify-center">
                <button type="submit" wire:loading.attr="disabled" class="px-6 py-3 cursor-pointer bg-bacancy-primary text-white rounded-full hover:bg-blue-600 transition">
                    <span wire:loading wire:target="save">saving...</span>
                    <span wire:loading.remove wire:target="save">Save</span>
                </button>
            </div>
        </form>
    </fieldset>  
    @else
    <div class="">
        <div class="relative gap-4 overflow-hidden mx-auto h-full">
            <div class="relative w-screen overflow-hidden md:py-18 px-4 py-2 md:-ml-8 -ml-4 h-20 mt-10 z-10 -rotate-6">
                <div class="animate-marquee flex text-nowrap w-max" style="animation-duration: 50s;">
                    <span class="text-5xl font-bold px-4">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </span>
                    <!-- Duplicate to simulate infinite effect -->
                    <span class="text-5xl font-bold px-4">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </span>
                </div>
            </div>

            <p class="md:max-w-5xl md:text-2xl text-justify md:mt-26 mt-12 mx-auto"><code><</code>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<code>/ ></code></p>
        </div>
    </div>
    @endif
</div>
