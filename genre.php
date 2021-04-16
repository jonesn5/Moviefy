<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Moviefy</title>
  <!-- Website favicon -->
  <link rel="shortcut icon" href="Images/moviefyIcon.png"> <!-- Go to root folder before finding img -->
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

  <script>
    //Dark mode 
    $(document).ready(function () {
      $("#buttonToggleColors").click(function () {
        $('.navbar').toggleClass("navbar-light navbar-dark");
        $('.navbar').toggleClass("bg-light bg-dark");
      });/php/project.png
    });
  </script>

    <!-- Internal CSS for page. -->
    <style>
        body {
            padding: 10px;
        }
        .wrapper {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 5fr));
            grid-gap: 5px;
        }
        img {
            width: 100%;
            border-radius: 25px;
        }
        .box {
            padding: 10px;
        }
    </style>

</head>

<body>

  <?php
    include_once 'header.php';
  ?>

<div class="wrapper">
    <div class="box"><a href = ""><img src="Genres/Action.png"></a></div>
    <div class="box"><a href = ""><img src="Genres/Comedy.png"></a></div>
    <div class="box"><a href = ""><img src="Genres/Drama.png"></a></div>
    <div class="box"><a href = ""><img src="Genres/Horror.png"></a></div>
    <div class="box"><a href = ""><img src="Genres/Romance.png"></a></div>
    <div class="box"><a href = ""><img src="Genres/Sci-Fi.png"></a></div>
    <div class="box"><a href = ""><img src="Genres/Children.png"></a></div>
    <div class="box"><a href = ""><img src="Genres/Documentary.png"></a></div>
</div>

</body>

</html>
