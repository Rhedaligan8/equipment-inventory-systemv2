<div class="h-full overflow-y-auto rounded-lg shadow-lg bg-zinc-100/50 backdrop-blur-lg grow">
    <div x-cloak :class="selectedMenu === 'items' ? 'block' : 'hidden'">
        item panel
    </div>
    <div x-cloak :class="selectedMenu === 'equipment type' ? 'block' : 'hidden'">
        equipment type
    </div>
    <div x-cloak :class="selectedMenu === 'person accountable' ? 'block' : 'hidden'">
        person accountable panel
    </div>
    <div x-cloak :class="selectedMenu === 'division and sections' ? 'block' : 'hidden'">
        division and section panel
    </div>
    <div x-cloak :class="selectedMenu === 'users' ? 'block' : 'hidden'">
        <livewire:users-panel />
    </div>
</div>