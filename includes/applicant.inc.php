<?php

    include_once 'dbh.inc.php';

    $fname = $_POST['first'];
    $lname = $_POST['last'];
    $mobile = $_POST['mobile'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $postcode = $_POST['postcode'];


    $sql = "INSERT INTO applicant (f_name, l_name, mobile, country, city, postcode) VALUES ('$fname', '$lname', '$mobile', '$country', '$city', '$postcode');";
    mysqli_query($conn, $sql);

    header('Location: ../index.php?registration=success');