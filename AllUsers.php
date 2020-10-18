<?php
    require "admin_header.php";

?>

<main>

    <?php
        if (isset($_SESSION['userId'])){

            echo '<br><br><br>';
            echo '<h1>All Users</h1><br>';

            $sql = "SELECT * FROM users;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            
            echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Role</th>
            <tr>";

            if ($resultCheck > 0){
                while ($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                        echo "<td>" . $row['idUsers'] . "</td>";
                        echo "<td>" . $row['uidUsers'] . "</td>";
                        echo "<td>" . $row['emailUsers'] . "</td>";
                    echo "</tr>";
                    
                }
                echo "</table>";
            }else {
                echo 'No record fount!!!';
            }
        }else if(!isset($_SESSION['userId'])){
            header('Location: signin.php?Signin=NotLoggedIn');
        }
        else{
            echo '<p>You are logged out!!!</p>';
        }


        mysqli_close($conn);
    ?>
        
     
</main>

