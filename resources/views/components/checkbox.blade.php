<label {{ $attributes->merge(['class' => 'inline-flex items-center']) }}>
    <input
        type="{{ $type }}"
        name="{{ $name }}"
        class="form-{{ $type }} shadow dark:bg-gray-900 dark:border-gray-700 h-4 w-4 transition duration-150 ease-in-out 
            @error($name) 
                text-red-500 
            @else 
                text-blue-500 
            @enderror
        "
        @if ($value)
            value="{{ $value }}"
        @endif
        @if ($model)
            wire:model.lazy="{{ $model }}"
        @endif
        @if ($disabled) 
            disabled
        @endif
    >
    <span 
        class="
            label
            label-inline
            @if ($disabled) 
                label-disabled
            @endif
            ml-2
        "
    >{{ __($label) }}</span>
</label>
