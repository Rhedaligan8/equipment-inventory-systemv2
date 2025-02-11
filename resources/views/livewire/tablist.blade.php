<div class="flex flex-col gap-4 p-4 overflow-y-auto rounded-lg bg-zinc-100/50 grow backdrop-blur-lg text-start">
    @foreach ($menuTabs as $menuTab)
        <!-- <x-bladewind::button class="w-full shadow-lg" button_text_css="font-bold">{{$menuTab}}</x-bladewind::button> -->
        <button class="bg-blue-500">{{$menuTab}}</button>
    @endforeach
</div>