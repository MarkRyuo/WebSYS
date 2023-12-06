<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ims_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (!isset($_SESSION['username'])) {
  header('Location: userProfileSecurity.php');
  exit;
}

// Retrieve user information from the session
$username = $_SESSION['username'];
$usersign = $_SESSION['usersign'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Assets/Profile_Staff/Logout.css">
    <link rel="stylesheet" href="/Assets/Profile_Staff/Userprofile.css">
    <title>User Profile | Staff </title>
</head>
<body>

  <main class="main-User">

    <!--Section Here  -->
    <section class="parent-User">
      
        <div class="user-button-Log-out">
          <button class="button2" onclick="confirmLogout()">
                Logout
          </button> 
        </div>
        
      <form class="input" >
        <h1>Welcome Security!</h1>

        <label for="fullName" class="fullName">User:</label>
        <input type="text" id="fullName" name="fullName" value="<?php echo htmlspecialchars($usersign); ?>" readonly>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($username); ?>" readonly>

      </form>

    </section>

  </main>
</body>
  <script src="/Logout.js"></script>
</html>
