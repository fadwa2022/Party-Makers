<button {{ $attributes->merge(['type' => 'submit', 'class' => ' px-4 py-2 rounded-3xl  text-white shadow-xl backdrop-blur-md transition-colors duration-300 hover:bg-yellow-600']) }}>
    {{ $slot }}
</button>
