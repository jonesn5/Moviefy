<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Icon library for rating system-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- External CSS -->
  <link rel="stylesheet" href="../style.css">

  <title>Moviefy</title>
  <!-- Website favicon -->
  <link rel="shortcut icon" href="../Images/moviefyIcon.png"> <!-- Go to root folder before finding img -->
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

  <?php
    include_once '../header.php';
  ?>

  <div class="container mt-5 bg-light">
    <div class="row d-flex justify-content-center">
      <div class="col-lg-6">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/ybji16u608U" title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen></iframe>
        <p>At birth the Black Widow (aka Natasha Romanova) is given to the KGB, which grooms her to become its ultimate
          operative. When the U.S.S.R. breaks up, the government tries to kill her as the action moves to present-day
          New York, where she is a freelance operative. <br> Development of a Black Widow film began in April 2004 by
          Lionsgate, with David Hayter attached to write and direct. The project did not move forward and the film
          rights to the character reverted to Marvel Studios by June 2006. Johansson was cast in the role for several
          MCU films beginning with Iron Man 2 (2010). Marvel and Johansson expressed interest in a solo film several
          times over the following years, before Schaeffer and Shortland were hired in 2018. Benson and Pearson were
          added later. Filming took place from May to October, in Norway, Budapest, Morocco, Pinewood Studios in the
          United Kingdom, and in Atlanta and Macon, Georgia. <em> (Action)</em></p>
      </div>
      <div class="col-lg-1">
      </div>
      <div class="col-lg-4">
        <img class="card-img-top"
          data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
          alt="Black Widow movie poster"
          src="https://images-na.ssl-images-amazon.com/images/I/61Fm%2BN%2BNncL._AC_SY679_.jpg"
          data-holder-rendered="true" style="height: 420px; width: 100%; display: block;">
      </div>
    </div>

  </div>

  <div class="ratingSystem">
    <span class="heading">User Rating</span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star"></span>
    <p>4.1 average based on 254 reviews.</p>
    <hr style="border:3px solid #f1f1f1">

    <div class="row">
      <div class="side">
        <div>5 star</div>
      </div>
      <div class="middle">
        <div class="bar-container">
          <div class="bar-5"></div>
        </div>
      </div>
      <div class="side right">
        <div>150</div>
      </div>
      <div class="side">
        <div>4 star</div>
      </div>
      <div class="middle">
        <div class="bar-container">
          <div class="bar-4"></div>
        </div>
      </div>
      <div class="side right">
        <div>63</div>
      </div>
      <div class="side">
        <div>3 star</div>
      </div>
      <div class="middle">
        <div class="bar-container">
          <div class="bar-3"></div>
        </div>
      </div>
      <div class="side right">
        <div>15</div>
      </div>
      <div class="side">
        <div>2 star</div>
      </div>
      <div class="middle">
        <div class="bar-container">
          <div class="bar-2"></div>
        </div>
      </div>
      <div class="side right">
        <div>6</div>
      </div>
      <div class="side">
        <div>1 star</div>
      </div>
      <div class="middle">
        <div class="bar-container">
          <div class="bar-1"></div>
        </div>
      </div>
      <div class="side right">
        <div>20</div>
      </div>
    </div>

    <div class="container mt-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="headings d-flex justify-content-between align-items-center mb-3">
                        <form class="form-inline" method="post" action="us-2019.php">
                            <input type="text" class="form-control" placeholder="Enter comment" name="comment">
                            <button class="btn btn-outline-success" type="submit">Comment</button>
                        </form>
                    </div>
                    <div>
                        <?php
                        //Movie comment
                        function getComments() {
                            $db = mysqli_connect('localhost', 'root', '', 'database1');
                            $sql = "SELECT * FROM comments WHERE pageID = 'blackwidow-2020';";
                            $result = mysqli_query($db, $sql);
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_assoc($result)) {

                                    ?>
                                    <div class="card">
                                      <div class="card-body">
                                        <?php echo $row['comment_user'] . " <br>  " . $row['comment']; ?>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                    }
                    getComments();
                    ?>
                </div>
            </div>
        </div>

    
    </div>

</body>

</html>
