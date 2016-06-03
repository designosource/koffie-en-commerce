/**
 * Basic GULP setup
 */

'use strict';

/**
 * Define source and build path, devserver ip
 */
var sourceDir = '',
    bowerDir = 'bower_components';

/**
 * Load dependencies
 */
var gulp = require('gulp'),
    sass = require('gulp-sass'), // development & production
    autoprefixer = require('gulp-autoprefixer'), // development & production
    notify = require('gulp-notify'), // development & production
    jshint = require('gulp-jshint'), // dev
    livereload = require('gulp-livereload');

/**
 * SASS COMPILING: development
 */
gulp.task('sass', function () {
    gulp.src('resources/assets/scss/**/*.scss')
        .pipe(sass({
            'outputStyle': 'expanded',
            'sourceComments': true,
            'lineNumbers': true
        }).on('error', function (err) {
            console.error('Sass error: ', err.message);
        }))
        .pipe(autoprefixer({
            browsers: ['last 3 versions']
        }))
        .pipe(gulp.dest('public/css'))
        .pipe(notify({message: 'Styles task complete'}));
});

/**
 * JS linter
 */
gulp.task('lint', function () {
    return gulp.src(sourceDir + 'js/**/*.js')
        .pipe(jshint())
        .pipe(jshint.reporter('default'));
});

/**
 * Watch for changes | Executes sass and jshint
 */
gulp.task('watch', function () {

    // Watch for sass changes
    livereload.listen('start');
    gulp.watch('resources/assets/scss/**/*.scss', ['sass']);

    // Watch for js changes
    //gulp.watch(sourceDir + 'js/**/*.js', ['lint']);

});

gulp.task('dev', ['watch']);
