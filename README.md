# Moviefy
CSE201 Project repository
# Description 
This is the course group project of group 20 for CSE 201. Group members include: Karim Sammorui, Nick Jones, Ryan Winters, Sam Kuhbander, and Sherveen Menon. Our project is Moviefy.
A product that lets you search for movies and find what you'll be watching next. Moviefy has a filterable list of movies that you can use to find new things to watch, it also has a rating 
and a comments section that allows the community to provide feedback. 
# Prerequisities 
The only prerequisite is a connection to the internet, as this will be running on the web.
# Installation
To install the necessary files to run the program you need to run the build script, which for now is titled "test.bat". This script creates two directories (or folders) called Moviefy and XAMPP 
in the directory where it is run. The Moviefy directory is where all the pages for the website are stored and the XAMPP directory holds the server. When you run the script a browser window will 
open and automatically download an exe file called "xampp-windows-x64-8.0.3-0-VS16-installer.exe". This file is the setup for the server that the project runs on. 
Run the installer and install the files into the XAMPP directory that was created. ~ When running the installer.exe, you only need to specify which directory you would like to install XAMPP 
in (everything else you can hit NEXT) Move the Moviefy directory into the htdocs directory (Which is located within the XAMPP folder) Next run "xampp-control.exe" program which will open up the 
server control pannel. From there you need to start the Apache (1st option) server and the MySQL (2nd option) server. Then open your browser of choice and navigate to http://localhost/phpmyadmin 
Go to databases and type in movies into the area that says: Database name. Then go to import and search for the file called movies.sql inside the Moviefy folder and click go. 
This step adds the database tables and a few values to fill in Then navigate to http://localhost/Moviefy/index.php This will take you to the login page.
