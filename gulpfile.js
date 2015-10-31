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
    rename = require('gulp-rename');


gulp.task('default', ['connect','watch']);

// ������� � �������
gulp.task('connect', function() {
    connect.server({
        root: 'app',
        port: 8000,
        livereload: true
    })

});

gulp.task('watch', function(){
   var server = livereload();
   gulp.watch('sass/*.sass',['cascad']); // ����������
   gulp.watch('sass/_project/section/*.sass',['compliteMainCss']); // ����������
   gulp.watch('sass/__base/part/*.sass',['compliteMainCss']); // ����������

});






// ������ ���� ������ ����������� ���
//gulp.task('SassToCss', wrapPipe(function(success, error) {
gulp.task('SassToCss', function(){
    gulp.src('sass/*.sass')
        //.pipe(sass({outputStyle: 'compressed'}).on('error', error)) // ������������� ��� �������� ���
        .pipe(sass({outputStyle: 'compressed'})) // ������������� ��� �������� ���
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



// ������ ���� ������� �������� ��� ����� �� �������� ������
gulp.task('deleteCss', function () {
    return gulp.src('app/css/*.css')
        .pipe(uncss({
            html: ['app/index.html'] //, 'posts/**/*.html', 'http://example.com']
        }))
        .pipe(gulp.dest('app/css/'))
        .pipe(notify('done!'));
});



// ������ ���� ������ ����������� ���
gulp.task('compliteMainCss', function(){
    gulp.src('sass/main.sass')
        .pipe(sass())
        .pipe(gulp.dest('app/css/'));
    gulp.src('app/css/*.css')
        .pipe(concatCss("main.css"))
        .pipe(prefix('last 15 version'))
        //  .pipe(minifyCss())
        .pipe(cssmin())
        .pipe(gulp.dest('app/css/finalcss/'))
        .pipe(connect.reload())
        .pipe(notify('done!'));

});


gulp.task('cascad', function(){
    gulp.src('sass/*.sass')
        .pipe(sass())
        .pipe(gulp.dest('app/css/'));
    gulp.src('app/css/*.css')
        .pipe(concatCss("main.css"))
        .pipe(prefix('last 15 version'))
      //  .pipe(minifyCss())
        .pipe(cssmin())
        .pipe(gulp.dest('app/css/finalcss/'))
        .pipe(connect.reload())
        .pipe(notify('done!'));
});