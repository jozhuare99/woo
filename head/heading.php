<?php

session_start();

require '/event.php';
require '/woo/assets/db.php';
require '/woo/assets/auth_functions.php';
require '/woo/assets/security_functions.php';

if (isset($_SESSION['auth']))
$_SESSION['expire'] = ALLOWED_INACTIVITY_TIME;
generate_csrf_token();
check_remember_me();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="<?php echo APP_DESCRIPTION;?>">
    <meta name="author" content="<?php echo APP_OWNER;?>">
    <title><?php echo TITLE . ' | ' . APP_NAME;?></title>
    <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon">
    <script src="/woo/assets/jquery.js" type="text/javascript"></script>
    <script src="/woo/assets/js.js"></script>
    <link rel="stylesheet" href="/assets/style/boostrap/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/style/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="/assets/style/app.css">
    <link rel="stylesheet" href="/signup/signup.css">
    <script src="/assets/style/boostrap/bootstrap.bundle.min.js" type="text/javascript"></script>
</head>
<body>
<?php require 'navbar.php';?>