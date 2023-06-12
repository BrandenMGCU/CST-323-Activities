<?php
require ('/Applications/MAMP/htdocs/Activity1CST323/Activity1/Website/DB/DatabaseConnection.php');
// Use the Database connection php information.
require_once ('Login.php');
// Need the login for the session  information.

$query = "Delete from users where username = '". ($_SESSION['username']) ."'";
// Delete the user from the database that is currently logged in.
$result = mysqli_query($con, $query);
// If there is a connection, execute the query.

if ($result)
// If there is a result that matches then delete the account.
{
echo  "Account deleted successfully!";
// Successfully deleted the account.
}
else
{
  echo "Error deleting record: " . $con->error;
  // Ran into an error while deleting the account.
}

header("Location: Login.php");
// Redirect me to the Login Page.

die();
// Kill the session and page.

?>
<?php
// Initialize the session.

// Unset all of the session variables.
$_SESSION = array();

// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finally, destroy the session.
session_destroy();
mysqli_close($con);
?>
