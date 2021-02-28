<?php
    require "admin_header.php";

?>

<main>

    <?php
      //  if (isset($_SESSION['userId'])){

            echo '<br><br><br>';
            echo '<h1>All Users</h1><br>';

            $sql = "SELECT * FROM employee_master;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            
            echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
                <th>Fore Name</th>
                <th>Surname</th>
                <th>Mobile</th>
                <th>Post code</th>
                <th>City</th>
                <th>Country</th>
                <th>Status</th>
            <tr>";

            if ($resultCheck > 0){
                while ($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                        echo "<td>" . $row['employee_id'] . "</td>";
                        echo "<td>" . $row['username'] . "</td>";
                        echo "<td>" . $row['password'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['f_name'] . "</td>";
                        echo "<td>" . $row['l_name'] . "</td>";
                        echo "<td>" . $row['mobile'] . "</td>";
                        echo "<td>" . $row['postcode'] . "</td>";
                        echo "<td>" . $row['city'] . "</td>";
                        echo "<td>" . $row['country'] . "</td>";
                        echo "<td>" . $row['status'] . "</td>";
                    echo "</tr>";
                    
                }
                echo "</table>";
            }else {
                echo 'No record fount!!!';
            }
      //  }else if(!isset($_SESSION['userId'])){
       //     header('Location: signin.php?Signin=NotLoggedIn');
       // }
       // else{
      //      echo '<p>You are logged out!!!</p>';
       // }


        mysqli_close($conn);
    ?>
        
     
</main>

