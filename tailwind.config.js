import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
    ],
    theme: {
        extend: {
            fontFamily: {
                roboto: ['Roboto Condensed', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                background: '#FBFBFB',
                button: '#000957',
                primary: '#441752',
            },
            screens: { // Here you can adjust your breakpoints
                'sm': '480px',
                'md': '768px',
                'lg': '1024px',
                'xl': '1280px',
                '2xl': '1536px',
            },
        },
    },
    plugins: [],
};
