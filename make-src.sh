#!/bin/sh

mkdir src
mkdir src/sass
mkdir src/img
mkdir src/js
mkdir src/libs
mkdir src/fonts
touch src/index.html
touch src/sass/style.sass
touch src/sass/_reset.sass
touch src/sass/_grid.sass
touch src/sass/_interface.sass
touch src/sass/_media.sass

touch src/js/common.hs

echo "@import 'reset'" >>  src/sass/style.sass
# gulp serve
