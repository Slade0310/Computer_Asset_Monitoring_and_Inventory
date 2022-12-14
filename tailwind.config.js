/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'class',
    daisyui: {
        themes: ["light", "dark", "cupcake", "bumblebee", "emerald", "corporate", "synthwave", "retro", "cyberpunk", "valentine", "halloween", "garden", "forest", "aqua", "lofi", "pastel", "fantasy", "wireframe", "black", "luxury", "dracula", "cmyk", "autumn", "business", "acid", "lemonade", "night", "coffee", "winter"],
        darkTheme: "light",
    },
    content: [
        "./resources/**/*.{blade.php, vue, js}",
    ],
    theme: {
        extend: {},
    },
    plugins: [require("daisyui")],
}
