<?php

session_start();
unset($_SESSION["user"]);
unset($_SESSION["name"]);
unset($_SESSION["user_type"]);
session_destroy();
header("location: index.php");
