<?php
$to = "pkumarskp4@gmail.com";
$subject = $_POST['subject'];
$txt = $_POST['message'];
$headers = "From: $_POST['email'];. "\r\n" .
"CC: somebodyelse@example.com";
mail($to,$subject,$txt,$headers);
header('Location: index.html');
?>
