<?php
    require "admin_header.php";

?>
<main>

<?php
   // if (isset($_SESSION['userId'])){

        echo '<br><br><br><br><br><br><br><br><br>';
        echo '<h1>All Applications</h1><br>';

        $sql = "SELECT * FROM application_master ORDER BY date_created DESC LIMIT 25;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        
        echo "<table border='1'>
        <tr>
            <th>Application Ref</th>
            <th>Pathway</th>
            <th>Specialisation</th>
            <th>Date created</th>
            <th>Date of Interview</th>
            <th>Target position</th>
            <th>Current job title</th>
            <th>Pref date from</th>
            <th>Pref date till</th>
            <th>Pref time between</th>
            <th>Pref time end</th>
        <tr>";

        if ($resultCheck > 0){
            while ($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>" . $row['application_id'] . "</td>";
                echo "<td>" . $row['pathway'] . "</td>";
                echo "<td>" . $row['specialisation'] . "</td>";
                echo "<td>" . $row['date_created'] . "</td>";
                echo "<td>" . $row['date_of_interview'] . "</td>";
                echo "<td>" . $row['target_position'] . "</td>";
                echo "<td>" . $row['current_job_title'] . "</td>";
                echo "<td>" . $row['preferred_date_from'] . "</td>";
                echo "<td>" . $row['preferred_date_to'] . "</td>";
                echo "<td>" . $row['preferred_time_between'] . "</td>";
                echo "<td>" . $row['preferred_time_and'] . "</td>";
                echo "</tr>";
                
            }
            echo "</table>";
        }else {
            echo 'No record fount!!!';
        }
    //}else if(!isset($_SESSION['userId'])){
    //    header('Location: signin.php?Signin=NotLoggedIn');
    //}
   // else{
     //   echo '<p>You are logged out!!!</p>';
    //}


    mysqli_close($conn);
?>
    
 
</main>
