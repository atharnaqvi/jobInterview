<?php
    require "header.php"
?>

<main style="width:300px; padding: 30px; line-height:25px">
    <form action="includes/applicant.inc.php" method="POST">
        <input type="text" name="first" placeholder="Firstname"><br>
        <input type="text" name="last" placeholder="Lastname"><br>
        <input type="text" name="mobile" placeholder="Mobile"><br>
        <input type="text" name="country" placeholder="Country"><br>
        <input type="text" name="city" placeholder="City"><br>
        <input type="text" name="postcode" placeholder="Postcode"><br>
        <button type="submit" name="submit">Submit</button>
        
    </form>

    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit" name="submit">Upload</button>

    </form>
    <br><br><br><br>
    
    
    <h2>contact us form</h2><br>
    <form action="contactForm.php" method="post">
        <input type="text" name="name" placeholder="Full name">
        <input type="text" name="mail" placeholder="Your email">
        <input type="text" name="subject" placeholder="Subject">
        <textarea name="mesage" placeholder="Message"></textarea>
        <button type="submit" name="submit">SEND MAIL</button>

    </form>
        
  
</main>


<?php
    require "footer.php"
?>