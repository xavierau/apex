var gulp = require('gulp');
var install = require(('gulp-install'));
var concat = require(('gulp-concat'));
var rename = require(('gulp-rename'));
var notify = require(('gulp-notify'));
var less = require(('gulp-less'));

gulp.task("install", function(){
	gulp.src('package.json')
		.pipe(install());
})

// combine and compress boostrap js and jquery all together
gulp.task("cbjjs", function(){
	gulp.src(['public/componenets/jquery/dist/jquery.min.js','public/componenets/boostrap/dist/js/boostrap.min.js' ])
		.pipe(concat("one.min.js"))
		.pipe(gulp.dest('public/assets/js/'))
		.pipe(notify('concat both js files'));
});

gulp.task('lessc', function(){
	gulp.src('public/assets/css/less/*.less')
		.pipe(less({compress:true}))
		.pipe(gulp.dest('public/assets/css/'))
		.pipe(notify('less compiled'));
})

gulp.task("watch", function(){
	gulp.watch('public/assets/css/less/*.less', function() {
		gulp.run('lessc');
	})		
});
