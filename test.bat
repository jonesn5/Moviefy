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
curl	-o	faqs.php	https://raw.githubusercontent.com/jonesn5/Moviefy/main/faqs.php

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
curl	-o	cherry-2021.php		https://raw.githubusercontent.com/jonesn5/Moviefy/main/Movies/cherry-2021.php
curl	-o	greyhound-2020.php	https://raw.githubusercontent.com/jonesn5/Moviefy/main/Movies/greyhound-2020.php
curl	-o	mortalkombat-2021.php	https://raw.githubusercontent.com/jonesn5/Moviefy/main/Movies/mortalkombat-2021.php
curl	-o	palmsprings-2020.php	https://raw.githubusercontent.com/jonesn5/Moviefy/main/Movies/palmsprings-2020.php
curl	-o	scoob-2020.php		https://raw.githubusercontent.com/jonesn5/Moviefy/main/Movies/scoob-2020.php
curl	-o	soul-2020.php		https://raw.githubusercontent.com/jonesn5/Moviefy/main/Movies/soul-2020.php
curl	-o	stowaway-2021.php	https://raw.githubusercontent.com/jonesn5/Moviefy/main/Movies/stowaway-2021.php
curl	-o	tenet-2020.php		https://raw.githubusercontent.com/jonesn5/Moviefy/main/Movies/tenet-2020.php
curl	-o	thingsheardandseen-2021.php	https://raw.githubusercontent.com/jonesn5/Moviefy/main/Movies/thingsheardandseen-2021.php
curl	-o	willyswonderland-2021.php	https://raw.githubusercontent.com/jonesn5/Moviefy/main/Movies/willyswonderland-2021.php
curl	-o	withoutremorse-2021.php	https://raw.githubusercontent.com/jonesn5/Moviefy/main/Movies/withoutremorse-2021.php
curl	-o	wrongturn-2021.php	https://raw.githubusercontent.com/jonesn5/Moviefy/main/Movies/wrongturn-2021.php

cd..

mkdir	GenrePages
cd	GenrePages

curl	-o	Action.php		https://raw.githubusercontent.com/jonesn5/Moviefy/main/GenrePages/Action.php
curl	-o	ActionRating.php	https://raw.githubusercontent.com/jonesn5/Moviefy/main/GenrePages/ActionRating.php
curl	-o	ActionRuntime.php	https://raw.githubusercontent.com/jonesn5/Moviefy/main/GenrePages/ActionRuntime.php
curl	-o	ActionYear.php		https://raw.githubusercontent.com/jonesn5/Moviefy/main/GenrePages/ActionYear.php
curl	-o	Children.php		https://raw.githubusercontent.com/jonesn5/Moviefy/main/GenrePages/Children.php
curl	-o	ChildrenRating.php	https://raw.githubusercontent.com/jonesn5/Moviefy/main/GenrePages/ChildrenRating.php
curl	-o	ChildrenRuntime.php	https://raw.githubusercontent.com/jonesn5/Moviefy/main/GenrePages/ChildrenRuntime.php
curl	-o	ChildrenYear.php	https://raw.githubusercontent.com/jonesn5/Moviefy/main/GenrePages/ChildrenYear.php
curl	-o	Comedy.php		https://raw.githubusercontent.com/jonesn5/Moviefy/main/GenrePages/Comedy.php
curl	-o	ComedyRating.php	https://raw.githubusercontent.com/jonesn5/Moviefy/main/GenrePages/ComedyRating.php
curl	-o	ComedyRuntime.php	https://raw.githubusercontent.com/jonesn5/Moviefy/main/GenrePages/ComedyRuntime.php
curl	-o	ComedyYear.php		https://raw.githubusercontent.com/jonesn5/Moviefy/main/GenrePages/ComedyYear.php
curl	-o	Documentary.php		https://raw.githubusercontent.com/jonesn5/Moviefy/main/GenrePages/Documentary.php
curl	-o	DocumentaryRating.php	https://raw.githubusercontent.com/jonesn5/Moviefy/main/GenrePages/DocumentaryRating.php
curl	-o	DocumentaryRuntime.php	https://raw.githubusercontent.com/jonesn5/Moviefy/main/GenrePages/DocumentaryRuntime.php

curl	-o	DocumentaryYear.php	https://raw.githubusercontent.com/jonesn5/Moviefy/main/GenrePages/DocumentaryYear.php
curl	-o	Drama.php		https://raw.githubusercontent.com/jonesn5/Moviefy/main/GenrePages/Drama.php
curl	-o	DramaRating.php		https://raw.githubusercontent.com/jonesn5/Moviefy/main/GenrePages/DramaRating.php
curl	-o	DramaRuntime.php	https://raw.githubusercontent.com/jonesn5/Moviefy/main/GenrePages/DramaRuntime.php
curl	-o	DramaYear.php		https://raw.githubusercontent.com/jonesn5/Moviefy/main/GenrePages/DramaYear.php
curl	-o	Horror.php		https://raw.githubusercontent.com/jonesn5/Moviefy/main/GenrePages/Horror.php
curl	-o	HorrorRating.php	https://raw.githubusercontent.com/jonesn5/Moviefy/main/GenrePages/HorrorRating.php
curl	-o	HorrorRuntime.php	https://raw.githubusercontent.com/jonesn5/Moviefy/main/GenrePages/HorrorRuntime.php
curl	-o	HorrorYear.php		https://raw.githubusercontent.com/jonesn5/Moviefy/main/GenrePages/HorrorYear.php
curl	-o	Romance.php		https://raw.githubusercontent.com/jonesn5/Moviefy/main/GenrePages/Romance.php
curl	-o	RomanceRating.php	https://raw.githubusercontent.com/jonesn5/Moviefy/main/GenrePages/RomanceRating.php
curl	-o	RomanceRuntime.php	https://raw.githubusercontent.com/jonesn5/Moviefy/main/GenrePages/RomanceRuntime.php
curl	-o	RomanceYear.php		https://raw.githubusercontent.com/jonesn5/Moviefy/main/GenrePages/RomanceYear.php
curl	-o	Sci-Fi.php		https://raw.githubusercontent.com/jonesn5/Moviefy/main/GenrePages/Sci-Fi.php
curl	-o	Sci-FiRating.php	https://raw.githubusercontent.com/jonesn5/Moviefy/main/GenrePages/Sci-FiRating.php

curl	-o	Sci-FiRuntime.php	https://raw.githubusercontent.com/jonesn5/Moviefy/main/GenrePages/Sci-FiRuntime.php
curl	-o	Sci-FiYear.php		https://raw.githubusercontent.com/jonesn5/Moviefy/main/GenrePages/Sci-FiYear.php

cd..

start README.txt

echo done





