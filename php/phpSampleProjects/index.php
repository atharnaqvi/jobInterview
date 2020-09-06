<?php
    include 'connect.php';
?>
<?php
    $query = "SELECT * FROM shouts";
    $shouts = mysqli_query($con, $query);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shout it</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
    <div class="container">
    <header>
        <h1>SHOUT IT Shoutbox</h1>
    </header>
    <div id="shouts">
        <ul>
            <?php while($row = mysqli_fetch_assoc($shouts)) : ?> 
            <li class="shout"><span><?php echo $row['time'] ?>- </span> <strong><?php echo $row['users'] ?>:</strong> <?php echo $row['message'] ?> </li>
            <?php endwhile; ?>
           
        </ul>
    </div>
    <div id="input">
        <form method="post" action="process.php">
            <input type="text" name="user" placeholder="Enter your name" />
            <input type="text" name="message" placeholder="Enter a message"/>
            <br/>
            <input class="shout-btn" type="submit" name="submit" value="Shout it out">
        
        </form>
    </div>


    </div>



</body>
</html>