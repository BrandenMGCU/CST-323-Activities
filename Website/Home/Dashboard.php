<?php
use Carbon\Traits\ToStringFormat;
use Symfony\Component\Mime\HtmlToTextConverter\HtmlToTextConverterInterface;

//include auth_session.php file on all user panel pages
require_once("/Applications/MAMP/htdocs/Activity1CST323/Activity1/Website/DB/DatabaseConnection.php");
//require_once("Authentication_Session.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;
  }
}
</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="Dashboard.php">Dashboard</a>
  <a href="Homepage.php">Home</a>
  <a href="Registration.php">Register</a>
  <a href="Logout.php">Logout</a>
  <a href="DeleteME.php?id=1" onclick="return confirm('This will delete your account, ARE YOU SURE?!')">Delete My Account!</a>
  <div class="search-container">
    <form action="Dashboard.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>

<div style="padding-left:10px">
  <h2>Welcome to your Dashboard <?php echo $_SESSION['username']; ?>! </h2>
</form>
            </nav>
        </header>

    <div class="form">
        <h3>Here below is your Portfolio:</h3>
        <h4>Here in this table you can put in and update your current information.</h4>
        <table border="1">
        <audio loop autoplay>
    <source src="sounds/WT.mp3" type="audio/mp3">
</audio>
</div>
</body>
<tbody>
<tr>
<td>Current Job</td>
<td>Former Job History</td>
<td>Skills</td>
<td>Education</td>
</tr>
<tr>
<td contenteditable='true'>Your Job here</td><br/>
<td contenteditable='true'>Your Job History here</td><br/>
<td contenteditable='true'>Your Skills here</td>
<td contenteditable='true'>Your Education here</td>
</tr>
</tbody>
</table>
    </div>
</body>
<ul>
    <li><a href="Password.php">Change Password</a>
    <li><a href="AccountInfo.php">Update Account Info</a>
    <li><a href="Portfolio.php">Update Portfolio</a></li>
</ul>
</body>
<body>
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
</head>
<body>

<h4>Jobs you might be interested in!</h4>

<!-- Trigger/Open The Modal -->
<button id="myBtn">Tell Me More!</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p><strong>High School Teacher</strong></p>
    <p>Description: You'll need a stronger cup of coffee!</p>
    <p>Start Date: March 30th, 2023</p>
    <p>Pay Range: $50,000 to $65,000.</p>
    <button>Apply!</button>
  </div>

  <div class="modal-content">
    <span class="close">&times;</span>
    <p><strong>College Professor at The University of Michigan</strong></p>
    <p>Description: Bachelors Degree in Teaching/Education.</p>
    <p>Start Date: Hiring Immediately!</p>
    <p>Pay Range: $70,000 to $75,000.</p>
    <button>Apply!</button>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<br/>
<br/>
</body>
</body>
<h4>Groups you might like!</h4>
<button>Join the National Association of Teachers Alliance Group!</button>
<button><a href="CoffeeLoversClub.html">Join the Coffee Consumers Organization</a></button>
</html>
