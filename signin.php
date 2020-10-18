<?php
    require "admin_header.php"
?>

<main>
<div class="signin">

<?php 
    if(isset($_SESSION['userId'])){
        echo '<br><br><br>';
        echo '<h2>Hello </h2><br>';
        echo '<form action="includes/logout.inc.php" method="post">
            <button type="submit" name= "logout-submit">Logout</button>
        </form>';
    }
    else {
        echo '<form action="includes/login.inc.php" method="post">
                <input type="text" name="mailuid" placeholder="E-mail/Username">
                <input type="password" name="pwd" placeholder="Password">
                <button type="submit" name= "login-submit">Login</button>
            </form>
            <a href="signup.php" class="link">Signup</a>';
    }
?>
    
    
    
    
    <!-- </form> -->
</div>
    
</main>


<?php
    require "footer.php"
?>