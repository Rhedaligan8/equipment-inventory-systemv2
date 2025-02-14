<div class="h-full overflow-hidden rounded-lg shadow-lg bg-zinc-100/50 backdrop-blur-lg grow">
    <div x-cloak :class="selectedMenu === 'items' ? 'block h-full overflow-hidden' : 'hidden'">
        ITEM PANEL SECTION <!-- This is will show when/once the ITEM in the sidebar is selected -->
    </div>
    <div x-cloak :class="selectedMenu === 'equipment type' ? 'block h-full overflow-hidden' : 'hidden'">
        EQUIPMENT TYPE PANEL SECTION  <!-- This is will show when/once the EQUIPMENT TYPE in the sidebar is selected -->
    </div>
    <div x-cloak :class="selectedMenu === 'person accountable' ? 'block h-full overflow-hidden' : 'hidden'">
        PERSONAL ACCOUNTABLE PANEL SECTION  <!-- This is will show when/once the PERSONAL ACCOUNTABLE in the sidebar is selected -->
    </div>
    <div x-cloak :class="selectedMenu === 'division and sections' ? 'block h-full overflow-hidden' : 'hidden'">
       DIVISION AND SECTION PANEL SECTION  <!-- This is will show when/once the item in the DIVISION AND SECTION PANEL is selected -->
    </div>
    <div x-cloak :class="selectedMenu === 'users' ? 'block h-full overflow-hidden' : 'hidden'">
        <livewire:users-panel />
    </div>
</div>