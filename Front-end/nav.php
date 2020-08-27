<div class="container">
  <nav>
    <div id="Home"><a href="home.php">Review Everything!</a></div>

    <div id="searchBox">
        <form action="../Back-end/search.php" method="post">
        <!-- dropdown to select what you are searching by -->
        <select id="searchBy" name="searchBy">
            <option value="title" >Title</option>
            <option value="actor">Actor</option>
            <option value="genre">Genre</option>
        </select>

        <!-- input to search movies -->
        <input id='movieSearch' name="title" placeholder="Search" type="text" required>
        <button id="sBtn" type="submit">Search</button>
        </form>
    </div>


    <div id="lisu" *ngIf='loggedin==false'>
      <div id="login"><a href="login.php">Login</a></div>
      <div id="signup"><a href="register.php">Sign Up</a></div>
    </div>
    <div id="profile" *ngIf='loggedin==true'><a href="/profile">Profile</a></div>
    <!-- <button (click)='this.firebaseService.signOut()'>Log Out</button> -->
  </nav>
</div>