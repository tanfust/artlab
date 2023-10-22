@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'w-full py-3 placeholder:text-textPlaceholder px-6 text-lg border-2 border-border bg-backgroundInput hover:bg-backgroundHover']) !!}>

