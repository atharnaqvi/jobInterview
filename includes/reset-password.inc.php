<?php

if (isset($_POST["reset-password-submit"])){

    $selector = $_POST["selector"];
    $validator = $_POST["validator"];
    $password = $_POST["pwd"];
    $password-repeat = $_POST["pwd-Repeat"];

    if (empty($selector) || empty($validator)){
        header("Location: ../create-new-password.php?newpwd=empty");
        exit();
    }

    elseif ($password != $passwordRepeat){
        header("Location: ../create-new-password.php?newpwd=pwdnotsame");
        exit();
    }

    $currentDate = date("U");
    require 'dbh.inc.php';

    $sql = "SELECT * FROM pwdReset WHERE pwdResetSelector=?  AND pwdResetExpires >= ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        echo "There was an error!";
        exit();
    }
    else {
        mysqli_stmt_bind_param($stmt, "s", $selector);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        if (!$row = mysqli_fetch_assoc($result)){
            echo "You need to re-submit your reset reqest."
            exit();
        }
        else {
            $tokenBin = hex2bin($validator);
            $tokenCheck = password_verify($tokenBin, $row["pwdResetToken"]);

            if ($tokenCheck === false){
                echo "You need to re-submit your reset.";
                exit();
            }
            elseif ($tokenCheck === true) {
                $tokenEmail = $row['pwdResetEmail'];

                $sql = "SELECT * FROM users WHERE emailUsers=?;";
                $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $sql)){
                        echo "There was an error!";
                        exit();
                    }
                    else {
                        mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                        mysqli_stmt_executre($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        if (!$row = mysqli_fetch_assoc($result)){
                            echo "There was an error!";
                            exit();
                        }
                        else {
                            //update the new password in the user table
                            $sql = "UPDATE users SET pwdUsers=? WHERE emailUsers=?";
                            $stmt = mysqli_stmt_init($conn);
                            if (!mysqli_stmt_prepare($stmt, $sql)){
                                echo "There was an error!";
                                exit();
                            }
                            else {
                                $newPwdHash = password_hash($password, PASSWORD_DEFAULT);
                                mysqli_stmt_bind_param($stmt, "ss", $newPwdHash, $tokenEmail);
                                mysqli_stmt_execute($stmt);
                                
                                $sql = "DELETE FROM pwrReset WHERE pwdResetEmail=?;";
                                $stmt = mysqli_stmt_init($conn);
                                if (!mysqli_stmt_prepare($stmt, $sql)){
                                    echo "There was an error!";
                                    exit();
                                }
                                else {
                                    mysqli_stmt_bind_param($stmt, "s", $userEmail);
                                    mysqli_stmt_execute($stmt);
                                    header("Location: ../signup.php?newpwd=passwordupdated");
                                }
                                
                            }
                        }
            }
        }


    }
}
else {
    header("Location: ../index.php");
}