<?php  
  include 'header.php';
?>

  <form action="search.php" method ="POST">
      <input type = "text" name="search" placeholder="Search">
      <button type ="submit" name = "submit-search">Search</button>
  </form>
  <h1>Front Page</h1>
  <h2>All Videos:</h2>
  <div class="video-container">
    <?php
     /* $sql = "select * from videos";
      $result = mysqli_query($conn, $sql);
      $queryresult = mysqli_num_rows($result);

      if($queryresult > 0){
        while($row = mysqli_fetch_assoc($result)){
          echo "<div class= 'video-box'>
                <h3>".$row['TITLE']."</h3>
                <p>".$row['DESCRIP']."</p>
                <p>".$row['VIEWS']."</p>
                <p>".$row['DAY']."</p>
                </div>";
        }
      }*/
    ?>
  </div>

  </body>
</html>
