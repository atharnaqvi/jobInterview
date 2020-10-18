<?php
    require "header.php"
?>

<main>
    <?php
        if (isset($_SESSION['userId'])){
            //echo '<p>You are logged in!!!</p>';
            echo '<h2>Data read from Database</h2><br>';
            $sql = "SELECT * FROM users;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            
            if ($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)){
                    echo "<span style='margin-right:40px'>" . $row['uidUsers'] . "</span>";
                    echo "<span style='margin-left:60px'>" .$row['emailUsers']."</span><br>";
                }
            }else {
                echo 'No record fount!!!';
            }
        }
        else{
            echo '<p>You are logged out!!!</p>';
        }
    ?>
        
    <?php
        
    ?>
    
</main>


<?php
    require "footer.php"
?>