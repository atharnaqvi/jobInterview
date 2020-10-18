<?php
if(isset($_POST['submit'])){
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('doc', 'docx', 'txt', 'rtf', 'pdf', 'indd', 'pmd');

    if (in_array($fileActualExt, $allowed)){
        if ($fileError === 0){
            if ($fileSize < 100000){ // restric file size 
                $fileNameNew = uniqid('', true).".".$fileActualExt; //gives file a unique name
                $fileDestination = 'uploads/'. $fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                header("Location: index.php?uploadsuccess");
            } else {
                echo 'File size is too big, reduce the size and try again! ';
            }
        } else {
            echo 'There was an error uploading your file!';
        }
    } else {
        echo 'File type '. $fileActualExt . ' not supported. Please upload word, pdf, pagemaker, or adobe indesign document!!!';
    }

}