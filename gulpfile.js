'use strict';

var gulp 		= require('gulp'),
	sass        = require('gulp-sass'),
	concat      = require('gulp-concat'),
	uglify      = require('gulp-uglify'),
	minifyCss   = require('gulp-minify-css'),
	autoprefixer = require('gulp-autoprefixer'),
	browserSync = require('browser-sync').create();
gulp.task('sass', function () {
  return gulp.src('./_scss/main.scss')
  	.pipe(sass({
            includePaths: ['scss'],
            onError: browserSync.notify
        }))
    .pipe(autoprefixer(['last 15 versions', '> 1%', 'ie 8', 'ie 7'], { cascade: true }))
    .pipe(minifyCss())
    .pipe(gulp.dest('./assets/css'))
    .pipe(browserSync.stream());
});

gulp.task('js',function(){
	//gulp tasks
	return gulp.src([
    './bower_components/jquery/dist/jquery.min.js',
    './js/vendor/jquery.parallax.min.js',
    './js/main.js'
    ])
    .pipe(concat('app.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./assets/js'));
});

// create a task that ensures the `js` task is complete before
// reloading browsers
gulp.task('js-watch', ['js'], function(){
        browserSync.reload();
        return;
    });


gulp.task('serve', function() {
    browserSync.init({
        proxy: "localhost:8000/dev.batata.fr",
        port: 8080,
        open: true,
        notify: true
    });
    gulp.watch('./js/*.js', ['js-watch'])
    gulp.watch('./_scss/Base/*.scss', ['sass']);
});

gulp.task('default', ['serve']);
