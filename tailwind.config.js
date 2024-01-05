/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        './public/assets/js/*.js',
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
    },
    plugins: [],
};
