<button {{ $attributes->merge(['type' => 'submit', 'class' => 'tracking-[0.2em] font-medium text-lg w-fit text-background3 bg-border py-4 px-20 hover:bg-buttonHover']) }}>
    {{ $slot }}
</button>
