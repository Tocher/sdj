var gulp = require('gulp'),
    concat = require('gulp-concat'),
    autoprefixer = require('gulp-autoprefixer'),
    wrap = require('gulp-wrap'),
    watch = require('gulp-watch'),
    streamqueue = require('streamqueue'),
    uglify = require('gulp-uglify'),
    minifyCSS = require('gulp-minify-css'),
    minifyHTML = require('gulp-minify-html'),
    runSequence = require('run-sequence');

gulp.task('index.min.html', function () {
  var opts = {
        comments:true,
        spare:true,
        quotes:true
      };

    // Css
    gulp.src(['blocks/**/*.css'])
        .pipe(minifyCSS(
            { keepBreaks: false }
        ))
        .pipe(concat('index.css'))
        .pipe(autoprefixer(
            {
                browsers: ['last 3 versions'],
                cascade: true
            }
        ))
        .pipe(concat('style.css'))
        .pipe(gulp.dest('./'));

  streamqueue(
        { objectMode: true },
        // Html
        gulp.src('head.html'),
        gulp.src('blocks/**/*.html')
          .pipe(minifyHTML(opts))
          .pipe(concat('index_full.html')),
        // Js
        gulp
          .src([
              'node_modules/jquery/dist/jquery.min.js',
              'node_modules/modal-vanilla/dist/modal.min.js',
              'node_modules/jquery-form-validator/form-validator/jquery.form-validator.min.js'
          ])
          .pipe(wrap('<script><%= file.contents %></script>')),
        gulp
          .src(['blocks/**/*.js'])
          .pipe(uglify())
          .pipe(concat('index.js'))
          .pipe(wrap('<script><%= file.contents %></script>')),
        gulp.src('tail.html')
      )
    .pipe(concat('index.html'))
    .pipe(gulp.dest('./'))
});

gulp.task('ableton', function () {
    var opts = {
        comments:true,
        spare:true,
        quotes:true
    };

    // Css
    gulp.src(['blocks-ableton/**/*.css'])
        .pipe(minifyCSS(
            { keepBreaks: false }
        ))
        .pipe(concat('index.css'))
        .pipe(autoprefixer(
            {
                browsers: ['last 3 versions'],
                cascade: true
            }
        ))
        .pipe(concat('style-ableton.css'))
        .pipe(gulp.dest('./'));

    streamqueue(
        { objectMode: true },
        // Html
        gulp.src('head-ableton.html'),
        gulp.src('blocks-ableton/**/*.html')
            .pipe(minifyHTML(opts))
            .pipe(concat('index_full.html')),
        // Js
        gulp
            .src([
                'node_modules/jquery/dist/jquery.min.js'
            ])
            .pipe(wrap('<script><%= file.contents %></script>')),
        gulp
            .src(['blocks-ableton/**/*.js'])
            .pipe(uglify())
            .pipe(concat('index.js'))
            .pipe(wrap('<script><%= file.contents %></script>')),
        gulp.src('tail.html')
    )
        .pipe(concat('ableton.html'))
        .pipe(gulp.dest('./'))
});

gulp.task('watch', function() {
  runSequence('index.min.html');

  watch([
      'blocks/**/*.html',
      'blocks/**/*.css',
      'blocks/**/*.js'
      ],
      function () {
        gulp.start('index.min.html')
    }
  )


    watch([
            'blocks-ableton/**/*.html',
            'blocks-ableton/**/*.css',
            'blocks-ableton/**/*.js'
        ],
        function () {
            gulp.start('ableton')
        }
    )
});

gulp.task('default', function() {
  runSequence('index.min.html')
});
