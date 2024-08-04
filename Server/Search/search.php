<?php
    include 'header.php';
?>


<h1>Search Page</h1>
<div class="video-container">
    <?php
    if(isset($_POST['submit-search'])){
        $search = mysqli_real_escape_string($conn, $_POST['search']);
        $sql = "select * from videos where TITLE like '%$search%' OR DESCRIP like '%$search%' OR VIEWS like '%$search%' OR DAY like '%$search%'";
        $result = mysqli_query($conn, $sql);
        $queryresult = mysqli_num_rows($result);

        echo "There are ".$queryresult." results for you!..";

        if($queryresult >0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<div class= 'video-box'>
                      <h3>".$row['TITLE']."</h3>
                      <p>".$row['DESCRIP']."</p>
                      <p>".$row['VIEWS']."</p>
                      <p>".$row['DAY']."</p>
                      </div>";
            }
        }
        else {
            echo "<br><br>Ooops! Wanna Try another Recipe";
        }
    }
    ?>
</div>