/**
 * zap
 * ===
 *
 * The custom gulp file for
 * the zap anchor theme
 *
 * @author Craig Childs
 */

// Grab dependencies
var gulp = require('gulp')
    sass = require('gulp-ruby-sass'),
	autoprefixer = require('gulp-autoprefixer'),
	minifycss = require('gulp-minify-css'),
	imagemin = require('gulp-imagemin'),
	rename = require('gulp-rename'),
	concat = require('gulp-concat'),
	notify = require('gulp-notify'),
	uglify = require('gulp-uglify'),
	cache = require('gulp-cache');

// Configure the paths to raw assets
var assets = {
    styles: 'assets/styles',
    js:     'assets/js',
    img:    'assets/img'
}

// Configure the paths to the public assets
var public = {
    styles: 'css',
    js:     'js',
    img:    'img'
}

// Create a js task
gulp.task('js', function() {
	return gulp.src(assets.js + '/**/*.js')
		.pipe(concat('main.js'))
		.pipe(uglify())
		.pipe(gulp.dest(public.js))
		//.pipe(notify({ message: 'JS task has completed.' }))
});

// Create a css task
gulp.task('css', function() {
	return gulp.src(assets.styles + '/main.scss')
		.pipe(sass({ style: 'expanded' }))
		.pipe(autoprefixer())
		.pipe(minifycss())
		.pipe(gulp.dest(public.styles))
		//.pipe(notify({ message : 'CSS task has completed.' }))
});

// Create a image task
gulp.task('images', function() {
	return gulp.src(assets.img + '/**/*')
		.pipe(cache(imagemin({ optimizationLevel: 3, progressive: true, interlaced: true })))
		.pipe(gulp.dest(public.img))
		//.pipe(notify({ message: 'Image task has completed.' }))
});

// Setup the default task
gulp.task('default', ['js', 'css', 'images', 'watch']);

// Create a file watcher
gulp.task('watch', function() {

    // watch js files
	gulp.watch(assets.js + '/**/*.js', ['js']);

    // watch css files
	gulp.watch(assets.styles + '/**/*.scss', ['css']);

    // watch images
	gulp.watch(assets.img + '/**/*', ['images']);

});
