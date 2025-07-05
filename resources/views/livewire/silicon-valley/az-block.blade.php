<div class="border-b border-white bg-sv-gradient-topbottom">
    {{-- Success is as dangerous as failure. --}}
    <div class="azblockbg py-10">
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
            <div class="bg-sv-gradient-topbottom inset-shadow-sm inset-shadow-white/50 text-white p-1 rounded-xl md:aspect-[3/1] text-center text-gray-700">
                <template x-cloak x-for="letter in letters" :key="letter" class="">
                    <div class="md:grid h-full grid-cols-3" x-show="activeTab === letter" x-transition>
                        <h2 class="h-full md:text-[13rem] !h-[fit-content] text-[10rem] flex justify-center items-center font-bold" x-text="`${letter}`"></h2>
                        <div class="col-span-2 gap-2 custom-scroll items-center justify-center flex flex-wrap text-black overflow-y-auto h-full">
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
