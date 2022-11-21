'use strict';

const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));

function scss() {
  return gulp.src('../*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('../'));
};

exports.scss = scss;
exports.watch = function () {
  gulp.watch('../*.scss', gulp.series('scss'));
};