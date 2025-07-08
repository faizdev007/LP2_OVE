<div class="md:h-[500px] py-8 border-b border-white bg-sv-gradient text-white">
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    @if(Route::currentRouteName() === 'create_lp_content' || Route::currentRouteName() === 'livewire.update' && auth()->check())
        
    @else
        <div class="relative md:flex grid flex-1 gap-4 md:space-y-0 space-y-48 py-10 px-4 py-2 sm:px-6 lg:px-8 overflow-hidden mx-auto h-full">
            <div class="md:w-[60%] flex flex-col justify-around md:items-start items-center h-full">
                <div class="flex flex-col md:text-left text-center gap-8">
                    <p class="md:text-xl 2xl:text-2xl text-md">Harness the power of cutting-edge technologies with</p>
                    <h1 class="md:text-5xl 2xl:text-6xl text-3xl font-extrabold vast-shadow-bold">Silicon Valley</h1>
                    <div class="md:text-2xl 2xl:text-3xl text-md font-extrabold vast-shadow-bold"><code><</code>Converted Developers <code>/ ></code></div>
                </div>
                <flux:modal.trigger name="book-a-call">
                    <x-silicon-valley.action-button class="" x-data="" x-on:click.prevent="$dispatch('open-modal', 'book-a-call')" title="{{ 'Hire a Developer' }}" class="hover:bg-sv-secondary/50" />
                </flux:modal.trigger>
            </div>
            <div class="md:w-[40%] w-full flex justify-center relative">
                <div class="aspect-[1.3/2] rounded-xl p-1 h-full w-1/2 md:w-auto border-2 border-white relative">
                    <img class="aspect-[1.3/2] object-container rounded-xl h-full absolute top-2 start-2" src="{{asset('assets/siliconvalley/herosection/heroimage.webp')}}"/>
                    <div class="w-full h-full relative">
                        <div class="bg-white shadow-md aspect-[1.5/1] h-12 flex justify-center  animate-[bounce_2.7s_ease-in-out_infinite] max-w-auto p-2 rounded absolute top-5 -start-10">
                            <img loading="eager" class="h-full object-container" src="{{asset('assets/siliconvalley/herosection/nodejs.webp')}}" alt="node.js">
                        </div>
                        <div class="bg-white shadow-md aspect-[1.5/1] h-12 flex justify-center  animate-[bounce_2.3s_ease-in-out_infinite] max-w-auto p-2 rounded absolute -top-5 -end-10">
                            <img loading="eager" class="h-full object-container" src="{{asset('assets/siliconvalley/herosection/python.webp')}}" alt="python">
                        </div>
                        <div class="bg-white shadow-md aspect-[1.5/1] h-12 flex justify-center animate-[bounce_3s_ease-in-out_infinite] max-w-auto p-2 rounded absolute bottom-5 -start-10">
                            <img loading="eager" class="h-full object-container" src="{{asset('assets/siliconvalley/herosection/firebase.webp')}}" alt="firebase">
                        </div>
                        <div class="bg-white shadow-md aspect-[1.5/1] h-12 flex justify-center animate-[bounce_2s_ease-in-out_infinite] max-w-auto p-2 rounded absolute bottom-20 -end-10">
                            <img loading="eager" class="h-full object-container" src="{{asset('assets/siliconvalley/herosection/react.webp')}}" alt="react">
                        </div>
                    </div>
                    <div class="border-e border-b pb-1 pe-1 absolute -bottom-6 md:-end-10 -end-20 rounded-lg border-white">
                        <div class="bg-sv-primary p-3 py-1 rounded">  
                            <p class="text-center m-2">Jenny Doe</p>
                            <hr class="border-gray-200">
                            <div class="bg-gray-200/20 text-sm p-1 px-2 rounded w-max m-2">Sr. AI Engineer</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
