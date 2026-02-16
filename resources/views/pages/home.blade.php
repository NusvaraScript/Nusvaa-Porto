<x-layout.user>
    <x-slot:title>Home@Portofolio:~</x-slot>

        <section class="space-y-6">
            <div class="text-xl">
                <span class="text-blue-400">guest@portfolio:~$</span>
                <span class="typewriter">whoami</span>
            </div>

            <p class="leading-relaxed text-gray-300">
                Halo! Saya seorang Fullstack Developer yang senang membangun sistem
                yang efisien dan antarmuka yang bersih. Selamat datang di terminal saya.
            </p>

            <div class="grid md:grid-cols-2 gap-4">
                <x-ui-comps.card title="latest_project.sh">
                    <p class="text-sm mb-4 text-gray-400">Membangun sistem e-commerce dengan Laravel & Alpine.js</p>
                    <x-ui-comps.button>view_details</x-ui-comps.button>
                </x-ui-comps.card>

                <x-ui-comps.card title="skills.json">
                    <ul class="text-sm text-yellow-500">
                        <li>- PHP / Laravel</li>
                        <li>- JavaScript / Vue.js</li>
                        <li>- Tailwind CSS</li>
                    </ul>
                </x-ui-comps.card>
            </div>
        </section>
</x-layout.user>
