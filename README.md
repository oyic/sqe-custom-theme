#  SquareEye WordPress Starter Theme (FoundationPress) :metal:
[![ForTheBadge built-with-love](http://ForTheBadge.com/images/badges/built-with-love.svg)](https://GitHub.com/Naereen/)

This is a package specifically for WordPress Development in macOS environment.

## Requirements
1. npm :metal:

## Installation
1. On your theme folder, open a terminal.
2.  Issue these command `git clone https://github.com/oyic/sqe-custom-theme.git [folder-choice]`.

## Usage
* ```npm install``` - install necessary dependencies.
* ```npm start``` - this will pre-compile the assets (scss,js,images) but not minify or optimise it yet (for development)
* ```npm run build``` - for production, the CSS and JS will be minified.
* ```npm run package``` - This excludes the developer files/directories from your theme like /node_modules, /src, etc. to keep the theme lightweight for transferring the theme to a staging or production server.


## Notable file directories

1. ```/src/assets/scss``` - inside here resides the scss files for the theme.
2. ```/src/assets/scss/templates``` - inside here the styling per page template. just dont forget to add the new scss file to the main app.scss
3. Other scss files are self-explanatory.

4. ```/includes/*.php``` - files like acf-fields contains the php code to pre-built the optiona page of ACF, this will be only activated if we have ACF-PRO installed. Plus other files to call up required files.
5.```/misc/cpt/post-types.php and /misc/tax/tax.php``` wp-level of declaration of CPT's and custom TAXONOMIES.

## Includes
1. FoundationPress

### Notes:
* Use BEM on styling by ```@include el(element)``` & ```@include mod(modifer)```


