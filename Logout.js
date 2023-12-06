  // This is Btn Logout 


  function confirmLogout() {
    // Display a confirmation dialog
    var result = window.confirm("Are you sure you want to logout?");

    // Check the user's choice
    if (result) {
      // User clicked "OK" (Yes), redirect to a specific URL
      alert("You have been logged out!");
      window.location.href = "/Assets/Login/Logins.php";  
    } else {
      // User clicked "Cancel", do nothing or handle accordingly
    }
  }