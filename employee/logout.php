<?php

// Destroys the session of the user 
session_start();
session_destroy();
header('Location: ../index.php')

?>