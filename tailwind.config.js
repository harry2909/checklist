const defaultTheme = require('tailwindcss/defaultTheme')

const themeColors = {
    inherit: 'inherit',
    app: {
      blue: {
        DEFAULT: '#012456'
      }
    }
  };

module.exports = {
    theme: {
        extend: {
            fontFamily: {
                source: ['Source Code Pro', ...defaultTheme.fontFamily.mono],
            },
            colors: themeColors,
        },
    },
    variants: {
        extend: {
            backgroundColor: ['active'],
        }
    },
    content: [
        './app/**/*.php',
        './resources/**/*.html',
        './resources/**/*.js',
        './resources/**/*.jsx',
        './resources/**/*.ts',
        './resources/**/*.tsx',
        './resources/**/*.php',
        './resources/**/*.vue',
        './resources/**/*.twig',
    ],
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
}
