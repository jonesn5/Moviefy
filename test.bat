
echo Installation Process

mkdir 	Moviefy

start 	"" 	https://www.apachefriends.org/xampp-files/8.0.3/xampp-windows-x64-8.0.3-0-VS16-installer.exe

cd 	Moviefy

curl  -o  README.md  https://raw.githubusercontent.com/jonesn5/Moviefy/main/README.md
curl 	-o 	index.php 	https://raw.githubusercontent.com/jonesn5/Moviefy/main/index.php
curl 	-o 	header.php 	https://raw.githubusercontent.com/jonesn5/Moviefy/main/header.php
curl 	-o 	login.php 	https://raw.githubusercontent.com/jonesn5/Moviefy/main/login.php
curl 	-o 	style.css 	https://raw.githubusercontent.com/jonesn5/Moviefy/main/style.css
curl 	-o 	about.php 	https://raw.githubusercontent.com/jonesn5/Moviefy/main/about.php
curl 	-o 	register.php 	https://raw.githubusercontent.com/jonesn5/Moviefy/main/register.php
curl 	-o 	search.php 	https://raw.githubusercontent.com/jonesn5/Moviefy/main/search.php
curl 	-o 	server.php 	https://raw.githubusercontent.com/jonesn5/Moviefy/main/server.php
curl  -o  genre.php  https://raw.githubusercontent.com/jonesn5/Moviefy/main/genre.php

start README.md

echo done


