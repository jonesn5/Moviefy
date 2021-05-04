<?php
  //Checks if user is logged in
  session_start();

  if (!isset($_SESSION['username'])) {
    header('location: Functions/login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: Functions/login.php");
  }
?>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Icon library for rating system from W3Schools-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- External CSS -->
  <link rel="stylesheet" href="style.css">

  <title>Moviefy</title>
  <!-- Website favicon -->
  <link rel="shortcut icon" href="Images/moviefyIcon.png">

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

</head>

<body>

  <!-- Boostrap navigation bar -->
<nav class="navbar navbar-expand-md bg-light navbar-light">
  <!-- Brand -->
  <a class="navbar-brand" href="index.php">Moviefy</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <!-- margin keeps login and search on right -->
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="genre.php">Genre</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="faqs.php">FAQs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Functions/suggest.php">Movie Suggestion</a>
      </li>
      <li class="nav-item">
        <!-- Search bar -->
        <form class="form-inline" method="post" action="Functions/search.php">
          <input class="form-control " type="text" name="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary" type="submit" >Search</button>
        </form>
      </li>
    </ul>

   
    
    <!-- sign in button -->
    <a href="index.php?logout='1'"> <button class="btn btn-outline-success" type="submit">Logout</button> </a>
    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
      <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    <?php endif ?>
    <!-- User is admin -->
    <?php  if ($logged_in_user['Admin']): ?>
      <p>&nbsp;&nbsp;Admin</p>
    <?php endif ?>
  </div>
</nav>
    
</div>

  <!-- Boostrap album filled with cards -->
  <div class="album py-5 bg-white">
    <div class="container">

      <!-- First row movies -->
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 box-shadow border-primary">
            <img class="card-img-top"
              data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
              alt="Thumbnail [100%x225]" style="height: 440px; width: 100%; display: block;"
              src="https://lumiere-a.akamaihd.net/v1/images/p_blackwidow_19075_0fd5159b.jpeg?region=0%2C0%2C540%2C810"
              data-holder-rendered="true">
            <div class="card-body">
              <p class="card-text" name="test">In Marvel Studios’ action-packed spy thriller “Black Widow,” Natasha
                Romanoff aka Black Widow confronts the darker parts of her ledger when a dangerous conspiracy with ties
                to her past arises. Pursued by a force that will stop at nothing to bring her down, Natasha must deal
                with her history as a spy and the broken relationships left in her wake long before she became an
                Avenger.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <!-- Link to movie -->
                  <a href="Movies/blackwidow-2020.php"><button type="button"
                      class="btn btn-sm btn-outline-secondary">View</button> </a>
                </div>
                <div class="rating">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                </div>
                <small class="text-muted">2h 13m</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow border-primary">
            <img class="card-img-top"
              data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
              alt="Thumbnail [100%x225]"
              src="https://m.media-amazon.com/images/M/MV5BMWYwMWQxMmUtNjU3MS00NjIwLTllYWMtNzcxYzRkMWYyYTkwXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_.jpg"
              data-holder-rendered="true" style="height: 440px; width: 100%; display: block;">
            <div class="card-body">
              <p class="card-text">A three-person crew on a mission to Mars faces an impossible choice when an unplanned passenger jeopardizes the lives of everyone on board.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <!-- Link to movie -->
                  <a href="Movies/stowaway-2021.php"><button type="button"
                      class="btn btn-sm btn-outline-secondary">View</button> </a>
                </div>
                <div class="rating">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                </div>
                <small class="text-muted">1h 56m</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow border-primary">
            <img class="card-img-top"
              data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
              alt="Thumbnail [100%x225]"
              src="https://m.media-amazon.com/images/M/MV5BYjRjYzAxYjAtMTQ0NC00YmJkLTk3MTctNDQ5OTQ4NWM4ZGEwXkEyXkFqcGdeQXVyMjM4NTM5NDY@._V1_.jpg"
              data-holder-rendered="true" style="height: 440px; width: 100%; display: block;">
            <div class="card-body">
              <p class="card-text">An artist relocates to the Hudson Valley and begins to suspect that her marriage has a sinister darkness, one that rivals her new home's history.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <!-- Link to movie -->
                  <a href="Movies/thingsheardandseen-2021.php"><button type="button"
                      class="btn btn-sm btn-outline-secondary">View</button> </a>
                </div>
                <div class="rating">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                </div>
                <small class="text-muted">2h 1m</small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Second row of movies -->
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 box-shadow border-primary">
            <img class="card-img-top"
              data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
              alt="Thumbnail [100%x225]" style="height: 440px; width: 100%; display: block;"
              src="https://m.media-amazon.com/images/M/MV5BM2Y5ZWE2MTMtODE3ZC00NWQ4LWJkNzctNGY4Njg5NDY5MzNlXkEyXkFqcGdeQXVyNjUxMjc1OTM@._V1_.jpg"
              data-holder-rendered="true">
            <div class="card-body">
              <p class="card-text" name="test">Friends hiking the Appalachian Trail are confronted by 'The Foundation', a community of people who have lived in the mountains for hundreds of years.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <!-- Link to movie -->
                  <a href="Movies/wrongturn-2021.php"><button type="button"
                      class="btn btn-sm btn-outline-secondary">View</button> </a>
                </div>
                <div class="rating">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                </div>
                <small class="text-muted">1h 49m</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow border-primary">
            <img class="card-img-top"
              data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
              alt="Thumbnail [100%x225]"
              src="https://m.media-amazon.com/images/M/MV5BY2ZlNWIxODMtN2YwZi00ZjNmLWIyN2UtZTFkYmZkNDQyNTAyXkEyXkFqcGdeQXVyODkzNTgxMDg@._V1_.jpg"
              data-holder-rendered="true" style="height: 440px; width: 100%; display: block;">
            <div class="card-body">
              <p class="card-text">MMA fighter Cole Young seeks out Earth's greatest champions in order to stand against the enemies of Outworld in a high stakes battle for the universe.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <!-- Link to movie -->
                  <a href="Movies/mortalkombat-2021.php"><button type="button"
                      class="btn btn-sm btn-outline-secondary">View</button> </a>
                </div>
                <div class="rating">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                </div>
                <small class="text-muted">1h 50m</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow border-primary">
            <img class="card-img-top"
              data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
              alt="Thumbnail [100%x225]"
              src="https://m.media-amazon.com/images/M/MV5BMDNkODA5ZGQtODczOS00OTQxLThhMTItMjk0ZmNhMDM0YjNmXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_.jpg"
              data-holder-rendered="true" style="height: 440px; width: 100%; display: block;">
            <div class="card-body">
              <p class="card-text">A physician who can talk to animals embarks on an adventure to find a legendary island with a young apprentice and a crew of strange pets.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <!-- Link to movie -->
                  <a href="Movies/dolittle-2020.php"><button type="button"
                      class="btn btn-sm btn-outline-secondary">View</button> </a>
                </div>
                <div class="rating">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                </div>
                <small class="text-muted">1h 41m</small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Third row of movies -->
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 box-shadow border-primary">
            <img class="card-img-top"
              data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
              alt="Thumbnail [100%x225]" style="height: 440px; width: 100%; display: block;"
              src="https://m.media-amazon.com/images/M/MV5BOTZkMzlkYmItZDAyNy00NmZhLWE3MWItMzQyNDhkYzcwMTFmXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_.jpg"
              data-holder-rendered="true">
            <div class="card-body">
              <p class="card-text" name="test">Cherry drifts from college dropout to army medic in Iraq - anchored only by his true love, Emily. But after returning from the war with PTSD, his life spirals into drugs and crime as he struggles to find his place in the world.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <!-- Link to movie -->
                  <a href="Movies/cherry-2021.php"><button type="button"
                      class="btn btn-sm btn-outline-secondary">View</button> </a>
                </div>
                <div class="rating">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                </div>
                <small class="text-muted">2h 22m</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow border-primary">
            <img class="card-img-top"
              data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
              alt="Thumbnail [100%x225]"
              src="https://m.media-amazon.com/images/M/MV5BYzg0NGM2NjAtNmIxOC00MDJmLTg5ZmYtYzM0MTE4NWE2NzlhXkEyXkFqcGdeQXVyMTA4NjE0NjEy._V1_.jpg"
              data-holder-rendered="true" style="height: 440px; width: 100%; display: block;">
            <div class="card-body">
              <p class="card-text">Armed with only one word, Tenet, and fighting for the survival of the entire world, a Protagonist journeys through a twilight world of international espionage on a mission that will unfold in something beyond real time.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <!-- Link to movie -->
                  <a href="Movies/tenet-2020.php"><button type="button"
                      class="btn btn-sm btn-outline-secondary">View</button> </a>
                </div>
                <div class="rating">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                </div>
                <small class="text-muted">2h 30m</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow border-primary">
            <img class="card-img-top"
              data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
              alt="Thumbnail [100%x225]"
              src="https://i.ytimg.com/vi/EVB21AxR1Hw/movieposter.jpg"
              data-holder-rendered="true" style="height: 440px; width: 100%; display: block;">
            <div class="card-body">
              <p class="card-text">After landing the gig of a lifetime, a New York jazz pianist suddenly finds himself trapped in a strange land between Earth and the afterlife.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <!-- Link to movie -->
                  <a href="Movies/soul-2020.php"><button type="button"
                      class="btn btn-sm btn-outline-secondary">View</button> </a>
                </div>
                <div class="rating">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                </div>
                <small class="text-muted">1h 40m</small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Fourth row of movies -->
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 box-shadow border-primary">
            <img class="card-img-top"
              data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
              alt="Thumbnail [100%x225]" style="height: 440px; width: 100%; display: block;"
              src="https://m.media-amazon.com/images/M/MV5BNjAyOTg1ODAtNDhiNS00OTczLWI1OGYtNTI1ZDg3ZDEwNDg1XkEyXkFqcGdeQXVyMjkwOTAyMDU@._V1_.jpg"
              data-holder-rendered="true">
            <div class="card-body">
              <p class="card-text" name="test">John Clark, a Navy SEAL, goes on a path to avenge his wife's murder only to find himself inside of a larger conspiracy.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <!-- Link to movie -->
                  <a href="Movies/withoutremorse-2021.php"><button type="button"
                      class="btn btn-sm btn-outline-secondary">View</button> </a>
                </div>
                <div class="rating">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                </div>
                <small class="text-muted">1h 49m</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow border-primary">
            <img class="card-img-top"
              data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
              alt="Thumbnail [100%x225]"
              src="https://m.media-amazon.com/images/M/MV5BZTliNWJhM2YtNDc1MC00YTk1LWE2MGYtZmE4M2Y5ODdlNzQzXkEyXkFqcGdeQXVyMzY0MTE3NzU@._V1_.jpg"
              data-holder-rendered="true" style="height: 440px; width: 100%; display: block;">
            <div class="card-body">
              <p class="card-text">A family's serene beach vacation turns to chaos when their doppelgängers appear and begin to terrorize them.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <!-- Link to movie -->
                  <a href="Movies/us-2020.php"><button type="button"
                      class="btn btn-sm btn-outline-secondary">View</button> </a>
                </div>
                <div class="rating">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                </div>
                <small class="text-muted">1h 56m</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow border-primary">
            <img class="card-img-top"
              data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
              alt="Thumbnail [100%x225]"
              src="https://m.media-amazon.com/images/M/MV5BMTdmYjU1NGUtYWQyNi00N2VlLWIzY2UtM2ZlM2M1ODdlNTdhXkEyXkFqcGdeQXVyMDA4NzMyOA@@._V1_.jpg"
              data-holder-rendered="true" style="height: 440px; width: 100%; display: block;">
            <div class="card-body">
              <p class="card-text">Several months after the U.S. entry into World War II, an inexperienced U.S. Navy commander must lead an Allied convoy being stalked by a German submarine wolf pack.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <!-- Link to movie -->
                  <a href="Movies/greyhound-2020.php"><button type="button"
                      class="btn btn-sm btn-outline-secondary">View</button> </a>
                </div>
                <div class="rating">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                </div>
                <small class="text-muted">1h 31m</small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Fifth row of movies -->
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 box-shadow border-primary">
            <img class="card-img-top"
              data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
              alt="Thumbnail [100%x225]" style="height: 440px; width: 100%; display: block;"
              src="https://m.media-amazon.com/images/M/MV5BNTM5YWZiMzQtNDQxZS00ODI0LWJjNTQtZmQ3OWU3Njg4NWYyXkEyXkFqcGdeQXVyNzc4NTU3Njg@._V1_.jpg"
              data-holder-rendered="true">
            <div class="card-body">
              <p class="card-text" name="test">Scooby and the gang face their most challenging mystery ever: a plot to unleash the ghost dog Cerberus upon the world. As they race to stop this dogpocalypse, the gang discovers that Scooby has an epic destiny greater than anyone imagined.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <!-- Link to movie -->
                  <a href="Movies/scoob-2020.php"><button type="button"
                      class="btn btn-sm btn-outline-secondary">View</button> </a>
                </div>
                <div class="rating">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                </div>
                <small class="text-muted">1h 33m</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow border-primary">
            <img class="card-img-top"
              data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
              alt="Thumbnail [100%x225]"
              src="https://m.media-amazon.com/images/M/MV5BYjk0MTgzMmQtZmY2My00NmE5LWExNGUtYjZkNTA3ZDkyMTJiXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_.jpg"
              data-holder-rendered="true" style="height: 440px; width: 100%; display: block;">
            <div class="card-body">
              <p class="card-text">Stuck in a time loop, two wedding guests develop a budding romance while living the same day over and over again.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <!-- Link to movie -->
                  <a href="Movies/palmsprings-2020.php"><button type="button"
                      class="btn btn-sm btn-outline-secondary">View</button> </a>
                </div>
                <div class="rating">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                </div>
                <small class="text-muted">1h 30m</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow border-primary">
            <img class="card-img-top"
              data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
              alt="Thumbnail [100%x225]"
              src="https://m.media-amazon.com/images/M/MV5BOTc3ZjVkYTYtMDZiMC00OTliLWE3OTEtYjY5NTBmNGJjYTBmXkEyXkFqcGdeQXVyNDExMzMxNjE@._V1_.jpg"
              data-holder-rendered="true" style="height: 440px; width: 100%; display: block;">
            <div class="card-body">
              <p class="card-text">A quiet drifter is tricked into a janitorial job at the now condemned Willy's Wonderland. The mundane tasks suddenly become an all-out fight for survival against wave after wave of demonic animatronics. Fists fly, kicks land, titans clash -- and only one side will make it out alive.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <!-- Link to movie -->
                  <a href="Movies/willyswonderland-2021.php"><button type="button"
                      class="btn btn-sm btn-outline-secondary">View</button> </a>
                </div>
                <div class="rating">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                </div>
                <small class="text-muted">1h 28m</small>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

</body>

</html>
