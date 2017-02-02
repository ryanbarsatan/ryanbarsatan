<?php

$msg = "Name: " . $_GET['name'] . "\n" . "Phone: " . $_GET['phone'] . "\n". "Email: " . $_GET['email'] . "\n" . $_GET['message'] . "\n"; 

mail("ryanbarsatan@gmail.com","Test subject",$msg);
?>
