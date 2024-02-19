<div>
        <h1 class="text-3xl font-bold underline">
        The current time is {{date('H:i:s')}}
    </h1>
    <input wire:model="title" type="text">
    <hr>
    Hello from {{$title}}.
</div>
