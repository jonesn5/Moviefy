# Moviefy
CSE201 Project repository

# Description 
This is the course group project of group 20 for CSE 201. Group members include: Karim Sammorui, Nick Jones, Ryan Winters, Sam Kuhbander, and Sherveen Menon. Our project is Moviefy.
A product that lets you search for movies and find what you'll be watching next. Moviefy has a filterable list of movies that you can use to find new things to watch, it also has a rating 
and a comments section that allows the community to provide feedback. 

# Prerequisities 
The only prerequisite is a connection to the internet, as this will be running on the web.

# Installation
To install the necessary files to run the program you need to run the build script, which for now is titled "test.bat". 
This script creates  two directories (or folders) called Moviefy and XAMPP in the directory where it is run.
The Moviefy directory is where all the pages for the website are stored and the XAMPP directory holds the server.
When you run the script a browser window will open and automatically download an exe file called "xampp-windows-x64-8.0.3-0-VS16-installer.exe". 
This file is the setup for the server that the project runs on. Run the installer and install the files into the XAMPP directory that was created. 
  ~ When running the installer.exe, you only need to specify which directory you would like to install XAMPP in (everything else you can hit NEXT)
Move the Moviefy directory into the htdocs directory (Which is located within the XAMPP folder)
Next run "xampp-control.exe" program which will open up the server control pannel. From there you need to start the Apache (1st option) server and the MySQL (2nd option) server.
Then open your browser of choice and navigate to http://localhost/phpmyadmin
Go to databases and type in database1 into the area that says: Database name. Then go to import and search for the file called database1.sql inside the Moviefy folder and click go.
  ~ This step adds the database tables and a few values to fill in
Then navigate to http://localhost/Moviefy/index.php 
This will take you to the login page. 

# Using the application
If using this application on your local device the first thing you will want to do is to follow the installation guide for the buildscript, whicih located above. If you are using this application on the web or have already ran throught the build script then you can continue on with the user guide. 
## Signing in
The first thing you will want to do is register an account. You can do this by hitting the blue sign up button on the bottom of the sign up prompt. You will then be prompted to enter a username, email, and password (with confirmation). You can then hit register (the blue button on the bottom of the prompt) and your registration will be complete. You can now sign in to your account. 
## Home page
The home page has a collection of movies with pictures of their posters and the rating system. You can scroll through the home page and find the movie you are looking for. Clicking on the view button will take you into the movie page. 
## Movie page
The movie page has a description of the movie, a trailer of the movie, and the user ratings of both the web and moviefy. At the bottom of the movie page there is a select a rating prompt where you can select a rating for the movie if you would like to. You can also leave comments. Leaving comments requires you to log into the website and then you can type your comments out.
## Searching for movies
If you would like to search for movies then you can do so by using the search bar on the top of the screen.
## Genre 
The genre tab will give you a list of genres, you can choose a genre to have the database sort by genre.
## About 
The about page has information about the website.
## FAQs
The FAQ page contains frequently asked questions so you can get answers quickly.
## Movie Suggestion
This tab lets you suggest movies to admins. The admins can then go accept a movie and pull it into the database. 
## Logging out
When you are done using Moviefy you will want to logout of the platform. In order to do that you need to hit the logout button in the top right of the screen.
