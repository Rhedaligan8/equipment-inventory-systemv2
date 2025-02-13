<div class="flex flex-col h-full gap-4 p-8">
    <div wire:loading class="absolute top-0 left-0 z-50 bg-zinc-900/30 size-full">
        <div class="flex items-center justify-center h-full">
            <x-bladewind::spinner size="omg" color="blue" />
        </div>
    </div>
    <form wire:submit.prevent="searchFilter" class="flex gap-4">
        <x-bladewind::input focused placeholder="Search..." wire:model.defer="searchString" add_clearing="false"
            size="regular" />
        <x-bladewind::button wire:click="clearSearchString()">Clear</x-bladewind::button>

    </form>
    <div class="overflow-y-auto grow">
        <x-bladewind::table has_border="true" divider="thin">
            <x-slot name="header">
                <th> <button @class([
                    'text-blue-500 font-bold' => $orderByString == 'id'
                ])
                        wire:click="setOrderBy('id')">#</button>
                </th>
                <th><button @class([
                    'text-blue-500 font-bold' => $orderByString == 'name'
                ])
                        wire:click="setOrderBy('name')">NAME</button></th>
                <th><button @class([
                    'text-blue-500 font-bold' => $orderByString == 'username'
                ])
                        wire:click="setOrderBy('username')">USERNAME</button></th>
                <th><button @class([
                    'text-blue-500 font-bold' => $orderByString == 'role'
                ])
                        wire:click="setOrderBy('role')">ROLE</button></th>
                <th><button @class([
                    'text-blue-500 font-bold' => $orderByString == 'status'
                ])
                        wire:click="setOrderBy('status')">STATUS</button></th>
                <th><button @class([
                    'text-blue-500 font-bold' => $orderByString == 'created_at'
                ])
                        wire:click="setOrderBy('created_at')">CREATED AT</button></th>
                <th><button @class([
                    'text-blue-500 font-bold' => $orderByString == 'updated_at'
                ])
                        wire:click="setOrderBy('updated_at')">UPDATED AT</button></th>
                <th><button wire:click="setOrderBySort()" class="flex items-center gap-4 font-bold">
                        SORT
                        @if ($orderBySort == 'asc')
                            <x-bladewind::icon class="!h-5 !w-5" name="arrow-up" />
                        @elseif($orderBySort == 'desc')
                            <x-bladewind::icon class="!h-5 !w-5" name="arrow-down" />
                        @endif

                    </button></th>
            </x-slot>
            @foreach ($users as $user)
                        <tr>
                            <td>{{$loop->index + 1}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->username}}</td>
                            <td><span @class(['font-bold' => $user->role == 'admin'])>{{$user->role}}</span></td>
                            <td><span @class([
                                'text-green-500' => $user->status == 'active',
                                'text-yellow-500' => $user->status == 'inactive'
                            ])>{{$user->status}}</span></td>
                            <td>{{$user->created_at}}</td>
                            <td>{{$user->updated_at}}</td>
                            <td>
                                <div class="flex gap-2 ">
                                    <x-bladewind::button size="tiny">
                                        <x-bladewind::icon class="!h-4 !w-4" name="pencil" />
                                    </x-bladewind::button>
                                    <x-bladewind::button size="tiny" color="red" onclick="showModal('delete-user-{{$user->id }}')">
                                        <x-bladewind::icon class="!h-4 !w-4" name="trash" />
                                    </x-bladewind::button>
                                </div>
                            </td>
                        </tr>
                        <x-bladewind::modal show_action_buttons="false" type="warning" title="Confirm delete user."
                            name="delete-user-{{$user->id}}" blur_size="none">
                            <p>{{ $user->name }} will be permanently deleted in the database.</p>
                            <div class="flex justify-end gap-2 mt-4">
                                <x-bladewind::button size="tiny"
                                    onclick="hideModal('delete-user-{{$user->id }}')">Cancel</x-bladewind::button>
                                <x-bladewind::button wire:loading.attr="disabled" color="red" size="tiny"
                                    wire:click="deleteUser({{$user->id}})">Delete</x-bladewind::button>
                            </div>
                        </x-bladewind::modal>
            @endforeach
        </x-bladewind::table>
        @if (!count($users))
            <div class="mt-4">
                <x-bladewind::empty-state image="/images/no-data.svg" message="No data found."></x-bladewind::empty-state>
            </div>
        @endif
    </div>

    <div>
        {{ $users->onEachSide(1)->links() }}
        <div class="flex items-center gap-2 text-sm">
            <p class="">Page: <span class="font-bold">{{ $users->currentPage() }}</span></p>
            <p>Total users: <span class="font-bold">{{ $totalUsers }}</span></p>
            <div>
                Items per page:
                <select class="w-16 px-2" wire:model="itemPerPage">
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                    <option value="40">40</option>
                    <option value="50">50</option>
                    <option value="60">60</option>
                    <option value="70">70</option>
                    <option value="80">80</option>
                    <option value="90">90</option>
                    <option value="100">100</option>
                </select>
            </div>
        </div>
    </div>
</div>