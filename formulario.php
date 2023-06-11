<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>

<body>
    <form method="POST" action=" ">
        <label for="name">Name: <span><em>(required)</em></span></label>
        <input type="text" name="name" class="form-input" required><br>

        
        <label for="lastname">Lastname: <span><em>(required)</em></span></label>
        <input type="text" name="lastname" class="form-input" required><br>

        <label for="email">Email: <span><em>(required)</em></span></label>
        <input type="email" name="email" class="form-input" required><br>

        <input class="form-btn" name="submit" type="submit" value="Submit">

        <?php

        if($_POST){
            $name = $_POST['name'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];

        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bbddlab";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn -> connect_error){
            die("connection failed:" . $conn->connect_error);
        }

        $sql = "INSERT INTO usuarios (name, lastname, email)
        VALUES ('$name', '$lastname', '$email')";

        if ($conn->query($sql) === TRUE) {
            echo "record created";
        } else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
        }
        ?>
    </form>

</body>

</html>