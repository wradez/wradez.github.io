<?php
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $contact_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'walkerradez@gmail.com';
    $email_subject = "RESPOND ALERT!!! New Contact From Portfolio Page - $first_name $last_name";
    $email_body =  "Contact First Name: $first_name
                    Contact Last Name: $last_name
                    Contact Email: $contact_email
                    Contact Message: $message";

    $to = 'walkerradez@gmail.com';
    $headers = "From: $email_from\n";
    $headers .= "Reply-To: $contact_email\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location: index.html")

?>