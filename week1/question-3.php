<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contac Form</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">Name: </label><br>
        <input type="text" name="name"><br>
        <label for="">Last Name: </label><br>
        <input type="text" name="lname"><br>
        <label for="">Email: </label><br>
        <input type="email" name="email"><br>
        <label for="">Phone No: </label><br>
        <input type="text" name="phone"><br><br>
        <input type="submit" value="Send" name="btn">
    </form>
</body>
</html> 
<?php
    session_start();
    if (isset($_POST['btn'])) {
        $_SESSION['name']  = $_POST['name'];
        $_SESSION['lname'] = $_POST['lname'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['phone'] = $_POST['phone'];

        echo $_SESSION['name']. "<br>";
        echo $_SESSION['lname']. "<br>";
        echo $_SESSION['email']. "<br>";
        echo $_SESSION['phone']. "<br>";
    }


?>
