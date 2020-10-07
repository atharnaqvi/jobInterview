<?php

if (isset($_POST["reset-request-submit"])){
    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);

    $url = "www.job-interview.com/create-new-password.php?selector=" . $selector . "&validator=" . bin2hex($token);

    $expires = date("U") + 1800;
    //U = todays date in seconds

    require 'dbh.inc.php';

    $userEmail = $_POST["email"];

    $sql = "DELETE FROM pwrReset WHERE pwdResetEmail=?;";
    $stmt = mysqli_stmt_init("$conn");
    if (!mysqli_stmt_prepare($stmt, $sql)){
        echo "There was an error!";
        exit();
    }
    else {
        mysqli_stmt_bind_param($stmt, "s", $userEmail);
        mysqli_stmt_execute($stmt);
    }

    $sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init("$conn");
    if (!mysqli_stmt_prepare($stmt, $sql)){
        echo "There was an error!";
        exit();
    }
    else {
        $hashToken = password_hash($token, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashToken, $expires);
        mysqli_stmt_execute($stmt);
    }

    mysqli_stmt_close($stmt);
    mysqli_close();

    $to = $userEmail;


    $subject = 'Reset your password for Job-Interviw.com';

    $message = '<p>We reveived a password reset request. The link to reset your password is below. If you did not make this 
    request, you can ignore this email</p>';

    $message .= '<p>Here is your password reset link: </br>';
    $message .= '<a href="' .$url . '">' . $url. '</a></p>';

    $headers = "From: Job-Interview <atharnaqvi@gmail.com>\r\n";
    $headers .= "Reply-to: atharnaqvi@gmail.com\r\n";
    $headers .= "Content-type: text/html\r\n"; // if this line is not added then html will not work

    mail($to, $subject, $message, $headers);

    header("Location: ../reset-password.php?reset=success");


}
else {
    header("Location: ../index.php")
}