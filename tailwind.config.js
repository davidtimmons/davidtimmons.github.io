module.exports = {
    theme: {
        extend: {
            colors: {
                aqua: '#6dc9c7',
                purple: {
                    default: '#782f92',
                    lilac: '#d3beda',
                },
                dark: {
                    tar: '#080808',
                    street: '#212121',
                    coal: '#383838',
                    silver: '#c7c7c7',
                    concrete: '#f2f2f2',
                    white: '#ffffff',
                },
            },

            fontSize: {
                0: '0px',
                r5xl: '3em',
                '2/3': '66%',
                full: '100%',
                '3/2': '150%',
                '4/2': '200%',
            },

            height: {
                'r4': '1em',
            },

            minWidth: {
                'page': '600px',
            },

            screens: {
                'xs': '500px',
            },

            width: {
                '28': '7rem',
            },
        },
    },
    variants: {
        width: ['responsive', 'hover', 'focus'],
    },
    plugins: [
        // Some useful comment
    ]
};
