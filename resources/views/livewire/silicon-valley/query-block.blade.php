<div class="border-b border-white text-white bg-sv-secondary pt-10">
    <div class="p-6 pb-0 max-w-5xl mx-auto text-center">
        <h2 class="text-center text-white md:text-3xl text-2xl font-bold mb-10">
            <code><</code>Heading Goes Here <code>/ ></code>
        </h2>
        <p class="mb-6">Lorem ipsum dolor amet consectetur adipiscing elitsed eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

        <div class="w-full max-w-3xl mx-auto space-y-8">
            <form wire:submit.prevent="submitForm" class="relative overflow-hidden">
                
                <!-- Step 1 -->
                <div
                    id="step1"
                    class="relative z-10 w-full top-0 left-0 bg-sv-primary text-white md:px-20 px-10 py-8"
                    style="clip-path: polygon(95% 100%, 5% 100%, 0% 0%, 100% 0%)"
                >
                    <p class="font-mono text-base sm:text-lg md:text-xl font-bold mb-4">
                        &lt;How many developers do you need? / &gt;
                    </p>
                    <div class="space-y-3 text-start sm:space-y-4 pl-1 sm:pl-3">
                        <template x-for="(label, value) in {
                            one: 'One',
                            moreThenOne: 'More Than One',
                            crossFunctionalTeam: 'I am looking for a cross-functional team',
                            notSureYet: `I'm not sure yet`
                        }" :key="value">
                            <label class="flex items-center space-x-3">
                                <input type="radio" :value="value" wire:model="devs" class="accent-white w-5 h-5" />
                                <span class="font-mono text-sm sm:text-base flex-1 text-gray-300" x-text="label"></span>
                            </label>
                        </template>
                    </div>
                    <x-silicon-valley.action-button onclick="next('step2')" :title="'Next'" />
                </div>

                <!-- Step 2 -->
                <div
                    id="step2"
                    x-transition:enter="transition translate-y-full ease-out duration-300"
                    x-transition:enter-start="transform translate-y-full"
                    x-transition:enter-end="transform translate-y-0"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="transform translate-y-0"
                    x-transition:leave-end="transform translate-y-full"
                    class="absolute transition translate-y-full z-20 w-full top-0 left-0 bg-sv-primary text-white md:px-20 px-10 py-8"
                    style="clip-path: polygon(95% 100%, 5% 100%, 0% 0%, 100% 0%)"
                >
                    <p class="font-mono text-base sm:text-lg md:text-xl font-bold text-center">
                        &lt;Which technologies do you require? / &gt;
                    </p>
                    <div class="space-y-3 text-start sm:space-y-4 pl-1 sm:pl-3">
                        <!-- Repeat same labels -->
                        <template x-for="(label, value) in {
                            one: 'One',
                            moreThenOne: 'More Than One',
                            crossFunctionalTeam: 'I am looking for a cross-functional team',
                            notSureYet: `I'm not sure yet`
                        }" :key="value">
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" :value="value" wire:model="technologies" class="accent-white w-5 h-5" />
                                <span class="font-mono text-sm sm:text-base flex-1 text-gray-300" x-text="label"></span>
                            </label>
                        </template>
                    </div>
                    <div class="flex gap-4 justify-center">
                        <x-silicon-valley.action-button onclick="previouse('step2')" :title="'Previous'" />
                        <x-silicon-valley.action-button onclick="next('step3')" :title="'Next'" />
                    </div>
                </div>

                <!-- Step 3 -->
                <div
                    id="step3"
                    x-transition:enter="transition translate-y-full ease-out duration-300"
                    x-transition:enter-start="transform translate-y-full"
                    x-transition:enter-end="transform translate-y-0"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="transform translate-y-0"
                    x-transition:leave-end="transform translate-y-full"
                    class="absolute transition translate-y-full z-20 w-full top-0 left-0 bg-sv-primary text-white md:px-20 px-10 py-8"
                    style="clip-path: polygon(95% 100%, 5% 100%, 0% 0%, 100% 0%)"
                >
                    <p class="font-mono text-base sm:text-lg md:text-xl font-bold text-center">
                        &lt;When do you wish to hire? / &gt;
                    </p>
                    <div class="space-y-3 text-start sm:space-y-4 pl-1 sm:pl-3">
                        <!-- Repeat same labels -->
                        <template x-for="(label, value) in {
                            one: 'One',
                            moreThenOne: 'More Than One',
                            crossFunctionalTeam: 'I am looking for a cross-functional team',
                            notSureYet: `I'm not sure yet`
                        }" :key="value">
                            <label class="flex items-center space-x-3">
                                <input type="radio" :value="value" wire:model="devs" class="accent-white w-5 h-5" />
                                <span class="font-mono text-sm sm:text-base flex-1 text-gray-300" x-text="label"></span>
                            </label>
                        </template>
                    </div>
                    <div class="flex gap-4 justify-center">
                        <x-silicon-valley.action-button onclick="previouse('step3')" :title="'Previous'" />
                        <x-silicon-valley.action-button type="submit" :title="'Submit'" />
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- ✅ Alpine Script -->
    <script>
        function next(blockId) {
            const currentStep = document.getElementById(blockId);
            currentStep.classList.remove('transform');
            currentStep.classList.remove('translate-y-full');
        }
        function previouse(blockId) {
            const prevStep = document.getElementById(blockId);
            prevStep.classList.add('transform');
            prevStep.classList.add('translate-y-full');
        }
    </script>
</div>
