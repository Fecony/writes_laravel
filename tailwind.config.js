const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
    darkMode: 'class',
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
            },
            spacing: {
                '0.25': '0.063rem',
                '14.5': '3.625rem',
                '19': '4.75rem',
                '90': '22.5rem',
            },
            colors: {
                'twitter': '#1DA1F2',
                'twitter-light': '#1A91DA',
            }
        },
        colors: {
            transparent: "transparent",
            current: "currentColor",
            ...colors
        }
    },
    variants: {},
    purge: {
        content: [
            './resources/**/*.php',
        ],
        options: {
            defaultExtractor: (content) => content.match(/[\w-/.:]+(?<!:)/g) || [],
            whitelistPatterns: [/-active$/, /-enter$/, /-leave-to$/, /show$/],
        },
    },
    plugins: [
        require('@tailwindcss/typography'),
        require('@tailwindcss/forms'),
        require('@tailwindcss/aspect-ratio'),
        require('tailwindcss-debug-screens'),
    ],
};
