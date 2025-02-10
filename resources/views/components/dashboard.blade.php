<x-layouts.app>
    <x-slot name="header">
        <livewire:header />
    </x-slot>
    <div class="p-4 size-full bg-gradient-to-b from-blue-500/30 to-blue-500/50">
        <div class="flex h-full gap-4">
            <livewire:sidebar />
            <livewire:panel />
        </div>
    </div>
</x-layouts.app>