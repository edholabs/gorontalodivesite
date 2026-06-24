<?php
session_start();
unset($_SESSION['user_id']);
unset($_SESSION['user_nama']);
header("Location: home");
exit();
?>
