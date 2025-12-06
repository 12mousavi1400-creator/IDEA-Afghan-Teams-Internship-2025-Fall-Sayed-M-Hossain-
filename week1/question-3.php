<?php
    session_start();
    if (isset($_POST['btn'])) {
        $name = trim($_POST['name']);
        $lname = trim($_POST['lname']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);

        $errorrs = [];

        // check and validate the name
        if (empty($name)) {
            $errorrs['name'] = "Please insert your name <br>";
        }elseif (!preg_match("/^[a-zA-Z\sآ-ی]+$/u", $name)) {
            $errorrs['name'] = "Name must be letters <br>";
        }

         // check and validate the Last name
        if (empty($lname)) {
            $errorrs['lname'] = "Please enter your last-name <br>";
        }elseif (!preg_match("/^[a-zA-Z\sآ-ی]+$/u", $lname)) {
            $errorrs['lname'] = "Last Name must be letters <br>";
        }

        // check and validate email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errorrs['email'] = "The email you entered is invalid. <br>";
        }

        // check adn validate phone number
        if (empty($phone)) {
            $errorrs['phone'] = "Please enter your phone number <br>";
        }elseif (!preg_match("/^\+?\d{10,15}$/", $phone)) {
            $errorrs['phone'] = "Phone number must be integers and must be 10 to 15 <br>";
        }

        // if the fields were not empty
        if (empty($errorrs)) {
            $_SESSION['name'] = $name;
            echo $_SESSION['name']. "<br>";

            $_SESSION['lname'] = $lname;
            echo $_SESSION['lname']. "<br>";

            $_SESSION['email'] = $email;
            echo $_SESSION['email']. "<br>";

            $_SESSION['phone'] = $phone;
            echo $_SESSION['phone'];
        }
    }


?>

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
        <?php 
            if (isset($errorrs['name'])) {
                echo $errorrs['name'];
            } 
        ?>
        <label for="">Last Name: </label><br>
        <input type="text" name="lname"><br>
        <?php
            if (isset($errorrs['lname'])) {
                echo $errorrs['lname'];
            }
        ?>
        <label for="">Email: </label><br>
        <input type="email" name="email"><br>
        <?php 
            if (isset($errorrs['email'])) {
                echo $errorrs['email'];
            }
        ?>
        <label for="">Phone No: </label><br>
        <input type="text" name="phone"><br>
        <?php 
            if (isset($errorrs['phone'])) {
                echo $errorrs['phone'];
            }
        ?>
        <br>
        <input type="submit" value="Send" name="btn">
    </form>
</body>
</html> 
