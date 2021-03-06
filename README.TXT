=== MSpringer ===

Contributors: automattic
Tags: translation-ready, custom-background, theme-options, custom-menu, post-formats, threaded-comments

Requires at least: 4.0
Tested up to: 4.3.1
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A starter theme called MSpringer, or underscores.

== Description ==

Hi. I'm a starter theme called MSpringer, or underscores, if you like. I'm a theme meant for hacking so don't use me as a Parent Theme. Instead try turning me into the next, most awesome, WordPress theme out there. That's what I'm here for.

== Installation ==
	
1. In your admin panel, go to Appearance > Themes and click the Add New button.
2. Click Upload and Choose File, then select the theme's .zip file. Click Install Now.
3. Click Activate to use your new theme right away.

== Frequently Asked Questions ==

= Does this theme support any plugins? =

MSpringer includes support for Infinite Scroll in Jetpack.

== Changelog ==

= 1.0 - May 12 2015 =
* Initial release

== Credits ==

* Based on Underscores http://underscores.me/, (C) 2012-2015 Automattic, Inc., [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html)
* normalize.css http://necolas.github.io/normalize.css/, (C) 2012-2015 Nicolas Gallagher and Jonathan Neal, [MIT](http://opensource.org/licenses/MIT)


Structure is fairly straight forward:

The development files are seperated into a subdirectory, which
includes sass and gulp for easier and more structured style development
as well as our js and css libraries, which all get compiled into every
page. If we want to keep specific .js files out of every page we will
need to keep them in the js directory and not the Dev/js directory.


To set up Gulp:

	1. Install Node.js
		- https://nodejs.org/en/download/
		- no tricks here, download and install in defualt directory

	2. Make sure npm is in the system path
		- open a terminal (mac) or powershell as admin (windows) and enter "npm -v"
		  If you get an error it's not in the path correctly and will have to
		  be added manually.

	3. Install Gulp globally
		- On a mac run the command "sudo npm install -g gulp"
		- On a PC (MAKE SURE YOU ARE RUNNING POWERSHELL AS AN ADMIN!!!)
		  run the command "npm install -g gulp"

	4. Clone the repository
		- On a PC, open the git bash
		- On a mac your terminal will work just fine
		- cd to wherever you wish to put the repository
		- enter the command "git clone https://github.com/Sw33tT00th/MSpringer.git"
		  This will create a subdirectory called "MSpringer" which is the repository

	5. Install Gulp and it's dependencies
		- if you are on a PC, return the the ADMIN powershell window
		- cd into the git repo "cd whatever/path/you/chose/MSpringer/"
		- cd into the Dev directory "cd Dev"
		- On a mac, run "sudo npm install"
		- On a PC, run the following:
			"npm install gulp"
		  	"npm install gulp-autoprefixer"
		  	"npm install gulp-imagemin"
		  	"npm install gulp-livereload"
		  	"npm install gulp-sass"
		  	"npm install gulp-sourcemaps"
		  	"npm install gulp-uglifyjs"
		  	"npm install imagemin-pngquant"


Editing:

	- cd to the MSpringer/Dev directory
	- run the command "gulp watch"
	- One can make changes to the css by modifying the .scss files in the sass directory,
	  these changes will be reflected in the css file after being processed by gulp
	- the js will update after changes are made to any file in the lib directory

	- If you have gulp watch running and nothing is actually happening in the terminal when
	  you update a file that means gulp watch isn't working. If that is the case, when you
	  update the files you also need to type in "gulp sass" to update the css or "gulp uglify"
	  to update the js.