var gulp = require('gulp'),
watch = require('gulp-watch'),
postcss = require('gulp-postcss'),
autoprefixer = require('autoprefixer'),
cssvars = require('postcss-simple-vars'),
nested = require('postcss-nested'),
cssImport = require('postcss-import'),
browserSync = require('browser-sync'),
reload = browserSync.reload;
// connect =  require('gulp-connect');


var local = 'localhost/aguiatravel/';

//gulp tasks
gulp.task('default', ['browser-sync'], function(){
	console.log('aguia gulp task succefully');
});


gulp.task('php', function(){
	// console.log('php file was save successfully');
});

gulp.task('styles', function(){
	return gulp.src('./assets/css/custom.css')
	.pipe(postcss([cssImport, cssvars, nested, autoprefixer]))
	.pipe(gulp.dest('./assets/css/styles'));
	// console.log('css was save successfully');
});

gulp.task('browser-sync', function(){
	var files =[
		'./assets/css/**/*css',
		'./*php'
	];

	browserSync.init(files, {
		proxy: "http://localhost/aguiatravel/",
		noify: false
	});
});

//gulp watch

gulp.task('watch', ['browser-sync'], function(){

	watch('**/*.css', function(){
		gulp.start('styles');
	});

	watch('**/*.php', function(){
			gulp.start('php');
	});

});
