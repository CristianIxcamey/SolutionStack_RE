
<div class="container">
  <nav>
    <div id="Home"><a href="home.php">Review Everything!</a></div>

    <div id="searchBox">
        <form action="./results.php" method="post">
        <!-- input to search movies -->
        <input id='movieSearch' name="title" placeholder="Search" type="text" required>
        <button id="sBtn" type="submit">Search</button>

        </form>
    </div>


    <div id="lisu" *ngIf='loggedin==false'>
      <div id="login"><a href="login.php">Login</a></div>
      <div id="signup"><a href="register.php">Sign Up</a></div>
    </div>
    <div id="profile"><a href="profile.php">Profile</a></div>
  </nav>
</div>