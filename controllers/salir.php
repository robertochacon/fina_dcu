<?php

session_start();
session_destroy("id");
session_destroy("user");
session_unset("id");
session_unset("user");
header("Location:../views/login.php");

?>