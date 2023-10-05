/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                background: "#f8da3d",
                background2: "#C7BBCA",
                background3: "#E5DCC9",
                background4: "#5FAE67",
                backgroundInput: "#EAE3D4",
                backgroundHover: "rgba(255, 255, 255, 0.4)",
                accent: "#BB60FF",
                border: "#000000",
                text1: "#000000",
                text2: "#50901D",
                text3: "#5B314B",
                textPlaceholder: "#C9A150",
                buttonHover: "rgb(161, 134, 80)",
            },
        },
    },
    plugins: [],
};
