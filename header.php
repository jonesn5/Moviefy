
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
        <!-- Search bar -->
        <form class="form-inline" method="post" action="../Functions/search.php">
          <input class="form-control " type="text" name="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary" type="submit" >Search</button>
        </form>
      </li>
    </ul>

    <!-- Toggle dark mode -->
    <button id="buttonToggleColors" class="btn btn-primary">Dark Mode</button>
    
    <!-- sign in button -->
    <a href="../index.php?logout='1'"> <button class="btn btn-outline-success" type="submit">Logout</button> </a>
    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
      <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    <?php endif ?>
  </div>
</nav>