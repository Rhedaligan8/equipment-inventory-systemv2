<div class="flex flex-col h-full gap-4 shadow-lg w-72"
    x-data="{selectedMenu: @entangle('defaultSelectedMenu').defer, changeSelectedMenu(menu) {selectedMenu = menu}}">
    <livewire:tablist />
</div>