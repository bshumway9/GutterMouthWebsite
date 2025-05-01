
<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $message = $_POST['description'];
?>

<?php
	$email_from = 'bshumway9@gmail.com';

	$email_subject = "New Quote Requested";

	$email_body = "$name has requested a quote and may have some questions.\n".
                            "Here is the message:\n $message\n".
                            "Here is their contact information:\n E-mail: $visitor_email\n".
                            "Phone Number: $phone\n Address: $address"
?>

<?php

  $to = "bshumway9@gmail.com";

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);

 ?>