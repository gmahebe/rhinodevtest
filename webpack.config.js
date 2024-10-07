const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');

const isWatchMode = process.env.NODE_ENV === 'development';
let entryPoints = {
	main: ['./main.js', './main.scss'],
}

if(!isWatchMode) {
	entryPoints.admin = ['./admin.js', './admin.scss'];
}

module.exports = {
    mode: isWatchMode ? 'development' : 'production',
    devtool: isWatchMode ? 'cheap-module-source-map' : false,
    context: path.resolve(__dirname, 'src'), // Set context to the src directory
    entry: entryPoints,
    output: {
        path: path.resolve(__dirname, 'dist'),
        filename: '[name].js',
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: 'babel-loader',
            },
            {
                test: /\.scss$/,
                use: [
                    MiniCssExtractPlugin.loader,
                    'css-loader',
                    {
                        loader: 'sass-loader',
                        options: {
                            // Enable source maps for development mode
                            sourceMap: isWatchMode,
                        },
                    },
                ],
            },
        ],
    },
    plugins: [
        new CleanWebpackPlugin(),
        new MiniCssExtractPlugin({
            filename: '[name].css',
        }),
    ],
    devServer: {
        host: "liftoff.local",
        static: {
            directory: path.join(__dirname, "src"),
        },
        client: {
            overlay: false,
        },
        liveReload: true,
        hot: true,
        compress: true,
        devMiddleware: {
            writeToDisk: true,
        },
    },
};
