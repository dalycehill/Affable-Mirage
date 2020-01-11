<?php 

    //retrieve all fields
    $subject = $_POST["subject"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $error = 0;

    //check for empty required fields
    if (empty($subject)) { $error = 1; }
            
    if (empty($email)) { 
        $error = 2; 
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 3;
    }
        
    if (empty($message)) { $error = 4; }

    if ($error == 0) {
        echo "No errors";
    } else {
        echo "ERROR: $error";
    }

?>