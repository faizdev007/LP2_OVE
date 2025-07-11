<div>
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
</div>