<?php
     $name = $_POST['name'];
     $email= $_POST['email']
     $message=$_POST['subject']

     $email_from= 'sofy_patri@yahoo.com'
     $email_subject= "New Form submission"
     $email_body= "User Name: $name. \n"
                    "User email: $email. \n"
                      "User message: $message. \n"
    $to = "sofy.patri@yahoo.com"
    $headers= "From $email_from \r\n";
    $headers .= "Reply-To: $email \r\n";
    mail($to, $email_subject, $email_body, $headers)
    header("Location: contactus.html")
    ?>