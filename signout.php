<?php
session_start();
session_destroy();
header('location:homepagePEF.php?bye=We hope see you again ');
?>