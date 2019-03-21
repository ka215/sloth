module.exports = () => ({
    plugins: {
        "precss": {},
        "autoprefixer": {
            "browsers": "last 2 versions"
        },
        "cssnano": {
            "autoprefixer": false
        }
    }
})