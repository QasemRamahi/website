<?php
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["pass"];

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $con = new mysqli('localhost', 'root', '', 'gaming');

    // Check for a successful connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Directly embed the values (not recommended due to SQL injection)
    $sql = "INSERT INTO `signup` (username, email, pass) VALUES ('$name', '$email', '$hashedPassword')";

    if ($con->query($sql) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $con->error;
    }

    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 15px;
        }
        button {
            background-color: #333;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Sign Up</h1>
        <form action="#" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="pass" name="pass" required>

           <button type="submit">submit</button>
        </form>
    </div>
</body>
</html>
