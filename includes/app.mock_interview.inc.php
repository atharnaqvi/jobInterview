<?php

    include_once 'dbh.inc.php';

    $SelectTopic = $_POST['SelectTopic'];

   
    if ($_POST['AppDev'] !== "0") {
         $expertise = $_POST['AppDev'];
          
    }
    if ($_POST['AppInt'] !== "0"){
            $expertise = $_POST['AppInt'];
    }
    if ($_POST['Broadcast'] !== "0"){
        $expertise = $_POST['Broadcast'];
    }
    if ($_POST['CloudServices'] !== "0"){
        $expertise = $_POST['CloudServices'];
    }
    if ($_POST['Data'] !== "0"){
        $expertise = $_POST['Data'];
    }
    if ($_POST['eCommerce'] !== "0"){
        $expertise = $_POST['eCommerce'];
    }
    if ($_POST['ITSupport'] !== "0"){
        $expertise = $_POST['ITSupport'];
    }
    if ($_POST['JavascriptDev'] !== "0"){
        $expertise = $_POST['JavascriptDev'];
    }
    if ($_POST['NetworkEng'] !== "0"){
        $expertise = $_POST['NetworkEng'];
    }
    if ($_POST['ProjectTeam'] !== "0"){
        $expertise = $_POST['ProjectTeam'];
    }
    if ($_POST['Secuirty'] !== "0"){
        $expertise = $_POST['Secuirty'];
    }
    if ($_POST['SEO'] !== "0"){
        $expertise = $_POST['SEO'];
    }
    if ($_POST['SoftwareDev'] !== "0"){
        $expertise = $_POST['SoftwareDev'];
    }
    if ($_POST['Testing'] !== "0"){
        $expertise = $_POST['Testing'];
    }
    if ($_POST['WebDev'] !== "0"){
        $expertise = $_POST['WebDev'];
    }

    $targetPosition = $_POST['targetPosition'];
    $Package = $_POST['Package'];
    $currentJobTitle = $_POST['currentJobTitle'];
    // $jobSpec = $_POST['jobSpec'];
    // $cv = $_FILES['cv'];
    $dateFrom = $_POST['dateFrom'];
    $deadLineDate = $_POST['deadLineDate'];
    $timeFrom = $_POST['timeFrom'];
    $deadLineTime = $_POST['deadLineTime'];


    $insert1 = "INSERT INTO application_master (pathway, specialisation, target_position, current_job_title, preferred_date_from, preferred_date_to, preferred_time_between, preferred_time_and)
     VALUES ('$SelectTopic', '$expertise', '$targetPosition' , '$currentJobTitle' , '$dateFrom' , '$deadLineDate' , '$timeFrom' , '$deadLineTime' );";
    
    $query = mysqli_query($conn, $insert1) or die(mysqli_error($conn));

    if(isset($_POST['submit'])){
        $cv = $_FILES['cv'];
        $cvName = $_FILES['cv']['name'];
        $cvTmpName = $_FILES['cv']['tmp_name'];
        $cvSize = $_FILES['cv']['size'];
        $cvError = $_FILES['cv']['error'];
        $cvType = $_FILES['cv']['type'];
    
        $cvExt = explode('.', $cvName);
        $cvActualExt = strtolower(end($cvExt));
    
        $allowed = array('doc', 'docx', 'txt', 'rtf', 'pdf', 'indd', 'pmd');
    
        if (in_array($cvActualExt, $allowed)){
            if ($cvError === 0){
                if ($fileSize < 100000){ // restric file size 
                    $cvNameNew = uniqid('', true).".".$cvActualExt; //gives file a unique name
                    $cvDestination = '../uploads/'. $cvNameNew;
                    move_uploaded_file($cvTmpName, $cvDestination);
                    header("Location: ../mock-interview.php?registration=success");
                } else {
                    echo 'CV file size is too big, reduce the size and try again! ';
                }
            } else {
                echo 'There was an error uploading your cv!';
            }
        } else {
            echo 'File type '. $cvActualExt . ' not supported. Please upload word, pdf, pagemaker, or adobe indesign document!!!';
        }
        $queryCV = "INSERT INTO cv(cv,cv_name) VALUES ('$cv','$cvNameNew');";
        $queryCVexc = mysqli_query($conn, $queryCV)or die(mysqli_error($conn));
    }
    $insertCase = "INSERT INTO case (applicantion_id_ck)
     VALUES (LAST_INSERT_ID());";

    $FinalQueryExec = mysqli_query($conn, $insertCase) or die(mysqli_error($conn));

    header('Location: ../mock-interview.php?registration=success');

