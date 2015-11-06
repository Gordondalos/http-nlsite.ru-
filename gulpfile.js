<<<<<<< HEAD
var gulp = require('gulp'),
    minifyCss = require('gulp-minify-css'),
    notify = require('gulp-notify'),
    sass = require('gulp-sass'),
    uncss = require('gulp-uncss'),
    prefix = require('gulp-autoprefixer'),
    livereload = require('gulp-livereload'),
    connect = require('gulp-connect'),
    concatCss = require('gulp-concat-css'),
    cssmin = require('gulp-cssmin'),
    concat = require('gulp-concat'),
    minify = require('gulp-minify');
    //rigger = require('gulp-rigger'),
    //rename = require('gulp-rename');



gulp.task('default', ['watch']);

// конекты к серверу
gulp.task('connect', function() {
    connect.server({
        root: 'app',
        port: 8000,
        livereload: true
    })

});

gulp.task('watch', function(){
   var server = livereload();
   gulp.watch('sass/**/*.sass',['cascad']); // компилирую
   //gulp.watch('sass/_project/section/*.sass',['compliteMainCss']); // компилирую
  // gulp.watch('sass/__base/part/*.sass',['compliteMainCss']); // компилирую

});






// данный такс только компилирует ксс
//gulp.task('SassToCss', wrapPipe(function(success, error) {
gulp.task('SassToCss', function(){
    gulp.src('app/**/*.sass')
        //.pipe(sass({outputStyle: 'compressed'}).on('error', error)) // раскоментируй для сжимания ксс
        .pipe(sass({outputStyle: 'compressed'})) // раскоментируй для сжимания ксс
        //.pipe(sass())
        .pipe(gulp.dest('app/css/'))
        //.pipe(notify('css'));
        .pipe(notify('main css done!'));
    //.pipe(livereload());

});
//}));

function wrapPipe(taskFn) {
    return function(done) {
        var onSuccess = function() {
            done();
        };
        var onError = function(err) {
            done(err);
        };
        var outStream = taskFn(onSuccess, onError);
        if(outStream && typeof outStream.on === 'function') {
            outStream.on('end', onSuccess);
        }
    }
}



// данный такс удаляет ненужные ксс стили из указаных файлов
gulp.task('deleteCss', function () {
    return gulp.src('app/css/*.css')
        .pipe(uncss({
            html: ['app/index.html'] //, 'posts/**/*.html', 'http://example.com']
        }))
        .pipe(gulp.dest('app/css/'))
        .pipe(notify('done!'));
});



// данный такс только компилирует ксс
gulp.task('compliteMainCss', function(){
    gulp.src('sass/main.sass')
        .pipe(sass({outputStyle: 'compressed'}))
        .pipe(gulp.dest('app/css/'));
    gulp.src('app/css/*.css')
        .pipe(concatCss("main.css"))
    //    .pipe(notify("css+concat"))
       // .pipe(prefix('last 15 version'))
        //  .pipe(minifyCss())
      //  .pipe(cssmin())
       // .pipe(gulp.dest('app/css/finalcss/'))
       // .pipe(connect.reload())
        .pipe(notify('done!'));

});


gulp.task('cascad', function(){
    gulp.src('sass/*.sass')
        .pipe(sass())
        .pipe(gulp.dest('app/css/'));
    gulp.src('app/css/*.css')
        .pipe(concatCss("main.css"))
      //  .pipe(prefix('last 15 version'))
      //  .pipe(minifyCss())
        .pipe(cssmin())
        .pipe(gulp.dest('app/css/finalcss/'))
        //.pipe(connect.reload())
        .pipe(notify('done!'));

});


gulp.task('js', function(){
    return gulp.src([
        'app/js/jquery.min.js',
        'app/js/jquery.js',

        'app/js/jquery.fancybox.pack.js',
        'app/js/jquery.mask.min.js',
        'app/js/script.js',
        'app/js/isotope.js',
        'app/js/jquery.countupcircle.js',
        'app/js/jquery.validate.min.js',
        'app/js/bootstrap.min.js',
        'app/js/jquery.mask.min.js',
        'app/js/messages_ru.js',
        'app/js/angular.min.js',
        'app/js/angular-route.min.js',
        'app/js/article.js',
        'app/js/jquery-ui.min.js',

        'app/js/main.js',
        'app/js/wow.js'
    ])
        .pipe(concat('all.js'))
        .pipe(minify({
            exclude: ['tasks'],
            ignoreFiles: ['bootstrap.js', 'jquery - 9.1.9.js']
        }))
        .pipe(gulp.dest('app/finaljs/'))
        .pipe(notify('done!'));
});


