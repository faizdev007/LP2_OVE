<div class="py-10 border-b border-white overflow-hidden bg-sv-gradient-topbottom text-white">
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    @if(Route::currentRouteName() === 'create_lp_content' || Route::currentRouteName() === 'livewire.update' && auth()->check())
            <div class="w-full max-w-2xl bg-white text-black rounded-lg shadow p-4">
                <div class="flex gap-2 mb-4">
                <button onclick="execCmd('bold')" class="px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600">Bold</button>
                <button onclick="execCmd('italic')" class="px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600">Italic</button>
                <button onclick="execCmd('underline')" class="px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600">Underline</button>
                <button onclick="clearEditor()" class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600">Clear</button>
                </div>

                <div id="editor" contenteditable="true"
                    class="min-h-[200px] p-4 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-300">
                Type something here...
                </div>
            </div>

            <script>
                function execCmd(command) {
                document.execCommand(command, false, null);
                }

                function clearEditor() {
                document.getElementById('editor').innerHTML = '';
                }
            </script>
    @else
    <div class="md:min-h-dvh">
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
