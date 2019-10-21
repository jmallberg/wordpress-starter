# Wordpress Starter Theme

This is a super simple starter theme for Wordpress based upon the theme _Underscore. It comes with
a predetermined setup, styles, and some templates.

The goal of this theme is to make the setup of a custom theme faster and more enjoyable.

## NPM modules this theme makes use of:

|                             | Description                                                                             |
| --------------------------- | --------------------------------------------------------------------------------------- |
| Gulp                        | To automate your workflow                                                               |
| Browser-sync                | Hot reload of your work in the browser                                                  |
| Gulp-auto-prefixer          | If a Css-prefix is needed this will add that for you                                    |
| Gulp-changed                | Process only changed files                                                              |
| Gulp-clean-css              | Minifies CSS                                                                            |
| Gulp-concat                 | Concatinates all JS and CSS to one file                                                 |
| Gulp-line-ending-corrector  | Makes sure you have the same line endings cross platform                                |
| Gulp-sass                   | Sass Compiler, makes sure you can use sass in this theme                                |
| Gulp-sourcemaps             | To identify the source of the code you are viewing through the browser developer tools  |
| Gulp-uglify                 |  Minifies your JavaScript code                                                          |

## Main templates

* Header
* Footer
* 404-page
* Front-page
* About us

## Folder explanation

* dist = Endpoint for compiled files
* includes = Functionality included in functions.php
* js = All your JavaScript or jQuery files, all files in this folder wil be compiled into dist/js
* language = Translation files for the theme
* sass = All your scss files
    - base = General styles like globals, typography, colors.. etc.
    - components = Scss for smaller self-contained partials like a card view or a modal
    - layout = Scss for bigger layout components, like header and footer
    - maps = compiled css, ignore this folder
    - pages = Page specific styling, for pages like home, about.. etc.
    - utils = Collections of mixins or scss-functions
    - vendor = Third party css, like normalize or different imported component css

### Setup steps for a new project with this build

* Install WordPress locally on your machine
* Create a MYsql DB for your project
* Use XAMPP or simular software to run Apache
* Setup wp_config (Salt, db.. etc.)
* Make a new theme-folder in "/wp-content/themes"
* Copy all files from starter into this folder
* Git init or push to existing project repository
* Create a Home-page and set this to the static frontpage
* Install needed plugins; AFC-Pro (Get zip from ACF site), Classic-editor, Ninja-forms, Bugsnag Error Monitoring, Yoast SEO
* Add needed templates
* Create menus called "primary" and "footer-menu" to display registered menus
* Delete normalize if you want total control

## Getting up and running with all of the dependencies

    cd into the theme
    "nvm install" to install correct node version
    "nvm use **.**.**" the correct node version
    "npm install" to install the needed NPM packages

## Start hacking

    "npm run dev" to start gulp and browser-sync
