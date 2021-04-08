
  <!-- Boostrap navigation bar -->
  <nav class="navbar navbar-expand-md bg-light navbar-light">
    <!-- Brand -->
    <a class="navbar-brand" href="#">Moviefy</a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <!-- margin keeps login and search on right -->
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Genre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
      </ul>
      <!-- Toggle dark mode -->
      <button id="buttonToggleColors" class="btn btn-primary">Dark Mode</button>
      <!-- Search bar -->
      <form class="form-inline">
        <input class="form-control " type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">Search</button>
      </form>
      <!-- sign in button -->
      <a href="signIn.php"> <button class="btn btn-outline-success" type="submit">Login</button> </a>
    </div>
  </nav>