
<?php
session_start();
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
    $password = $_POST["password"];
   

    // Use prepared statements to prevent SQL injection
    $signinSql = "SELECT email, pass FROM `signin` WHERE email = ?";
    $stmt = $conn->prepare($signinSql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $storedPassword = $row["pass"];

        // Verify the password using password_verify
        if (password_verify($password, $storedPassword)) {
            // Password is correct, set a session and redirect
            $_SESSION["email"] = $email;
            $_SESSION["isAuthenticated"] = true; 
            header("Location: main.php"); 
            exit();
        } else {

          $error_message = "Incorrect password!";
        }
    } else {
        // User doesn't exist in the signin table, check the signup table
        $signupSql = "SELECT email, pass FROM `signup` WHERE email = ?";
        $stmt = $conn->prepare($signupSql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $storedPassword = $row["pass"];

            if (password_verify($password, $storedPassword)) {
                $_SESSION["email"] = $email;
                $_SESSION["isAuthenticated"] = true; 
                header("Location: main.php");
                exit();
            } else {
                $error_message = "Incorrect password!";
            }
        } else {
            
            $error_message = "User not found or not signed up!";
        }
    }
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign In</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  .container {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
    width: 80%;
    max-width: 400px;
  }
  .input-group {
    margin-bottom: 15px;
  }
  .input-group label {
    display: block;
    font-weight: bold;
  }
  .input-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
  }
  .btn {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 3px;
    cursor: pointer;
    width: 100%;
  }
  .signup-link {
    text-align: center;
    margin-top: 10px;
  }
</style>
</head>
<body>
<div class="container">
  <h2>Sign In</h2>
  <form action="#" method="post">
    <div class="input-group">
      <label for="email">email</label>
      <input type="text" id="email" name="email" required>
    </div>
    <div class="input-group">
      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>
    </div>
    <button type="submit" class="btn">Sign In</button>
  </form>
  <div class="signup-link">
    <p>Don't have an account? <a href="php/signup.php">Sign Up</a></p>
  </div>
</div>
</body>
</html>
