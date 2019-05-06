<?php 
 $name = $_POST['name'];
 $email = $_POST['email'];
 $objet = $_POST['objet'];
 $message = $_POST['message'];
 $email_body = "UserName : $name.\n".
                "UserEmail : $email.\n".
                "UserMessage : $message.\n";
$to = "nciri.ayman@gmail.com";
mail($to , $objet , $email_body );
header("Location : contact.html");

?>