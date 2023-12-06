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
  header('Location: userProfile.php');
  exit;
}

if ($_SESSION['role'] !== 'admin') {
  // Redirect if the user is not an admin
  header('Location: /UserProfile Security/userProfileSecurity.php');
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="icon" type="img/x-icon" href="/Assets/Images/Batstatelogo.png">
    <link rel="stylesheet" href="/Assets/Aside/Aside.css">
    <link rel="stylesheet" href="/User-Profile/Userprofile.css">
    <link rel="stylesheet" href="/assets/css/btn-aboutandlogout.css">
    <link rel="stylesheet" href="/stylecursor.css">
    <title>User Profile | Lost and Found</title>
</head>
<body>

  <main class="main-User">
    <!-- header here -->
    <header>
      <nav class="parent-Nav">
        <h1><span><i class="fa-solid fa-user-shield fa-beat-fade"></i></span>User Profile</h1>
      </nav>
    </header>

    <!--Section Here  -->
    <section class="parent-User">
      
        <div class="user-button-Log-out">
          <button id="Logout" class="box btn-color-Logout">
            <i class="fa-solid fa-right-from-bracket fa-bounce"></i> <!--This is Bouncing Icon-->
            Logout  <!--This is Text Logout-->
          </button> 
        </div>
        
      <form class="input" >
        <h1>Welcome Admin!</h1>

        <label for="fullName" class="fullName">User:</label>
        <input type="text" id="fullName" name="fullName" value="<?php echo htmlspecialchars($usersign); ?>" readonly>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($username); ?>" readonly>

      </form>

    </section>

  </main>
</body>
  <!-- Connection in Home.js -->
  <script src="/assets/js/Logout.js"></script>
  <script src="/Assets/Aside/btn-aside.js"></script>
</html>
