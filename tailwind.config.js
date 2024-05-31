import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                inter: ["Inter"]
            },
            spacing: {
                'wvh': '100vh',
                'hwvh': '50vh'
            },
            backgroundImage: {
                'navitem-hover': 'linear-gradient(270deg, #808080 0%, rgba(10, 12, 14, 0.06) 101.31%)',
            },
        },
    },

    plugins: [
        forms,
        require('flowbite/plugin')
    ],
}
