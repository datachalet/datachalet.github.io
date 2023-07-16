<?php

$email = $_POST['email'];
$to = 'datachalet@gmail.com'; // Replace with your email address

$subject = 'New Subscription';
$message = 'A new email address has subscribed: ' . $email;
$headers = 'From: ' . $email . '\r\n' .
           'Reply-To: ' . $email . '\r\n';

$sendstatus = mail($to, $subject, $message, $headers);

$result = array(
    'sendstatus' => $sendstatus,
    'message' => $sendstatus ? '<div class="alert alert-success subscription-success" role="alert"><strong>Success!</strong> Check your email to confirm sign up.</div>' : '<div class="alert alert-danger subscription-error" role="alert"><strong>Error:</strong> Failed to send email.</div>'
);

echo json_encode($result);

?>