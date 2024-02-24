/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
        fontFamily: {
            'montserrat': ["'Montserrat'", 'sans-serif'],
            'FiraSansCondensed': ["'Fira Sans Condensed'", 'sans-serif'],
        }
    },
}
