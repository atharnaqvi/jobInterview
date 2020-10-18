<?php
    require "header.php"
?>

<main>
    <h1>Signup</h1>
    <?php 
        if(isset($_GET['error'])){
            if ($_GET['error'] == "emptyfields"){
                echo '<p style="color: red">Fill in all fields</p>';
            }
            elseif ($_GET['error']== "invaliduidmail"){
                echo '<p style="color: red">Invalid Username or email</p>';
            }
            elseif ($_GET['error']== "invalidmail"){
                echo '<p style="color: red">Invalid email</p>';
            }
            elseif ($_GET['error']== "invaliduid"){
                echo '<p style="color: red">Invalid Username</p>';
            }
            elseif ($_GET['error']== "passwordcheck"){
                echo '<p style="color: red">Password do not match!!!</p>';
            }
            elseif ($_GET['error']== "usertaken"){
                echo '<p style="color: red">Email already exist!!!</p>';
            }
        }elseif ($_GET['signup'] == "success" ){
            echo '<p style="color: green">Signup Successful!</p>';
        }
    ?>

    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="uid" placeholder="Username">
        <input type="text" name="mail" placeholder="E-mail">
        <input type="password" name="pwd" placeholder="Password">
        <input type="password" name="pwd-repeat" placeholder="Repeat password">
        <button type="submit" name="signup-submit">Signup</button>
</form>
<?php 
    if (isset($_GET["newpwd"])) {
        if ($_GET["newpwd"] == "passwordupdated"){
            echo '<p>Your password has been reset!</p>';
        }
    }
?>


<a href="reset-password.php">Forgot your password?</a>
</main>

<?php
    require "footer.php"
?>