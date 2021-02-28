<?php
    require "admin_header.php";

?>

<main>

    <?php
       // if (isset($_SESSION['userId'])){

            echo '<br><br><br><br><br><br>';
            echo '<h1>All Messages</h1><br>';

            $sql = "SELECT * FROM messages;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            
            echo "<table border='1'>
            <tr>
            <th>ID</th>
            <th>First name</th>
            <th>Last name</th>
            <th>From</th>
            <th>Phone No</th>
            <th>Subject</th>
            <th>Message</th>
            <tr>";

            if ($resultCheck > 0){
                while ($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>" . $row['message_id'] . "</td>";
                    echo "<td>" . $row['f_name'] . "</td>";
                    echo "<td>" . $row['l_name'] . "</td>";
                    echo "<td>" . $row['mail_from'] . "</td>";
                    echo "<td>" . $row['phone'] . "</td>";
                    echo "<td>" . $row['con_subject'] . "</td>";
                    echo "<td>" . $row['con_message'] . "</td>";
                    echo "</tr>";
                    
                }
                echo "</table>";
            }else {
                echo 'No record fount!!!';
            }
        //}else if(!isset($_SESSION['userId'])){
         //   header('Location: signin.php?Signin=NotLoggedIn');
        //}
       // else{
       //     echo '<p>You are logged out!!!</p>';
        //}


        mysqli_close($conn);
    ?>
        
     
</main>

