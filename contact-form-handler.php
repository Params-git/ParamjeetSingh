<?php

    $name = $_POST['name']; 
    $visitor_email = $_POST['email'];
    $message = $_POST['comment'];

    $email_from = "singhparamjeet9582@gmail.com";

    $email_subject = "New Form submission";

    $email_body = "User Name: $name.\n".
                      "User Email: $visitor_email.\n".
                          "User Message: $message.\n"; 

    $to = "singhparamjeet9250@gmail.com";

    $headers = "Form: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to, $email_subject, $email_body, $headers);

    header("Location: index.html");
?>