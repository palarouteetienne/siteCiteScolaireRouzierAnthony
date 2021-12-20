'use strict';
/* eslint-disable */

var gulp = require('gulp'),
    del = require('del'),
    autoprefixer = require('autoprefixer'),
    gulpLoadPlugins = require('gulp-load-plugins'),
    plugins = gulpLoadPlugins(),
    saveLicense = require('uglify-save-license');

// CLEAR build folder
gulp.task('clear', function() {
    return del([
        './dist/**/*'
    ]);
});

// CSS 
gulp.task('css', ['clear'], function () {
    return gulp.src(
        ['./css/darkbox.css'])
        .pipe(plugins.postcss([require('precss'), autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9')]))
        .pipe(gulp.dest('./dist/css/'))

        .pipe(plugins.csso())
        .pipe(plugins.rename({ suffix: '.min' }))
        .pipe(gulp.dest('./dist/css/'));
});

// JS
gulp.task('js', ['clear'], function () {
    return gulp.src('./js/darkbox.js')
        .pipe(plugins.babel({presets: ['env']}))
        .pipe(gulp.dest('./dist/js/'))

        .pipe(plugins.uglify({
            output: {
                comments: saveLicense
            }
        }))
        .pipe(plugins.rename({ suffix: '.min' }))
        .pipe(gulp.dest('./dist/js/'));
});

// ASSETS
gulp.task('assets', ['clear'], function () {
    return gulp.src('./darkbox/assets/darkbox/**/*')
        .pipe(gulp.dest('./dist/assets/darkbox/'))
        .pipe(gulp.dest('./example/assets/darkbox/'));
});

// DEFAULT
gulp.task('default', ['css', 'js', 'assets']);
