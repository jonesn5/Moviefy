<?php include('../Functions/server.php') ?>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Icon library for rating system-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- External CSS -->
  <link rel="stylesheet" href="../style.css">

  <title>Moviefy</title>
  <!-- Website favicon -->
  <link rel="shortcut icon" href="../Images/moviefyIcon.png"> <!-- Go to root folder before finding img --> 
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>

<body>

  <?php
  include_once '../header.php';
  ?>

  <div class="container mt-5 bg-light">
    <div class="row d-flex justify-content-center">
      <div class="col-lg-6">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/QJHY4ggYCk4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <p>MMA fighter Cole Young (Lewis Tan), accustomed to taking a beating for money, is unaware of his heritage-or why Outworld's Emperor Shang Tsung (Chin Han) has sent his best warrior, Sub-Zero (Joe Taslim), an otherworldly Cryomancer, to hunt Cole down. Fearing for his family's safety, Cole goes in search of Sonya Blade (Jessica McNamee) at the direction of Jax (Mehcad Brooks), a Special Forces Major who bears the same strange dragon marking Cole was born with. Soon, he finds himself at the temple of Lord Raiden (Tadanobu Asano), an Elder God and the protector of Earthrealm, who grants sanctuary to those who bear the mark. Here, Cole trains with experienced warriors Liu Kang (Ludi Lin), Kung Lao (Max Huang) and rogue mercenary Kano (Josh Lawson), as he prepares to stand with Earth's greatest champions against the enemies of Outworld in a high stakes battle for the universe. But will Cole be pushed hard enough to unlock his arcana-the immense power from within his soul-in time to save not... ("Mortal Kombat")<br>Genre: Action</p>
      </div>
      <div class="col-lg-1">
      </div>
      <div class="col-lg-4">
        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Mortal Kombat movie poster" src="https://m.media-amazon.com/images/M/MV5BY2ZlNWIxODMtN2YwZi00ZjNmLWIyN2UtZTFkYmZkNDQyNTAyXkEyXkFqcGdeQXVyODkzNTgxMDg@._V1_.jpg" data-holder-rendered="true" style="height: 420px; width: 100%; display: block;">
      </div>
    </div>
  </div>

  <div class="ratingSystem">
    <span class="heading">User Rating</span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star"></span>
    <span class="fa fa-star"></span>
    <p>4.1 average based on 254 reviews.</p>
    <hr style="border:3px solid #f1f1f1">

    <?php

    if (isset($_POST['rating'])) {
      $sql = "SELECT AVG(rating) FROM ratings WHERE pageID = 'mortalkombat-2021';";
      $result = $db->query($sql);
      if ($result->num_rows > 0){
        while($row = $result->fetch_assoc() ){
         echo "<p> The average user rating from Moviefy " . $row['AVG(rating)'] . "</p>";
       }
     }
   }

   ?>

   <!-- Rating System-->
   <p>Select a rating:</p>

   <form class="form-inline" method="post" action="mortalkombat-2021.php">
    <input type="hidden" name="pageID" value="mortalkombat-2021">
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="rating" id="inlineRadio1" value="1">
      <label class="form-check-label" for="inlineRadio1">1</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="rating" id="inlineRadio2" value="2">
      <label class="form-check-label" for="inlineRadio2">2</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="rating" id="inlineRadio3" value="3">
      <label class="form-check-label" for="inlineRadio3">3</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="rating" id="inlineRadio3" value="4">
      <label class="form-check-label" for="inlineRadio3">4</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="rating" id="inlineRadio3" value="5">
      <label class="form-check-label" for="inlineRadio3">5</label>
    </div>
    <button class="btn btn-outline-secondary" type="submit">Rate</button>
  </form>

  <div class="container mt-5">
    <div class="row d-flex justify-content-center">
      <div class="col-md-8">
        <div class="headings d-flex justify-content-between align-items-center mb-3">
          <form class="form-inline" method="post" action="mortalkombat-2021.php">
            <input type="text" class="form-control" placeholder="Enter comment" name="comment">
            <input type="hidden" name="pageID" value="mortalkombat-2021">
            <button class="btn btn-outline-success" type="submit">Comment</button>
          </form>
        </div>
        <div>
          <?php
                        //Movie comment

          function getComments() {
            $db = mysqli_connect('localhost', 'root', '', 'database1');
            $sql = "SELECT * FROM comments WHERE pageID = 'mortalkombat-2021';";
            $result = mysqli_query($db, $sql);
            if(mysqli_num_rows($result) > 0){
              while($row = mysqli_fetch_assoc($result)) {

                ?>
                <div class="card">
                    <div class="card-body">
                      <?php echo "<p class='comments'>" . $row['comment_user'] . " <br>  " . $row['comment'] . "</p><br>"; 
                      if(isAdmin()){
                        $commentID = $row['comment'];
                        ?>
                        <form action="" id="$row['comment']" method="post">
                          <input class="btn btn-outline-primary" type="submit" name="delete" value="Delete"/>
                          <?php echo "<input type='hidden' name='pageID' value='$commentID'>"
                          ?>
                        </form>
                        <?php 
                        if (isset($_POST['delete'])) {
                          $sql = "DELETE FROM comments WHERE pageID = 'mortalkombat-2021' AND comment = '" . $_POST['pageID'] . "'";
                          $result = $db->query($sql);
                          echo "<p>The comment has been delete successful </p>";
                        }
                      }
                      ?>
                    </div>
                  </div>
                  <?php
                }
              }
            }
            getComments();

                    //Movie Comment 
            if (isset($_POST['comment'])) {

              $comment = $_POST['comment'];
              $pageID = $_POST['pageID'];
              $username = $_SESSION['username'];

              $sql = "INSERT INTO comments VALUES ('$username','$pageID','$comment');"; 
              $result = mysqli_query($db, $sql);
              echo "<p> Comment added: $comment</p>"
              ?>
            </div>
            <?php
          }
          ?>
          </div>
        </div>
      </div>



    </div>

  </body>
  </html>