README.TXT

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

	4. Install Gulp and it's dependencies
		- cd into the git repo "cd whatever/path/you/chose/MSpringer/"
		- cd into the Dev directory "cd Dev"
		- On a mac, run "sudo npm install"
		- On a PC, run "npm install"


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