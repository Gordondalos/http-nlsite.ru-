var gulp = require('gulp'),
	minifyCss = require('gulp-minify-css'),
	notify = require('gulp-notify'),
	sass = require('gulp-sass'),
	uncss = require('gulp-uncss'),
	prefix = require('gulp-autoprefixer'),
	livereload = require('gulp-livereload'),
	connect = require('gulp-connect'),
	rename = require('gulp-rename');


gulp.task('default',['connect','watch','reloadd']); // коннект не работает?

gulp.task('watch', function(){
	var server = livereload();
	gulp.watch('sass/*.sass',['SassToCss']); // компилирую
	gulp.watch('sass/_project/section/*.sass',['compliteMainCss']); // компилирую
	gulp.watch('sass/__base/part/*.sass',['compliteMainCss']); // компилирую
	//gulp.watch('app/css/*.css',['autoprefix']); // добавляю префиксы
	//gulp.watch('app/css/*.css',['minCss']); // сжимаю
	//gulp.watch('app/css/*.css',['deleteCss']); // удаляю лишнее, не раскоментировать лучше просто запустить командной строки
});

gulp.task('connect', function() {
	connect.server({
		root: 'app',
		port: 8000,
		livereload: true
	})

});

// данный такс только компилирует ксс
gulp.task('compliteMainCss', function(){
	gulp.src('sass/main.sass')
		//.pipe(sass({outputStyle: 'compressed'})) // раскоментируй для сжимания ксс
		.pipe(sass())
		.pipe(gulp.dest('app/css/'))
		.pipe(notify('css'))
	//.pipe(livereload());

});

// данный такс только компилирует ксс
gulp.task('SassToCss', function(){
     gulp.src('sass/*.sass')
		//.pipe(sass({outputStyle: 'compressed'})) // раскоментируй для сжимания ксс
		.pipe(sass())
		.pipe(gulp.dest('app/css/'))
		.pipe(notify('css'))
		//.pipe(livereload());

});

// данный таск сжимает ксс
gulp.task('minCss', function(){
     gulp.src('app/css/*.css')
		.pipe(minifyCss())
		.pipe(gulp.dest('app/css/'))
		.pipe(connect.reload())
		.pipe(notify('mini css'));

});

gulp.task('reloadd', function(){
	gulp.src('app/css/*.css')

	   .pipe(notify('reload'));
});



// данный такс удаляет ненужные ксс стили из указаных файлов
gulp.task('deleteCss', function () {
    return gulp.src('app/css/*.css')
        .pipe(uncss({
            html: ['app/index.html'] //, 'posts/**/*.html', 'http://example.com']
        }))
        .pipe(gulp.dest('app/css/'))
	    .pipe(notify('done!'));
});


// данный код должен добавлять автопрефиксы
gulp.task('autoprefix', function () {
    return gulp.src('app/css/*.css')
        .pipe(prefix('last 15 version'))
        .pipe(gulp.dest('app/css/'))
		.pipe(connect.reload())
	    .pipe(notify('autoprefix'));
});