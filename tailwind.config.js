import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        screens: {
            sm: "640px",
            md: "768px",
            lg: "1024px",
            xl: "1280px",
            "2xl": "1536px",
            "3xl": "1720px",
        },
        extend: {
            fontFamily: {
                plusJakarta: ["Plus Jakarta Sans"],
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [require("daisyui")],
    daisyui: {
        themes: [
            {
                mytheme: {
                    primary: "#cd99f6",
                    secondary: "#ec8baa",
                    accent: "#e45658",
                    neutral: "#e5e7eb",
                    "base-100": "#f9f4fd",
                    info: "#e2c7f7",
                    success: "#c4b5fd",
                    warning: "#fef08a",
                    error: "#fca5a5",
                },
            },
            "light",
        ],
    },
};
