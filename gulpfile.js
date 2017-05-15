var gulp = require('gulp');
var autoprefixer = require('gulp-autoprefixer');
var cssmin = require('gulp-cssmin');

var imagemin = require('gulp-imagemin');

var uglify = require('gulp-uglify');
 
gulp.task('css', function () {
	gulp.src('style.css')
		.pipe(autoprefixer())
		.pipe(cssmin())
		.pipe(gulp.dest('build'));
});

gulp.task('images', function() {
    return gulp.src('img/*.jpg')
    .pipe(imagemin({ progressive: true }))
    .pipe(gulp.dest('build/img'));
});

gulp.task('png', function() {
    return gulp.src('img/*.png')
    .pipe(imagemin({ progressive: true }))
    .pipe(gulp.dest('build/img'));
});

gulp.task('compress', function() {
  return gulp.src('js/*.js')
    .pipe(uglify())
    .pipe(gulp.dest('build/js'));
});

gulp.task('watch', function() {
	gulp.watch('style.css', ['css']);
	gulp.watch('js/', ['compress']);
	gulp.watch('img/', ['images']);
	gulp.watch('img/', ['png']);
});

gulp.task('watchcss', function() {
	gulp.watch('style.css', ['css']);
});