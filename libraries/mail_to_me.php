<?php

$msg = "<h2>Name: " . $_GET['name'] . "</h2><br>" . "<h2>Phone: " . $_GET['phone'] . "</h2><br>". "<h2>Email: " . $_GET['email'] . "</h2><br>" . "<p>" . $_GET['message'] . "</p>"; 

mail("ryanbarsatan@gmail.com","Test subject",$msg);
?>
