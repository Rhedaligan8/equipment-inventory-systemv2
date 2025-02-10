<Header class="flex items-center justify-between p-4 shadow-md bg-sky-900 text-zinc-50">
    <div class="flex items-center gap-4">
        <x-pnri-logo class="size-12" /> <span class="hidden font-semibold sm:block">
            Philippine Nuclear Research Institute
    </div>
    </span>
    <div class="flex gap-2">
        <div class="font-semibold">
            {{Auth::user()->name}} <span class="font-normal">({{Auth::user()->role}})</span>
        </div>
        <x-bladewind::dropmenu trigger_css="text-zinc-50" trigger="chevron-down-icon">
            <x-bladewind::dropmenu-item padded="false">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-bladewind::button color="red" size="tiny" button_text_css="font-bold"
                        can_submit="true">Logout</x-bladewind::button>
                </form>
            </x-bladewind::dropmenu-item>
        </x-bladewind::dropmenu>
    </div>
</Header>