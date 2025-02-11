<div class="flex flex-col gap-4 py-4 overflow-y-auto rounded-lg bg-zinc-100/50 grow backdrop-blur-lg text-start">
    @foreach ($menuTabs as $menuTab)
        <button class="flex justify-between px-4 border-r-4 hover:text-blue-500 border-r-blue-600"
            @click="selectedMenu = '{{$menuTab['tabName']}}'"> <span
                class="text-lg font-bold">{{$menuTab['tabName']}}</span>
            <x-bladewind::icon name="{{$menuTab['tabIcon']}}" />
        </button>
    @endforeach
    <h1 x-text="selectedMenu"></h1>
</div>