<?php
session_start();
session_unset();
session_destroy();
setcookie('rememberme', '', time() - 3600, "/");
header("Location: gg.php");
exit;
