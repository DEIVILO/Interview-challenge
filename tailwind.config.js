/** @type {import('tailwindcss').Config} */

const {
    spacing
} = require('tailwindcss/defaultTheme');

const colors = require('tailwindcss/colors');

module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            screens: {
                'sm': '640px',
                // => @media (min-width: 640px) { ... }
                'md': '768px',
                // => @media (min-width: 768px) { ... }
                'lg': '1024px',
                // => @media (min-width: 1024px) { ... }
                'xl': '1280px',
                // => @media (min-width: 1280px) { ... }
                '2xl': '1536px' // => @media (min-width: 1536px) { ... }

            },
            fontFamily: {
                sans: ['Montserrat', "sans-serif"]
            },
            fontSize: {
                base: '16px',
            },
              fontWeight: {
                normal: 400,
                medium: 500,
            },
              lineHeight: {
                base: '24px',
            },
            colors: {
                account: {
                    account: "#02170E",
                },
                navi: {
                    main: "#02170E",
                    hover: "#0F8352",
                    pressed: "#0A5737",
                },
                primary: {
                    lighter: "#14AE6D",
                    "DEFAULT": "#0F8352",
                    darker: "#0A5737"
                },
                secondary: {
                    lighter: colors.blue['100'],
                    "DEFAULT": colors.blue['200'],
                    darker: colors.blue['300']
                },
                background: {
                    lighter: colors.blue['100'],
                    "DEFAULT": colors.blue['200'],
                    darker: colors.blue['300']
                },
                green: colors.emerald,
                yellow: colors.amber,
                purple: colors.violet
            },
            textColor: {
                orange: colors.orange,
                red: {
                    ...colors.red,
                    "DEFAULT": colors.red['500']
                },
                primary: {
                    lighter: "#6D6D6D",
                    "DEFAULT": "#02170E",
                    darker: colors.gray['900'],
                    "navi": "#02170E"
                },
                secondary: {
                    lighter: colors.gray['400'],
                    "DEFAULT": colors.gray['600'],
                    darker: colors.gray['800']
                }
            },
            backgroundColor: {
                primary: {
                    lighter: "#14AE6D",
                    "DEFAULT": "#0F8352",
                    darker: "#0A5737"
                },
                secondary: {
                    lighter: colors.blue['100'],
                    "DEFAULT": colors.blue['200'],
                    darker: colors.blue['300']
                },
                container: {
                    lighter: '#ffffff',
                    "DEFAULT": '#fafafa',
                    darker: '#f5f5f5'
                }
            },
            borderColor: {
                primary: {
                    lighter: "#14AE6D",
                    "DEFAULT": "#0F8352",
                    darker: "#0A5737"
                },
                secondary: {
                    lighter: colors.blue['100'],
                    "DEFAULT": colors.blue['200'],
                    darker: colors.blue['300']
                },
                container: {
                    lighter: '#f5f5f5',
                    "DEFAULT": '#e7e7e7',
                    darker: '#b6b6b6'
                }
            },
            minWidth: {
                8: spacing["8"],
                20: spacing["20"],
                40: spacing["40"],
                48: spacing["48"]
            },
            minHeight: {
                14: spacing["14"],
                'screen-25': '25vh',
                'screen-50': '50vh',
                'screen-75': '75vh'
            },
            maxHeight: {
                '0': '0',
                'screen-25': '25vh',
                'screen-50': '50vh',
                'screen-75': '75vh'
            },
            container: {
                center: true,
                padding: '1.5rem'
            }
        }
    },
    variants: {
        extend: {},
    },
    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};