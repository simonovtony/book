<?php

session_start();

$ForumSubsystem = & $_SESSION['ForumSubsystem'];
$ForumSubsystem['count'] = @$ForumSubsystem['count'] + 1;

$AuthSubsystem = & $_SESSION['AuthSubsystem'];
$AuthSubsystem['count'] = @$AuthSubsystem['count'] + 1;

$AuthSubsystem['isAuthorized'] = true;

echo "<pre>";
print_r($_SESSION);
echo "</pre>";

?>