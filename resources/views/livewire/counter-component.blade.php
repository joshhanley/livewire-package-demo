<div class="h-screen flex justify-center items-center">
    <button wire:click='decrease' class='px-4 py-2 border' dusk='decrease'>-</button>
    <span class="p-2 text-xl font-bold" dusk='count'>{{ $count }}</span>
    <button wire:click='increase' class='px-4 py-2 border' dusk='increase'>+</button>
</div>
