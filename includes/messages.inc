<?php

    include_once 'dbh.inc.php';

    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $mesage = $_POST['mesage'];
   
    $sql = "INSERT INTO messages (f_name, l_name, phone, subject, message) VALUES ('$fname', '$lname', '$phone', '$message');";
    mysqli_query($conn, $sql);

    header('Location: ../contact.php?registration=success');