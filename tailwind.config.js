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
        "bg-custom-light-red",
        "bg-custom-red",
        "bg-custom-dark-white",
        "bg-custom-light-grey",
        "text-custom-black",
        "text-custom-orange",
        "text-custom-grey",
        "text-custom-red",
        "ring-custom-orange",
        "border-custom-grey",
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
            'custom-light-orange-2': '#f6896c',
            "custom-grey": "#B4B4B4",
            "custom-light-red": "#FDD5D5",
            "custom-red": "#F01E1E",
            "custom-dark-white": "#F9FAFB",
            "custom-light-grey": "#f8f8f8",
        },
    },

    plugins: [require("@tailwindcss/forms"), require("flowbite/plugin")],
};
