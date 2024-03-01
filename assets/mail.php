<?php
$to = "pkumarskp4@gmail.com";
$subject = $_POST['subject'];
$txt = $_POST['message'];
$headers = "From:". $_POST['email'];
mail($to,$subject,$txt,$headers);
header('Location: index.html');
?>
