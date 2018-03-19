<?php


// SESSIONS
// include("includes/config.php");


// session_destroy();
//
// if(isset($_SESSION['userLoggedIn'])) {

//   $userLoggedIn = $_SESSION['userLoggedIn'];

// }
// else {
//   header("Location: register.php");
// }

?>


<html>
<head>
  <title>Welcome to Legatofi!</title>
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
  <div id="mainContainer">


    <div id="topContainer">

      <div id="navBarContainer">
        <nav class="navBar">
          <a href="index.php" class="logo">
            <img src="assets/images/icons/icons8-cello.png">
          </a>

          <div class="group">
            <div class="navItem">
              <a href="search.php" class="navItemLink">Search
               <img src="assets/images/icons/icons8-search.png" class="icon" alt="Search"> 
              </a>
            </div>
          </div>
          <div class="group">
            <div class="navItem">
              <a href="browse.php" class="navItemLink">Browse</a>
            </div>
            <div class="navItem">
              <a href="yourMusic.php" class="navItemLink">Your Music</a>
            </div>
            <div class="navItem">
              <a href="profile.php" class="navItemLink">Your Profile</a>
            </div>
          </div>


        </nav>
      </div>

    </div>


    <div id="nowPlayingBarContainer">
    <div id="nowPlayingBar">
      <div id="nowPlayingLeft">
        <div class="content">
          <span class="albumLink">
            <img src="https://i.ytimg.com/vi/rb8Y38eilRM/maxresdefault.jpg" class="albumArtwork"></img>
          </span>
          <div class="trackInfo">
            <span class="trackName">
              <span>When the Saints</span>
            </span>
            <span class="artistName">
              <span>Louie Armstrong</span>
            </span>

          </div>
        </div>
      </div>
      <div id="nowPlayingCenter">

        <div class="content playerControls">

          <div class="buttons">
            <button class="controlButton shuffle" title="Shuffle Button">
              <img src="assets/images/icons/icons8-shuffle.png" alt="Shuffle">
            </button>
            <button class="controlButton rewind" title="Rewind Button">
              <img src="assets/images/icons/icons8-rewind_filled.png" alt="Rewind">
            </button>
            <button class="controlButton play" title="Play Button">
              <img src="assets/images/icons/icons8-play_button_circled.png" alt="Play">
            </button>
            <button class="controlButton pause" title="Pause Button" style="display: none;">
              <img src="assets/images/icons/icons8-circled_pause.png" alt="Pause">
            </button>
            <button class="controlButton next" title="FastForward Button">
              <img src="assets/images/icons/icons8-fast_forward_filled.png" alt="Fast Forward">
            </button>
            <button class="controlButton repeat" title="Repeat Button">
              <img src="assets/images/icons/icons8-process.png" alt="Repeat">
            </button>
          </div>

          <div class="playbackBar">
            <span class="progressTime current">0.00</span>
            <div class="progressBar">
              <div class="progressBg">
                <div class="progress"></div>
              </div>
            </div>
            <span class="progressTime remaining">0.00</span>
          </div>
        </div>
      </div>

      <div id="nowPlayingRight">
        <div class="volumeBar">

          <button class="controlButton volume" title="Volume Button">
            <img src="assets/images/icons/icons8-vox_player_filled.png" alt="Volume">
          </button>

          <div class="progressBar">
            <div class="progressBg">
              <div class="progress">
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
  </div>


  
</body>
</html>