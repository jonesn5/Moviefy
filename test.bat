echo Installation Process

mkdir 	Moviefy

start 	"" 	https://www.apachefriends.org/xampp-files/8.0.3/xampp-windows-x64-8.0.3-0-VS16-installer.exe

cd 	Moviefy

curl	-o	README.txt	https://raw.githubusercontent.com/jonesn5/Moviefy/Build_Script/README.txt
curl 	-o 	index.php 	https://raw.githubusercontent.com/jonesn5/Moviefy/main/index.php
curl 	-o 	header.php 	https://raw.githubusercontent.com/jonesn5/Moviefy/main/header.php
curl 	-o 	style.css 	https://raw.githubusercontent.com/jonesn5/Moviefy/main/style.css
curl 	-o 	about.php 	https://raw.githubusercontent.com/jonesn5/Moviefy/main/about.php
curl    -o	genre.php	https://raw.githubusercontent.com/jonesn5/Moviefy/main/genre.php
curl	-o	movies.sql	https://raw.githubusercontent.com/jonesn5/Moviefy/main/movies.sql
curl 	-o 	login.php 	https://raw.githubusercontent.com/jonesn5/Moviefy/main/login.php
curl    -o	admin.php	https://raw.githubusercontent.com/jonesn5/Moviefy/main/admin.php
curl 	-o 	delete.php	https://raw.githubusercontent.com/jonesn5/Moviefy/main/delete.php
curl 	-o 	search.php 	https://raw.githubusercontent.com/jonesn5/Moviefy/main/search.php
curl 	-o 	server.php 	https://raw.githubusercontent.com/jonesn5/Moviefy/main/server.php

mkdir	Functions
cd	Functions

curl 	-o 	server.php 	https://raw.githubusercontent.com/jonesn5/Moviefy/main/Functions/server.php
curl	-o	errors.php	https://raw.githubusercontent.com/jonesn5/Moviefy/main/Functions/errors.php
curl 	-o 	register.php 	https://raw.githubusercontent.com/jonesn5/Moviefy/main/Functions/register.php
curl 	-o 	search.php 	https://raw.githubusercontent.com/jonesn5/Moviefy/main/Functions/search.php
curl 	-o 	suggest.php 	https://raw.githubusercontent.com/jonesn5/Moviefy/main/Functions/suggest.php
curl 	-o 	login.php 	https://raw.githubusercontent.com/jonesn5/Moviefy/main/Functions/login.php




cd	..

mkdir	Movies
cd	Movies

curl	-o	blackwidow-2020.php	https://raw.githubusercontent.com/jonesn5/Moviefy/main/Movies/blackwidow-2020.php
curl	-o	dolittle-2020.php	https://raw.githubusercontent.com/jonesn5/Moviefy/main/Movies/dolittle-2020.php
curl	-o	us-2019.php		https://raw.githubusercontent.com/jonesn5/Moviefy/main/Movies/us-2019.php

cd..

start README.txt

echo done




