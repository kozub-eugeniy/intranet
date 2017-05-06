var gulp = require('gulp'),
	sass = require('gulp-sass');


gulp.task('sass', function(){
	return gulp.src('wp-content/themes/tattoo/sass/**/*.+(scss|sass)')
	.pipe(sass())
	.pipe(gulp.dest('wp-content/themes/tattoo/css'))
})	

gulp.task('watch', function(){
	gulp.watch(
	'wp-content/themes/tattoo/sass/**/*.+(scss|sass)',
	['sass']
	);
})	