<?php

if (isset($_POST['submit'])){
    require 'includes/dbh.inc.php';
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $mailFrom = $_POST['mail'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "contactForm@job-interview.co.uk"; //its requires live server to send emails
    $headers = "From: ". $mailFrom;
    
    $txt = "You have received an e-mail from ". $fname." ". $lname.
    "\n\n The query is about ". $subject. 
    ". \n\n Contact phone number is: ". $phone . "\n\n" .$message;

    $sql = "INSERT INTO messages (f_name, l_name, mail_from, phone, con_subject, con_message)
     VALUES ('$fname', '$lname', '$mailFrom', '$phone','$subject', '$message');";
    mysqli_query($conn, $sql);

    

    mail($mailTo, $subject, $txt, $headers);
    // header("Location: index.php?mailsend");
    
    header('Location: contact.php?registration=success');
}else {
    echo 'Please submit the form';
}