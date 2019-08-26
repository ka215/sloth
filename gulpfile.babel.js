import {src, dest, parallel, series, watch} from 'gulp'

import sass from 'gulp-sass'
import size from 'gulp-size'
import gzip from 'gulp-gzip'
import postcss from 'gulp-postcss'
import autoprefixer from 'autoprefixer'
import cssDeclarationSorter from 'css-declaration-sorter'
import mqpacker from 'css-mqpacker'
import cssnano from 'cssnano'
import stylelint from 'stylelint'
import reporter from 'postcss-reporter'
import eslint from 'gulp-eslint'
import rename from 'gulp-rename'
import sourcemaps from 'gulp-sourcemaps'
import webpackStream from 'webpack-stream'
import webpack from 'webpack'

const webpackConfig = require('./webpack.config')

// Styles Section
export const build = callback => src('src/**/*.scss')
    .pipe(postcss([
        stylelint(),
        reporter()
    ]))
    .pipe(sass({
        outputStyle: 'expanded'
    }))
    .pipe(postcss([
        autoprefixer(),
        cssDeclarationSorter({
            order: 'smacss'
        }),
        mqpacker(),
    ]))
    .pipe(rename('sloth.css'))
    .pipe(dest('src/'))
    .on('end', () => {
        callback()
    })

export const minify_dev = () => src('src/*.css')
    .pipe(sourcemaps.init())
    .pipe(postcss([
        cssnano({ preset: 'default' })
    ]))
    .pipe(rename({ suffix: '.min' }))
    .pipe(sourcemaps.write('.'))
    .pipe(dest('dist/'))

export const minify_prod = () => src('src/*.css')
    .pipe(postcss([
        cssnano({ preset: 'default' })
    ]))
    .pipe(rename({ suffix: '.min' }))
    .pipe(dest('dist/'))
    .pipe(dest('docs/assets/'))
    .pipe(size({ gzip: true, showFiles: true }))
    .pipe(rename({ suffix: '.compress' }))
    .pipe(gzip())
    .pipe(dest('dist/'))
    .pipe(dest('docs/assets/'))

export const styles = series( build, minify_dev )

// Scripts Section
export const check = () => src('src/sloth-extension.js')
    .pipe(eslint({useEslintrc: true}))
    .pipe(eslint.format())
    .pipe(eslint.failAfterError())

export const deploy_dev = () => src('src/sloth-extension.js')
    .pipe(webpackStream(Object.assign(webpackConfig, {
            mode: 'development',
            devtool: 'source-map',
            output: { filename: 'sloth.extension.js' }
        }), webpack, (err, stats) => {
            if ( err ) {
                console.error( err )
            }
    }))
    .pipe(dest('dist'))
    .pipe(dest('docs/assets/'))

export const deploy_prod = () => src('src/sloth-extension.js')
    .pipe(webpackStream(Object.assign(webpackConfig, {
            mode: 'production'
        }), webpack, (err, stats) => {
            if ( err ) {
                console.error( err )
            }
    }))
    .pipe(dest('dist'))
    .pipe(dest('docs/assets/'))
    .pipe(size({ gzip: true, showFiles: true }))
    .pipe(rename({ suffix: '.compress' }))
    .pipe(gzip())
    .pipe(dest('dist/'))
    .pipe(dest('docs/assets/'))

export const scripts = series( check, deploy_dev ) 

// 
export const dev = () => {
    watch('src/**/*.scss', styles)
    watch('src/**/*.js', scripts)
}

export const prod = parallel( series( build, minify_prod ), series( check, deploy_prod ) )
