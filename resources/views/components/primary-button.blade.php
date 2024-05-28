<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center  justify-center px-4 py-2 w-full bg-yellow-400 dark:bg-gray-200 border border-transparent rounded-sm font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900  focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2  transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
