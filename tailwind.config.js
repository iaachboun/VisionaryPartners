module.exports = {
    content: [
        "./node_modules/flowbite/**/*.js"
    ],
    plugins: [
        require('flowbite/plugin')
    ],

    theme: {
        extend: {
            scrollBehavior: ['smooth'],
            maxWidth: {
                'pakket-w': '265px',
            },
            backgroundImage: {
                'circle2': "url('/src/assets/img/circle2.svg')",
            }
        }
    }

}