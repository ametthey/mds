import gulp from 'gulp';
import browserSync from 'browser-sync';

import yargs from 'yargs';
import size from 'gulp-size';
import replace from 'gulp-replace';
import notify from 'gulp-notify';
import gulpif from 'gulp-if';
import sourcemaps from 'gulp-sourcemaps';
import zip from 'gulp-zip';
import del from 'del';
import named from 'vinyl-named'
import info from './package.json';

// JS
import jshint from 'jshint';
import concat from 'gulp-concat';
import terser from 'gulp-terser';
import webpack from 'webpack-stream';

// POSTCSS
import sass from 'gulp-dart-sass';
import postcss from 'gulp-postcss';

// OPTIMISATION
import imagemin from 'gulp-imagemin';
import autoprefixer from 'autoprefixer';
// import cssnano from 'cssnano';
import advanced from 'cssnano-preset-advanced';
import cleanCSS from 'gulp-clean-css';
import cache from 'gulp-cache';

// Check JS Size

const server = browserSync.create();
export const serve = (done) => {
    server.init({
        proxy: "mjccustom.yo",
        notify: false
    });
    done();
}

// create a prod flag (--prod)
const PRODUCTION = yargs.argv.prod;

const path = {
    styles: {
        src: ['src/assets/scss/home.scss','src/assets/scss/location.scss','src/assets/scss/benevole.scss','src/assets/scss/contact.scss','src/assets/scss/infopratiques.scss'],
        dest: 'dist/assets/css'
    },
    scripts: {
        src: ['src/assets/js/home.js','src/assets/js/location.js','src/assets/js/benevole.js','src/assets/js/contact.js','src/assets/js/infopratiques.js'],
        dest: 'dist/assets/js'
    },
    images: {
        src: 'src/assets/images/**/*.{webm,jpg,jpeg,png,svg,gif,mov,mp4,json}',
        dest: 'dist/assets/images'
    },
    other: {
        src: ['src/assets/**/*', '!src/assets/{images,js,scss}', '!src/assets/{images,js,scss}/**/*'],
        dest: 'dist/assets'
    },
    package: {
        src: ['**/*', '!.DS_Store', '!node_modules{,/**}', '!packaged{,/**}', '!src{,/**}', '!.babelrc' , '!gitignore' , '!gulpfile.babel.js' , '!package.json' , '!package-lock.json'],
        dest: 'packaged'
    }
}

export const clean = () => del(['dist','packaged']);

export const styles = () => {
    return gulp.src(path.styles.src)
        .pipe(gulpif(!PRODUCTION,sourcemaps.init()))
        .pipe(sass({
            includePaths: ['./node_modules'],
            outputStyle: 'compressed',
            precision: 10
        }).on('error', sass.logError))
        .pipe(gulpif(PRODUCTION,
            postcss([
                autoprefixer ({
                    grid: true,
                    flexbox: true,
                }),
            ])
        ))
        .pipe(gulpif(PRODUCTION, cleanCSS({
            compatibility: '*', // Internet Explorer 10+ compatibility mode
            level: {
                1: {
                    all: false, // set all values to `false`
                    tidySelectors: true // turns on optimizing selectors
                }
            }
        })))
        .pipe(gulpif(!PRODUCTION, sourcemaps.write()))
        // .pipe(size({
        //     title: 'SASS',
        //     pretty: true,
        //     gzip: true,
        //     showFiles: true,
        //     showTotal: true,
        // }))
        .pipe(gulp.dest(path.styles.dest))
        .pipe(server.stream	());
}
export const scripts = () => {
    // this will take the scrpts from the source folder
    return gulp.src(path.scripts.src)
        .pipe(named())
        .pipe(webpack({
            module: {
                rules: [
                    {
                        test: /\.js$/,
                        exclude: /(node_modules|bower_components)/,
                        use: [
                            {
                                loader: 'babel-loader',
                                options: {
                                    presets: ['@babel/preset-env'],
                                }
                            },

                        ]
                    }
                ]

            },
            plugins: [
                // new BundleAnalyzerPlugin()
            ],
            output: {
                filename: '[name].js',
            },
            // verify in google chrome inspector that JavaScript sourcemap is active
            devtool: !PRODUCTION ? 'inline-source-map' : false,
            mode: PRODUCTION ? 'production' : 'development', // add this

        }))
    // .pipe( concat('main.js') )
        .pipe(gulpif(PRODUCTION, terser({
            mangle: {
                keep_classnames: true,
                keep_fnames: true,
            },
            compress: {
                drop_console: true,
                dead_code: true,
            }
        })))
        // .pipe(size({
        //     title: 'JavaScript',
        //     pretty: true,
        //     showFiles: true,
        //     gzip: true,
        // }))
        .pipe(gulp.dest(path.scripts.dest));
}
export const images = () => {
    return gulp.src(path.images.src)
        .pipe(gulpif(PRODUCTION, imagemin([
            imagemin.mozjpeg({quality: 75, progressive: true}),
            imagemin.optipng({optimizationLevel: 5}),
        ])))
        // .pipe(size({
        //     title: 'Images',
        //     showTotal: true,
        // }))
        .pipe(gulp.dest(path.images.dest));
}
export const copy = () => {
    return gulp.src(path.other.src)
        .pipe(gulp.dest(path.other.dest));
}


export const watch = () => {
    gulp.watch('src/assets/scss/**/*.scss',  { delay: 750 }, styles);
    gulp.watch(['src/assets/js/**/*.js', 'gulpfile.babel.js'],  { delay: 750 }, gulp.series(scripts, reload));
    gulp.watch('**/*.php',  { delay: 750 }, reload);
    gulp.watch(path.images.src,  { delay: 750 }, gulp.series(copy, images, reload));
    gulp.watch(path.other.src,  { delay: 750 }, gulp.series(copy, reload));
}

export const reload = (done) => {
    server.reload();
    done();
}


export const compress = () => {
    return gulp.src(path.package.src)
        .pipe(replace('_themename', info.name))
        .pipe(zip(`${info.name}.zip`))
        // .pipe(size({
        //     title: 'Compress',
        //     showFiles: true,
        //     showTotal: true,
        // }))
        .pipe(gulp.dest(path.package.dest));
}

export const dev = gulp.series(clean, gulp.parallel(styles, scripts, images, copy ), serve, watch);
const build = gulp.series(clean, gulp.parallel(styles,  scripts, images, copy));
export const bundle = gulp.series(build, compress);
export default dev;
