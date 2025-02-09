<div class="absolute top-0 left-0 size-full min-w-[1500px] z-0 bg-blue-500">
    <div class="relative overflow-hidden size-full">
        @php
            $iconPositions = [
                ['name' => 'tv', 'class' => 'top-[20rem] -rotate-12 left-[37rem]'],
                ['name' => 'server-stack', 'class' => 'top-[25rem] right-[40rem] rotate-45'],
                ['name' => 'folder', 'class' => 'top-[45rem] right-[25rem] rotate-12'],
                ['name' => 'document', 'class' => 'top-[40rem] left-40 rotate-2'],
                ['name' => 'computer-desktop', 'class' => 'top-14 left-14 -rotate-6'],
                ['name' => 'cpu-chip', 'class' => 'top-14 right-20 rotate-6'],
                ['name' => 'printer', 'class' => 'top-2 left-[45rem] rotate-12'],
                ['name' => 'chart-bar', 'class' => 'top-64 left-10 rotate-6'],
                ['name' => 'cloud', 'class' => 'top-[40rem] right-2 -rotate-12'],
                ['name' => 'lock-closed', 'class' => 'top-60 right-[18rem] rotate-5'],
            ];
        @endphp

        @foreach ($iconPositions as $icon)
            <x-bladewind::icon name="{{ $icon['name'] }}" class="!w-24 !h-24 text-zinc-200 absolute {{ $icon['class'] }}" />
        @endforeach
    </div>
</div>