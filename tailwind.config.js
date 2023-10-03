/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        extend: {
            fontFamily: {
                poppins: ["Poppins", "sans-serif"],
            },
            screens: {
                sm: "576px",
                "sm-max": { max: "576px" },
                md: "768px",
                "md-max": { max: "768px" },
                lg: "992px",
                "lg-max": { max: "992px" },
                xl: "1200px",
                "xl-max": { max: "1200px" },
                "2xl": "1400px",
                "2xl-max": { max: "1320px" },
            },
            boxShadow: {
                "soft-xxs": "0 1px 5px 1px #ddd",
                "soft-xs":
                    "0 3px 5px -1px rgba(0,0,0,.09),0 2px 3px -1px rgba(0,0,0,.07)",
                "soft-sm":
                    "0 .25rem .375rem -.0625rem hsla(0,0%,8%,.12),0 .125rem .25rem -.0625rem hsla(0,0%,8%,.07)",
                "soft-md":
                    "0 4px 7px -1px rgba(0,0,0,.11),0 2px 4px -1px rgba(0,0,0,.07)",
                "soft-lg": "0 2px 12px 0 rgba(0,0,0,.16)",
                "soft-xl": "0 20px 27px 0 rgba(0,0,0,.05)",
                "soft-2xl": "0 .3125rem .625rem 0 rgba(0,0,0,.12)",
                "soft-3xl":
                    "0 8px 26px -4px hsla(0,0%,8%,.15),0 8px 9px -5px hsla(0,0%,8%,.06)",
            },
        },
    },
    plugins: [],
};
