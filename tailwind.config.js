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
            }
        }
    }

}