const colors = require('tailwindcss/colors')

module.exports = {
    content: ['./resources/**/*.blade.php', './vendor/filament/**/*.blade.php'],
    theme: {
        extend: {
            colors: {
                danger: colors.rose,
                primary: colors.blue,
                success: colors.green,
                warning: colors.yellow,
            },
        },
    },
    corePlugins: {
        aspectRatio: true,
    },
    plugins: [
        require('@tailwindcss/forms'), 
        require('@tailwindcss/typography'),
        // require('@tailwindcss/aspect-ratio')
    ],
}  