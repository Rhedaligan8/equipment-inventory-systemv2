<div class="p-4 rounded-lg shadow-xl bg-zinc-100/50 backdrop-blur-lg">
    <select name="selected-menu"
        class="w-full py-1 font-bold text-center border-2 rounded-md shadow-md cursor-pointer text-sky-900 border-sky-900 ring-0 focus:outline-none focus:ring-0 focus:border-2 focus:border-sky-900 bg-zinc-50">
        @foreach ($menuItems as $item)
            <option class="font-semibold cursor-pointer bg-zinc-50" value="{{$item}}" {{ $defaultSelected == $item ? 'selected' : '' }}>
                {{strtoupper($item)}}
            </option>
        @endforeach
    </select>
</div>