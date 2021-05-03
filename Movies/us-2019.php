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
                <iframe width="560" height="315" src="https://www.youtube.com/embed/hNCmb-4oXJA"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                <p>Us is a 2019 American horror film written and directed by Jordan Peele, starring Lupita Nyong'o,
                    Winston Duke, Elisabeth Moss, and Tim Heidecker. The film follows Adelaide Wilson (Nyong'o) and her
                    family, who are attacked by a group of menacing doppelgängers.

                    The project was announced in February 2018, and much of the cast joined in the following months.
                    Peele produced the film alongside Jason Blum and Sean McKittrick (the trio previously having
                    collaborated on Get Out and BlacKkKlansman), as well as Ian Cooper. Filming took place from July to
                    October 2018 in California, mostly in Los Angeles, Pasadena and Santa Cruz. <em>(Horror)</em></p>
            </div>
            <div class="col-lg-1">
            </div>
            <div class="col-lg-4">
                <img class="card-img-top"
                    data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                    alt="Us Movie Poster"
                    src="https://m.media-amazon.com/images/M/MV5BZTliNWJhM2YtNDc1MC00YTk1LWE2MGYtZmE4M2Y5ODdlNzQzXkEyXkFqcGdeQXVyMzY0MTE3NzU@._V1_.jpg"
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
                        <input type="text" class="form-control" placeholder="Enter comment">
                        <button class="btn btn-outline-success" type="submit">Comment</button>
                    </div>
                    <div class="card p-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="user d-flex flex-row align-items-center"> <span><small
                                        class="font-weight-bold text-primary">Sam Kuhbander</small> <small
                                        class="font-weight-bold">This movie looks scary</small></span> </div> <small>2
                                days ago</small>
                        </div>
                        <div class="action d-flex justify-content-between mt-2 align-items-center">
                            <div class="reply px-4"> <small>Remove</small> <span class="dots"></span>
                                <small>Reply</small> <span class="dots"></span> </div>
                            <div class="icons align-items-center"> <i class="fa fa-star text-warning"></i> <i
                                    class="fa fa-check-circle-o check-icon"></i> </div>
                        </div>
                    </div>
                    <div class="card p-3 mt-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="user d-flex flex-row align-items-center"> <span><small
                                        class="font-weight-bold text-primary">Nick Jones</small> <small
                                        class="font-weight-bold">Can't wait to watch this</small></span> </div> <small>3
                                days ago</small>
                        </div>
                        <div class="action d-flex justify-content-between mt-2 align-items-center">
                            <div class="reply px-4"> <small>Remove</small> <span class="dots"></span>
                                <small>Reply</small> <span class="dots"></span> </div>
                            <div class="icons align-items-center"> <i
                                    class="fa fa-check-circle-o check-icon text-primary"></i> </div>
                        </div>
                    </div>
                    <div class="card p-3 mt-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="user d-flex flex-row align-items-center"> <span><small
                                        class="font-weight-bold text-primary">Sherveen Menon</small> <small
                                        class="font-weight-bold">I love this director </small></span> </div> <small>3
                                days ago</small>
                        </div>
                        <div class="action d-flex justify-content-between mt-2 align-items-center">
                            <div class="reply px-4"> <small>Remove</small> <span class="dots"></span>
                                <small>Reply</small> <span class="dots"></span> </div>
                            <div class="icons align-items-center"> <i class="fa fa-user-plus text-muted"></i> <i
                                    class="fa fa-star-o text-muted"></i> <i
                                    class="fa fa-check-circle-o check-icon text-primary"></i> </div>
                        </div>
                    </div>
                    <div class="card p-3 mt-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="user d-flex flex-row align-items-center"> <span><small
                                        class="font-weight-bold text-primary">Karim Sammouri</small> <small
                                        class="font-weight-bold">This website is cool </small></span> </div> <small>3
                                days ago</small>
                        </div>
                        <div class="action d-flex justify-content-between mt-2 align-items-center">
                            <div class="reply px-4"> <small>Remove</small> <span class="dots"></span>
                                <small>Reply</small> <span class="dots"></span> </div>
                            <div class="icons align-items-center"> <i
                                    class="fa fa-check-circle-o check-icon text-primary"></i> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>
