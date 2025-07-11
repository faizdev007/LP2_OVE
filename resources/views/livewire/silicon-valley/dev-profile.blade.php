<div class="py-12 border-b border-white scroll-mt-20 bg-sv-gradient-bottomtop">
    {{-- In work, do what you enjoy. --}}
    @if(Route::currentRouteName() === 'create_lp_content' || Route::currentRouteName() === 'livewire.update' && auth()->check())
    <fieldset class="container relative text-white max-w-6xl p-4 rounded mx-auto border-2 border-white">
        <x-messagestatus :successMessage="$successMessage" :errorMessage="$errorMessage"></x-messagestatus>
        <legend class="text-xl font-bold text-white  markque px-2">Developers Section</legend>
        <p>Customize the Developer Profile section of your SiliconValley landing page.</p>
        <form wire:submit.prevent="save" class="mt-2 flex-1 overflow-hidden max-w-7xl mx-auto dark:border-neutral-700">
            @foreach ($devProfile as $key => $value)
                <div class="md:flex gap-4 mb-6 items-start">
                    <!-- Image Section -->
                    <div class="flex flex-col items-center gap-2">
                        <label class="cursor-pointer relative group">
                            @if (isset($value['image']) && is_object($value['image']))
                                <img src="{{ $value['image']->temporaryUrl() }}"
                                    class="h-58 w-58 rounded-full object-cover border shadow-md" />
                            @elseif (!empty($value['image']) && !is_object($value['image']))
                                <img src="{{ asset($value['image']) }}"
                                    class="h-58 w-58 rounded-full object-cover border shadow-md" />
                            @else
                                <div class="h-58 w-58 rounded-full flex items-center justify-center bg-gray-200 text-gray-600 border shadow-md">
                                    Upload Image
                                </div>
                            @endif

                            <input type="file"
                                wire:model="devProfile.{{ $key }}.image"
                                accept=".webp"
                                class="hidden" />

                            @error("devProfile.$key.image")
                                <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                            @enderror
                        </label>
                    </div>

                    <!-- Details Section -->
                    <div class="flex-1">
                        <div class="flex flex-col gap-2 mb-4">
                            <input type="text"
                                wire:model="devProfile.{{ $key }}.name"
                                class="px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Enter name" />
                            @error("devProfile.$key.name")
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex flex-col gap-2">
                            <x-simple-text-editor name="devProfile[{{ $key }}][description]"
                                                content="{!! $value['description'] ?? '' !!}" />
                            @error("devProfile.$key.description")
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            @endforeach

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
    <div class="relative flex md:flex-row flex-col items-center justify-center gap-4 md:space-y-0 space-y-48 md:py-10 px-4 py-2 sm:px-6 lg:px-8 overflow-hidden mx-auto h-full">
        <div class="lg:w-none m-4 md:w-[40%] pb-12">
            <div class="aspect-[1/1] h-full absolute">
                <img src="{{asset('assets/siliconvalley/globe-bg.webp')}}" class="z-0 animate-[spin_4s_linear_infinite] opacity-30 h-full" alt="Silicon Valley Logo"/>
            </div>
            <div class="relative rounded-full lg:w-max">
                <div class="absolute  -top-3 bottom-4 z-0 -end-3 start-4  border-2 border-white rounded-full"></div>
                <div class="absolute inset-0 top-4 -bottom-3 z-0 end-4 -start-3  border-2 border-white rounded-full"></div>
                <!-- <div class="absolute inset-0 bg-sv-secondary rounded-full"></div> -->
                <img src="{{asset('assets/siliconvalley/devprofile/devprofile.webp')}}" alt="devprofile" class="rounded-full aspect-square relative z-10"/>
            </div>
        </div>
        <div class="text-white md:w-[60%] w-full flex gap-6 flex-col space-y-4 relative">
            <span class="text-lg md:text-start text-center">Say Hello To</span>
            <div class="flex md:flex-row flex-col gap-6 items-center justify-between">
                <h2 class="2xl:text-6xl text-3xl font-bold">Isabella</h2>
                <div x-data="{ rating: 4.5 }" class="flex items-center text-md 2xl:w-none space-x-1">
                    <template x-for="star in 5" :key="star">
                        <div class="relative 2xl:w-8 2xl:h-8 md:w-4 md:h-4 w-3 h-3">
                            <!-- Empty star -->
                            <svg 
                                class="absolute inset-0 w-full h-full text-gray-300" 
                                fill="currentColor" 
                                viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.146 3.53a1 1 0 00.95.69h3.708c.969 0 1.371 1.24.588 1.81l-3 2.18a1 1 0 00-.364 1.118l1.146 3.53c.3.921-.755 1.688-1.54 1.118l-3-2.18a1 1 0 00-1.176 0l-3 2.18c-.785.57-1.84-.197-1.54-1.118l1.146-3.53a1 1 0 00-.364-1.118l-3-2.18c-.783-.57-.38-1.81.588-1.81h3.708a1 1 0 00.95-.69l1.146-3.53z" />
                            </svg>

                            <!-- Full star -->
                            <svg 
                                x-show="rating >= star" 
                                class="absolute inset-0 w-full h-full text-yellow-400" 
                                fill="currentColor" 
                                viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.146 3.53a1 1 0 00.95.69h3.708c.969 0 1.371 1.24.588 1.81l-3 2.18a1 1 0 00-.364 1.118l1.146 3.53c.3.921-.755 1.688-1.54 1.118l-3-2.18a1 1 0 00-1.176 0l-3 2.18c-.785.57-1.84-.197-1.54-1.118l1.146-3.53a1 1 0 00-.364-1.118l-3-2.18c-.783-.57-.38-1.81.588-1.81h3.708a1 1 0 00.95-.69l1.146-3.53z" />
                            </svg>

                            <!-- Half star -->
                            <svg 
                                x-show="rating > star - 1 && rating < star" 
                                class="absolute inset-0 w-full h-full text-yellow-400" 
                                fill="currentColor" 
                                viewBox="0 0 20 20">
                                <defs>
                                    <linearGradient id="half">
                                        <stop offset="50%" stop-color="currentColor" />
                                        <stop offset="50%" stop-color="transparent" stop-opacity="1" />
                                    </linearGradient>
                                </defs>
                                <path 
                                    fill="url(#half)" 
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.146 3.53a1 1 0 00.95.69h3.708c.969 0 1.371 1.24.588 1.81l-3 2.18a1 1 0 00-.364 1.118l1.146 3.53c.3.921-.755 1.688-1.54 1.118l-3-2.18a1 1 0 00-1.176 0l-3 2.18c-.785.57-1.84-.197-1.54-1.118l1.146-3.53a1 1 0 00-.364-1.118l-3-2.18c-.783-.57-.38-1.81.588-1.81h3.708a1 1 0 00.95-.69l1.146-3.53z" />
                            </svg>
                        </div>
                    </template>

                    <span class="ml-3 lg:text-sm text-xs" x-text="rating + ' / 5'"></span>
                </div>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam.</p>
            <span><code><</code>What We Did <code>/ ></code></span>
            <div class="flex gap-4 ">
                @php
                    $whatWeDid = [
                        ['image' => 'assets/siliconvalley/devprofile/whatwedid1.webp', 'title' => 'Project Management'],
                        ['image' => 'assets/siliconvalley/devprofile/whatwedid2.webp', 'title' => 'Web Development'],
                        ['image' => 'assets/siliconvalley/devprofile/whatwedid3.webp', 'title' => 'Mobile Apps'],
                        ['image' => 'assets/siliconvalley/devprofile/whatwedid4.webp', 'title' => 'AI Solutions'],
                    ];
                @endphp
                @foreach ($whatWeDid as $item)
                    <div class="flex flex-col aspect-[1.9/2] items-center">
                        <img class="w-full bg-sv-secondary h-full object-cover rounded" src="{{ asset($item['image']) }}" alt="{{ $item['title'] }}">
                        <span class="hidden text-sm mt-2">{{ $item['title'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif
</div>
