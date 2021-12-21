const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            colors:{
                verdeOscuro: "#00675F",
                verdeClaro: "#DCF6EB",
                verdeMedio: "#98CEB7",
                mostaza:"#D8BF6B",
                amarillo:"#FFF2C7"
            },
            textSize:{
                '6xl':"18px",
                '7xl':"20px",
                '8xl':"22px"
            },

            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            zIndex:{
                'n1':'-1',
                'n2':'-2',
                'n3':'-3'
            },
            padding:{
                'pr-20':'20px'
            },
            spacing:{
                '78':'18rem',
                '94':'22rem'
            }

        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
