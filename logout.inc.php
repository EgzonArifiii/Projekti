<?php

session_start();
session_unset();
session_destroy();

header("location: index.php?error=none");
die();
//This is the logout