//gulp.task('html:build', function () {
//    gulp.src('app/1/index.html') //Выберем файлы по нужному пути
//        .pipe(rigger()) //Прогоним через rigger
//        .pipe(gulp.dest('app/2/')); //Выплюнем их в папку build
//
//});
=======
'use strict';

var gulp = require('gulp'),
	watch = require('gulp-watch'),
	prefixer = require('gulp-autoprefixer'),
	uglify = require('gulp-uglify'),
	sass = require('gulp-sass'),
	sourcemaps = require('gulp-sourcemaps'),
	rigger = require('gulp-rigger'),
	cssmin = require('gulp-minify-css'),
	imagemin = require('gulp-imagemin'),
	pngquant = require('imagemin-pngquant'),
	rimraf = require('rimraf'),
	browserSync = require("browser-sync"),
	reload = browserSync.reload;

var path = {
	build: {
		html: 'build/',
		js: 'build/js/',
		css: 'build/css/',
		img: 'build/img/',
		fonts: 'build/fonts/'
	},
	src: {
		html: 'src/*.html',
		js: 'src/js/main.js',
		style: 'src/sass/main.sass',
		img: 'src/img/**/*.*',
		fonts: 'src/fonts/**/*.*'
	},
	watch: {
		html: 'src/**/*.html',
		js: 'src/js/**/*.js',
		style: 'src/sass/**/*.sass',
		img: 'src/img/**/*.*',
		fonts: 'src/fonts/**/*.*'
	},
	clean: './build'
};

var config = {
	server: {
		baseDir: "./build"
	},
	tunnel: true,
	host: 'localhost',
	port: 9000,
	logPrefix: "Frontend_Devil"
};

gulp.task('webserver', function () {
	browserSync(config);
});

gulp.task('clean', function (cb) {
	rimraf(path.clean, cb);
});

gulp.task('html:build', function () {
	gulp.src(path.src.html)
		.pipe(rigger())
		.pipe(gulp.dest(path.build.html))
		.pipe(reload({stream: true}));
});

gulp.task('js:build', function () {
	gulp.src(path.src.js)
		.pipe(rigger())
		.pipe(sourcemaps.init())
		.pipe(uglify())
		.pipe(sourcemaps.write())
		.pipe(gulp.dest(path.build.js))
		.pipe(reload({stream: true}));
});

gulp.task('style:build', function () {
	gulp.src(path.src.style)
		.pipe(sourcemaps.init())
		.pipe(sass({
			sourceMap: true,
			errLogToConsole: true
		}))
		.pipe(prefixer())
		.pipe(cssmin())
		.pipe(sourcemaps.write())
		.pipe(gulp.dest(path.build.css))
		.pipe(reload({stream: true}));
});

gulp.task('image:build', function () {
	gulp.src(path.src.img)
		.pipe(imagemin({
			progressive: true,
			svgoPlugins: [{removeViewBox: false}],
			use: [pngquant()],
			interlaced: true
		}))
		.pipe(gulp.dest(path.build.img))
		.pipe(reload({stream: true}));
});

gulp.task('fonts:build', function() {
	gulp.src(path.src.fonts)
		.pipe(gulp.dest(path.build.fonts))
});

gulp.task('build', [
	'html:build',
	'js:build',
	'style:build',
	'fonts:build',
	'image:build'
]);


gulp.task('watch', function(){
	watch([path.watch.html], function(event, cb) {
		gulp.start('html:build');
	});
	watch([path.watch.style], function(event, cb) {
		gulp.start('style:build');
	});
	watch([path.watch.js], function(event, cb) {
		gulp.start('js:build');
	});
	watch([path.watch.img], function(event, cb) {
		gulp.start('image:build');
	});
	watch([path.watch.fonts], function(event, cb) {
		gulp.start('fonts:build');
	});
});


gulp.task('default', ['build', 'webserver', 'watch']);
>>>>>>> 7b0e1b146d55bb92a44d7bebd905aa4a34b10756
