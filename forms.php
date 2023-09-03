<?php
// Database connection code goes here (configure your database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "unilink";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize a variable to track whether the form has been submitted successfully
$formSubmitted = false;

// Process the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $activity_title = $_POST["activityName"];
    $college = $_POST["department"];
    $program = $_POST["program"];
    $partner = $_POST["partner"];
    $duration = $_POST["date"];

    // Insert the data into the database
    $sql = "INSERT INTO activityform (activity_title, college, program, partner, duration) VALUES ('$activity_title', '$college', '$program', '$partner', '$duration')";

    if ($conn->query($sql) === TRUE) {
        $formSubmitted = true; // Set the flag to true if the form submission was successful
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();

// Check if the form was successfully submitted and then redirect to ui-formsPreview.php
if ($formSubmitted) {
    header("Location: ui-formsPreview.php");
    exit(); // Ensure that no more content is sent after the redirection
}
?>
