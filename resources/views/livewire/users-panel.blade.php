<div class="p-8 ">
    <form wire:submit.prevent="searchFilter" class="flex gap-4">
        <x-bladewind::input focused placeholder="Search..." wire:model.defer="searchString" add_clearing="false"
            size="regular" />
        <x-bladewind::button wire:click="clearSearchString()">Clear</x-bladewind::button>
    </form>
    <x-bladewind::table has_border="true" divider="thin">
        <x-slot name="header">
            <th>Name</th>
            <th>Username</th>
            <th>Role</th>
            <th>Status</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Actions</th>
        </x-slot>
        @foreach ($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->username}}</td>
                <td><span class="text-red-500">{{$user->role}}</span></td>
                <td><span class="text-green-500">{{$user->status}}</span></td>
                <td>{{$user->created_at}}</td>
                <td>{{$user->updated_at}}</td>
                <td>Edit / Delete</td>
            </tr>
        @endforeach
    </x-bladewind::table>
</div>