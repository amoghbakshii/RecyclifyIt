<!DOCTYPE html>
<html lang="en">
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap');
    *{
        font-family: 'Poppins', sans-serif;
    }
  .success-message {
    background-color: #d4edda; /* Light green background color */
    color: #155724; /* Dark green text color */
    border: 2px solid #c3e6cb; /* Border color for contrast */
    padding: 20px; /* Padding for better spacing */
    border-radius: 10px; /* Rounded corners for a softer look */
    margin-top: 30px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1); /* Box shadow for a subtle lift */
    text-align: center; /* Center the text */
    font-size: 30px; /* Increase font size */

.success-message a {
    color: #155724; /* Dark green color for the link */
    text-decoration: none; /* Remove underline */
    font-weight: bold; /* Make the link bold */
    transition: color 0.3s; /* Smooth color transition on hover */
}

.success-message a:hover {
    color: #28a745; /* Dark green color on hover */
}


    </style>

<body>
<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "recyclifyit";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Insert user data into the 'users' table
$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo '<div class="success-message">Signup successful! <a href="signuppage.html">Login</a></div>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
</body>
</html>


