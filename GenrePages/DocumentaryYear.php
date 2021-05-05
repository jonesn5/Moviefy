<?php
   $db = mysqli_connect('localhost', 'root', '', 'database1');
?>

<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="style.css">

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
        .center {
            text-align:  center
	}
	.boxed {
	  border: 1px black;
	}
    </style>

</head>

<body>


<!-- Boostrap navigation bar -->
<nav class="navbar navbar-expand-md bg-light navbar-light">
  <!-- Brand -->
  <a class="navbar-brand" href="../index.php">Moviefy</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <!-- margin keeps login and search on right -->
      <li class="nav-item">
        <a class="nav-link" href="../index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../genre.php">Genre</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../faqs.php">FAQs</a>
      </li>
      <li class="nav-item">
        <!-- Search bar -->
        <form class="form-inline" method="post" action="../Functions/search.php">
          <input class="form-control " type="text" name="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary" type="submit" >Search</button>
        </form>
      </li>
    </ul>
    
    <!-- sign in button -->
    <a href="../index.php?logout='1'"> <button class="btn btn-outline-success" type="submit">Logout</button> </a>
    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
      <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    <?php endif ?>
  </div>
</nav>
  
  <p class="center" style="font-size:60px"> Documentary </p>	
	<div align="center">
	   <h1 font-size="40px"> Sort by: </h1>
       		  <form action="DocumentaryRating.php">
    			<input type="submit" value="Rating" />
		 </form>

      		 <form action="DocumentaryRuntime.php">
    			<input type="submit" value="Runtime" />
		 </form>

     		    <form action="DocumentaryYear.php">
    			<input type="submit" value="Year" />
		 </form>
	</div>

<?php
  $query = "SELECT * FROM movies WHERE genre='Documentary' ORDER BY year DESC";
  mysqli_query($db , $query) or die('Error querying database.');
  $result = $db->query($query);


	while($row = mysqli_fetch_array($result)) {
		?>
		<div class="card mb-4 box-shadow border-primary">
		<img src="./Images/<?php echo $row['image'] ?>" style="width:250px;height:350px;" align="left"/>
		<?php echo $row['description'] . "<br>" . $row['director'] . " " . $row['Runtime'] . " min Release Year: " . $row['year'] . " Stars out of 5: " . $row['rating'] . "<br>";
		?> <a href="../Movies/<?php echo $row['pageID'] ?>.php"><button type"button"
			class="btn btn-sm btn-outline-secondary">View</button> </a>
		</div> <?php
	}
?>

</body>