module.exports = () => ({
    plugins: {
        "precss": {},
        "autoprefixer": {},
        "cssnano": {
            "autoprefixer": false
        }
    }
})