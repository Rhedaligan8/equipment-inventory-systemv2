<div class="flex flex-col gap-4 py-4 overflow-y-auto rounded-lg bg-zinc-100/50 grow backdrop-blur-lg text-start">
    <button @click="selectedMenu = 'items'"
            class="flex justify-between px-4 border-r-4 border-transparent hover:text-blue-500" 
            :class="{'text-blue-500 border-r-blue-600' : 'items' === selectedMenu}"
            >
            <span class="text-lg font-bold">Items</span>
            <x-bladewind::icon name="clipboard-document-list" />
        </button> 
        
            <button @click="selectedMenu = 'equipment type'"
            class="flex justify-between px-4 border-r-4 border-transparent hover:text-blue-500" 
            :class="{'text-blue-500 border-r-blue-600' : 'equipment type' === selectedMenu}"
            >
            <span class="text-lg font-bold">Equipment Type</span>
            <x-bladewind::icon name="computer-desktop" />
        </button> 

            <button @click="selectedMenu = 'person accountable'"
            class="flex justify-between px-4 border-r-4 border-transparent hover:text-blue-500" 
            :class="{'text-blue-500 border-r-blue-600' : 'person accountable' === selectedMenu}"
            >
            <span class="text-lg font-bold">Person Accountable</span>
            <x-bladewind::icon name="user" />
        </button> 

             <button @click="selectedMenu = 'division and sections'"
            class="flex justify-between px-4 border-r-4 border-transparent hover:text-blue-500" 
            :class="{'text-blue-500 border-r-blue-600' : 'division and sections' === selectedMenu}"
            >
            <span class="text-lg font-bold">Division and Sections</span>
            <x-bladewind::icon name="building-office-2" />
        </button> 

             <button @click="selectedMenu = 'users'"
            class="flex justify-between px-4 border-r-4 border-transparent hover:text-blue-500" 
            :class="{'text-blue-500 border-r-blue-600' : 'users' === selectedMenu}"
            >
            <span class="text-lg font-bold">Users</span>
            <x-bladewind::icon name="user-group" />
        </button> 
    </h1>
</div>