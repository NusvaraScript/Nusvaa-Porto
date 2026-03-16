<div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-stretch border-t border-white/10">
    <x-section section="contact" title="Wanna know more? Contact me!"
        description="I'm open to freelance projects, collaborations, or just chatting about anything I know of."
        :border="false">
    </x-section>
    <div class="border-l border-white/10">
        <p></p>
        <div class="p-8 flex flex-col gap-4">
            <x-button route="https://github.com/NusvaraScript" variant="outline" target="_blank"
                class="w-full flex justify-between">
                <span class="text-blue-500">[Github]</span>
                <span class="text-gray-500">NusvaraScript</span>
            </x-button>
            <x-button route="#" variant="outline" target="_blank" class="w-full flex justify-between">
                <span class="text-blue-500">[Discord]</span>
                <span class="text-gray-500">@nvra_</span>
            </x-button>
            <x-button route="#" variant="outline" target="_blank" class="w-full flex justify-between">
                <span class="text-blue-500">[Email]</span>
                <span class="text-gray-500">nusvara.script@gmail.com</span>
            </x-button>
        </div>
    </div>
</div>
