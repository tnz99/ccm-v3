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
            },
            spacing: {
                'wvh': '100vh',
                'hwvh': '50vh'
            },
            backgroundImage: {
                'navitem-hover': 'linear-gradient(270deg, #947f7f 0%, rgba(255, 255, 255, 0) 74.59%)',
            },
        },
    },

    plugins: [
        forms,
        require('flowbite/plugin')
    ],
};
