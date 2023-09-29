const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],

    safelist: [
        "bg-custom-black",
        "bg-custom-orange",
        "bg-custom-white",
        "bg-custom-light-orange",
        "text-custom-black",
        "text-custom-orange",
        'text-custom-grey',
        'ring-custom-orange'
    ],

    theme: {
        extend: {
            fontFamily: {
                manrope: ["Manrope"],
            },
            backgroundImage: {
                "landing-1": "url('/images/page-1-bg.png')",
            },
        },
        colors: {
            transparent: "transparent",
            current: "currentColor",
            "custom-black": "#1E1E1E",
            "custom-orange": "#ED6C4B",
            "custom-white": "#FAFAFA",
            "custom-light-orange": "#FEF1ED",
            'custom-grey': '#B4B4B4',
        },
    },

    plugins: [require("@tailwindcss/forms"), require("flowbite/plugin")],
};
