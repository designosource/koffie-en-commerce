var root = '';
var dest = root + '';
var src = root + '';
var gutil = require('gulp-util');


module.exports = {
    'publicURL': 'foreach.be',
    'devURL': 'foreach.local',
    'templates': ['**/*.html', '**/*.tpl.php'],
    'scss': {
        'src': [src + (gutil.env.path?gutil.env.path:'') + '**/*.scss', src + '!node_modules/**/*.scss'],
        'dest': dest + (gutil.env.path?gutil.env.path:'')
    },
    'js': {
        'src': src + 'js-src/',
        'dest': src + 'js/'
    },
    'svg': {
        'src': src + 'svg-src/',
        'dest': src + 'svg/'
    },
    'images_src': 'static/**/*',
    'images_dest': 'static/',
    'lint': {
        'js': {
            'src': [
                src + '/**/*.js',
                '!' + src + '/**/lib/**/*.js'
            ],
            'config': root + '/.jshintrc'
        },
        'scss': {
            'src': [
                src + (gutil.env.path?gutil.env.path:'') + '**/*.scss'
            ]
        }
    }
};

var gulp = require('gulp');
var gutil = require('gulp-util');
var handleErrors = require('../util/handleErrors');
var config = require('../config').scss;
var sass = require( 'gulp-sass' );
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var gulpif = require('gulp-if');

gulp.task('scss', function () {
    console.log( "starting to compile " + [src + (gutil.env.path?gutil.env.path:'') + '**/*.scss', src + '!node_modules/**/*.scss'] );
    return gulp.src([src + (gutil.env.path?gutil.env.path:'') + '**/*.scss', src + '!node_modules/**/*.scss'])
    .pipe( gulpif( !gutil.env.production, sourcemaps.init() ) )
    .on('error', handleErrors)
    .pipe(sass({
        outputStyle: gutil.env.production ? 'compressed' : 'expanded',
        errLogToConsole: true,
        sourceComments : gutil.env.production ? false : true
    }))
    .on('error', handleErrors)
    .pipe(autoprefixer())
    .on('error', handleErrors)
    .pipe( gulpif( !gutil.env.production, sourcemaps.write() ) )
    .on('error', handleErrors)
    .pipe(gulp.dest(dest + (gutil.env.path?gutil.env.path:'')))
});