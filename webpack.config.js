module.exports = {
    entry: {
        'sloth.extension.min.js': './src/sloth-extension.js'
    },
    output: {
        filename: '[name]',
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: [
                    {
                        loader: 'babel-loader'
                    }
                ]
            }
        ]
    }
};