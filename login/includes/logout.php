<?php
include_once 'user_sessions.php';

$userSession = new UserSession();
$userSession->closeSession();

header("location: ../index.php");
?>