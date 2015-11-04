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
      //  .pipe(cssmin())
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