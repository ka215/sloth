const gulp = require('gulp')
const sass = require('gulp-sass')
const size = require('gulp-size')
const postcss = require('gulp-postcss')
const sourcemaps = require('gulp-sourcemaps')
const autoprefixer = require('autoprefixer')
const cssDeclarationSorter = require('css-declaration-sorter')
const mqpacker = require("css-mqpacker")
const cssnano = require("cssnano")
const stylelint = require('stylelint')
const reporter = require('postcss-reporter')
const rename = require('gulp-rename')

gulp.task('build', callback => {
    const plugin = [
            autoprefixer(),
            cssDeclarationSorter({
                order: 'smacss'
            }),
            mqpacker(),
        ]

    return gulp.src('src/**/*.scss')
        .pipe( postcss([
            stylelint(),
            reporter()
        ]) )
        .pipe( sass({
            outputStyle: 'expanded'
        }) )
        .pipe( postcss( plugin ) )
        .pipe( rename('sloth.css') )
        .pipe( gulp.dest( 'src/' ) )
        .on('end', () => {
            callback()
        })
})

gulp.task('minify', () => {
    const plugin = [
            cssnano({ preset: 'default' })
        ]
    
    return gulp.src('src/*.css')
        .pipe( sourcemaps.init() )
        .pipe( postcss( plugin ) )
        .pipe( rename('sloth.min.css') )
        .pipe( sourcemaps.write('.') )
        .pipe( gulp.dest( 'dist/' ) )
})

gulp.task('deploy', () => {
    const plugin = [
            cssnano({ preset: 'default' })
        ]
    
    return gulp.src('src/*.css')
        .pipe( postcss( plugin ) )
        .pipe( size({ gzip: true, showFiles: true }) )
        .pipe( rename('sloth.min.css') )
        .pipe( gulp.dest( 'dist/' ) )
        .pipe( gulp.dest( 'docs/assets/' ) )
})

gulp.task('css', gulp.series( 'build', 'minify' ))

gulp.task('prod', gulp.series( 'build', 'deploy' ))

gulp.task('dev', () => {
    gulp.watch('src/**/*.scss', gulp.task('css'))
})
