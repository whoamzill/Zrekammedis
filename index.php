<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>RCT Dashboard</title>
    
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <?php include 'header.php'; ?>
    <?php include 'sidebar.php'; ?>
    <?php include 'content.php'; ?>
    <?php include 'footer.php'; ?>

</div>



</body>
</html>
