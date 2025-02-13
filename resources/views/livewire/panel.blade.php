<div class="h-full overflow-hidden rounded-lg shadow-lg bg-zinc-100/50 backdrop-blur-lg grow">
    <div x-cloak :class="selectedMenu === 'items' ? 'block h-full overflow-hidden' : 'hidden'">
        item panel
    </div>
    <div x-cloak :class="selectedMenu === 'equipment type' ? 'block h-full overflow-hidden' : 'hidden'">
        equipment type
    </div>
    <div x-cloak :class="selectedMenu === 'person accountable' ? 'block h-full overflow-hidden' : 'hidden'">
        person accountable panel
    </div>
    <div x-cloak :class="selectedMenu === 'division and sections' ? 'block h-full overflow-hidden' : 'hidden'">
        division and section panel
    </div>
    <div x-cloak :class="selectedMenu === 'users' ? 'block h-full overflow-hidden' : 'hidden'">
        <livewire:users-panel />
    </div>
</div>