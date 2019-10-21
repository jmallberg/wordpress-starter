var gulp = require('gulp'),
    autoprefixer = require('gulp-autoprefixer'),
    browserSync = require('browser-sync').create(),
    reload = browserSync.reload,
    sass = require('gulp-sass'),
    cleanCSS = require('gulp-clean-css'),
    sourcemaps = require('gulp-sourcemaps'),
    concat = require('gulp-concat'),
    changed = require('gulp-changed'),
    uglify = require('gulp-uglify'),
    lineec = require('gulp-line-ending-corrector');

// Setting root and file-threads in variables
var root = './',
    scss = './sass/',
    js = './js/',
    jsdist = './dist/js/';

// Watch PHP and style files 
var PHPWatchFiles = './**/*.php',      //Process any PHP file in the root dir
    styleWatchFiles = './**/*.scss';   //Process any style file in the root dir

// Set up gulp-concat to process JavaScript files in your specific order
// Add new external files in the same style as "test.js"
var jsSRC = [
    './js/*.js',
];

// Set up gulp-concat to process CSS files
var cssSRC = [
    './style.css',
];

// Set up image folder in variables
var imgSRC = './src/images/*',
    imgDEST = './dist/images/';

function css() {
    return gulp.src(['./sass/style.scss'])
        .pipe(sourcemaps.init({ loadMaps: true }))
        .pipe(sass({
            outputStyle: 'expanded'
        }).on('error', sass.logError))
        .pipe(autoprefixer('last 2 versions'))
        .pipe(sourcemaps.write())
        .pipe(lineec())
        .pipe(gulp.dest(root));
}

// Concat all CSS
function concatCSS() {
    return gulp.src(cssSRC)
        .pipe(sourcemaps.init({ loadMaps: true, largeFile: true }))
        .pipe(concat('style.min.css'))
        .pipe(cleanCSS())
        .pipe(sourcemaps.write('./maps/'))
        .pipe(lineec())
        .pipe(gulp.dest(scss));
}

// JavaScript function
function javascript() {
    return gulp.src(jsSRC)
        .pipe(concat('wordpress-starter.js'))
        .pipe(uglify())
        .pipe(lineec())
        .pipe(gulp.dest(jsdist));
}

function watch() {
    browserSync.init({
        open: 'external',
        proxy: 'http://localhost:8080',
        port: 8080,
    });
    gulp.watch(styleWatchFiles, gulp.series([css, concatCSS]));
    gulp.watch(jsSRC, javascript);
    gulp.watch([PHPWatchFiles, jsdist + 'wordpress-starter.js', scss + 'style.min.css']).on('change', browserSync.reload);
}

exports.css = css;
exports.concatCSS = concatCSS;
exports.javascript = javascript;
exports.watch = watch;

var build = gulp.parallel(watch);
gulp.task('default', build);