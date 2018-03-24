<?php include("includes/includedFiles.php");


if(isset($_GET['id'])) {

  $playlistId = $_GET['id'];
}
else {
  header("Location: index.php");
}

$playlist = new Playlist($con, $playlistId);
$owner = new User($con, $playlist->getOwner());


?>

<div class="entityInfo">

  <div class="leftSection">
    <div class="playlistImage">
      <img src="assets/images/icons/icons8-lo-fi_filled.png">
    </div>
  </div>

  <div class="rightSection">
    <h2><?php echo $playlist->getName(); ?></h2>
    <p>Playlist created by: <?php echo $playlist->getOwner(); ?></p>
    <p><?php echo $playlist->getNumberOfSongs(); ?> songs</p>
    <button class="button" onclick="deletePlaylist('<?php echo $playlistId; ?>')">Delete Playlist</button>
  </div>
</div>


<div class="trackListContainer">
  <ul class="tracklist">
    <?php 
      $songIdArray = $playlist->getSongIds();

      $i = 1;
      foreach($songIdArray as $songId) {
        
        $playlistSong = new Song($con, $songId);

        $songArtist = $playlistSong->getArtist();

        echo "<li class='tracklistRow'>
        <div class='trackCount'>
        <img class='play' src='assets/images/icons/icons8-play_button_circled.png' onclick='setTrack(\"" . $playlistSong->getId() . "\", tempPlaylist, true)'>
        <span class='trackNumber'>$i</span>
        </div>

        <div class='trackInfo'>
          <span class='trackName'>" . $playlistSong->getTitle() . "</span>
          <span class='artistName'>" . $songArtist->getName() . "</span>
        </div>

        <div class='trackOptions'>
          <img class='optionsButton' src='assets/images/icons/more.png'>
        </div>
        <div class='trackDuration'>
          <span class='duration'>" . $playlistSong ->getDuration() . "</span>
        </div>

        </li>";
        $i = $i + 1;


      }
    ?>

    <script>
      var tempSongIds = '<?php echo json_encode($songIdArray); ?>';
      tempPlaylist = JSON.parse(tempSongIds);


    </script>



  </ul>
</div>



