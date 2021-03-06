<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body {
            font: 14px sans-serif;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="page-header">
        <form>
            <div><b>Email: <?php echo htmlspecialchars($_SESSION["email"]); ?><b></div>
            <div><b>Name: <?php echo htmlspecialchars($_SESSION["name"]); ?><b></div>
            <div><b>Last name: <?php echo htmlspecialchars($_SESSION["last_name"]); ?><b></div>
            <div><b>Phone: <?php echo htmlspecialchars($_SESSION["phone"]); ?><b></div>
            <div><b>Registred at: <?php echo htmlspecialchars($_SESSION["register_at"]); ?><b></div>
        </form>
    </div>
    <p>
        <a href="logout.php" class="btn btn-danger">Sign Out</a>
    </p>
</body>

</html>