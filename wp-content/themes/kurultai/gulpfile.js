var gulp = require('gulp');
var compass = require('gulp-compass');

gulp.task('compass', function(){

	gulp.src('./library/scss/*.scss')
		.pipe(compass({
			config_file: './library/scss/config.rb',
			css: './library/css',
			sass: './library/scss',
			style: 'expanded'
	}))
		.pipe(gulp.dest('./library/css'));

});

gulp.task('watch', function(){
	gulp.watch(['library/scss/*.scss', 'library/scss/**/*.scss'], ['compass']);
});

gulp.task('default', ['compass', 'watch']);
