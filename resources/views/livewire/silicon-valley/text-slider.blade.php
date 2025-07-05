<div class="md:h-[500px] py-10 border-b border-white overflow-hidden bg-sv-primary text-white">
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    @if(Route::currentRouteName() === 'create_lp_content' || Route::currentRouteName() === 'livewire.update' && auth()->check())
        
    @else
        <div class="relative gap-4 md:py-10 px-4 py-2 sm:px-6 lg:px-8 overflow-hidden mx-auto h-full">
            <div class="relative w-screen overflow-hidden md:-ml-8 -ml-4 h-12 mt-10 -rotate-6">
                <div class="animate-marquee flex text-nowrap w-max" style="animation-duration: 40s;">
                    <span class="text-5xl font-bold px-4">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </span>
                    <!-- Duplicate to simulate infinite effect -->
                    <span class="text-5xl font-bold px-4">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </span>
                </div>
            </div>

            <p class="md:max-w-5xl text-justify md:mt-26 mt-12 mx-auto"><code><</code>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<code>/ ></code></p>
        </div>
    @endif
</div>
