<div {{ $attributes->whereDoesntStartWith('wire:model') }} dusk='custom-input'>
    <input type="text" {{ $attributes->wire('model') }} dusk='model-input' class="border rounded shadow" />

    <span dusk='model-output'>{{ $this->getPropertyValue($attributes->wire('model')) }}</span>
</div>
