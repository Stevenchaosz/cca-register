<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Led CCA Attendance System</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<!--    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>-->
<!--    <link href="Stylesheets/slcca_attendance.css" type="text/css" rel="stylesheet"/>-->
</head>
<body>
<h1>Student Led CCA Attendance System</h1>
<form name="input" action="html_form_action.php" method="get">
    username: <input type="text" name="username"><br>
    password: <input type="password" name="pwd">
    <input type="submit" value="Submit">
</form>
<!--<script>
    window.alert("Welcome");
</script>-->
<?php
    echo "Hello World."
?>
<?php
    $servername = "47.100.93.21:3306";
    $username = "root@localhost";
    $password = "chao1lin@mysqlali";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check for connection
    if ($conn == connect_error) {
        echo "Connection failed: " . $conn = connect_error;
    }
    echo "Connected";
?>

</body>
</html>