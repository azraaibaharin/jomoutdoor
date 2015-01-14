var gulp = require('gulp'),	
	sass = require('gulp-sass'),
	autoprefixer = require('gulp-autoprefixer'),
	livereload = require('gulp-livereload');

gulp.task('css', function() {
	gulp.src('app/assets/sass/main.scss')
		.pipe(sass())
		.pipe(autoprefixer('last 10 version'))
		.pipe(gulp.dest('public/css'))
		.pipe(livereload());
});

gulp.task('watch', function() {
	gulp.watch('app/assets/sass/**/*.scss', ['css']);
});

gulp.task('default', ['watch']);
