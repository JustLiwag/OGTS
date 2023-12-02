<div>
    <input type="text" name="" id="" wire:model="todo">

    <button wire:click="add" type="button">Add</button>

    <ul>
        @foreach ($todos as $todo)
            <li>
                {{ $todo }}
            </li>
        @endforeach
    </ul>
</div>
