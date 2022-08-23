/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: "class",
    content: [
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                "login-primary": "rgb(var(--primary) / <alpha-value>)",
                "dash-primary": "rgb(var(--dash) / <alpha-value>)",
                "dash-secondary": "rgb(var(--dash-secondary) / <alpha-value>)",
            },
        },
    },
    plugins: [require("./plugin")],
};
