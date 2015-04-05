<?php
require('loggedin.php');
session_destroy();
header('Location: index.php');
?>