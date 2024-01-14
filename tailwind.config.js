/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './public/js/*.js',
    ],

    theme: {
        extend: {
            colors : {
                primary : "#2E4190",
                secondary : "#FA9D24",
            },

            fontFamily: {
                primary: "Roboto, sans-serif",
                secondary: "Noto Sans Myanmar, sans-serif"
            },
        },
    }
};
