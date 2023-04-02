
<!DOCTYPE html>
<html>
<head>
  <title>Form Results</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm-password"];

    echo "<h1>Form Results</h1>";
    echo "<p>First name: $firstname</p>";
    echo "<p>Last name: $lastname</p>";
    echo "<p>Email: $email</p>";

    $password_length = strlen($password);
    echo "<p>Password length: $password_length</p>";

    if ($password === $confirm_password) {
      echo "<p>Password and Confirm Password match!</p>";
    } else {
      echo "<p>Password and Confirm Password do not match!</p>";
    }
  } else {
    echo "<p>Error: Invalid form submission.</p>";
  }
  ?>
</body>
</html>
