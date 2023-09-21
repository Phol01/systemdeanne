<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "unilink";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

//     // SQL query to delete the record
//     $sql = "DELETE FROM activityform WHERE id = $i";

//     if ($conn->query($sql) === TRUE) {
//         echo "Record deleted successfully";
//     } else {
//         echo "Error deleting record: " . $conn->error;
//     }


// // Close the database connection
// $conn->close();
