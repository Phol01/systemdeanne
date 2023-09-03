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
    $partner_name = $_POST["partner"];
    
    // Check if the "partnerType" field is set and not empty
    if (isset($_POST["partnerType"]) && !empty($_POST["partnerType"])) {
        $partner_type = $_POST["partnerType"];
    } else {
        // Handle the case where "partnerType" is not set or empty
        $partner_type = ""; // You can set a default value or handle the error as needed
    }

    // Insert the data into the database
    $sql = "INSERT INTO activityform (activity_title, college, program, partner_name, partner) VALUES (?, ?, ?, ?, ?)";

    // Prepare the SQL statement using a prepared statement
    $stmt = $conn->prepare($sql);

    // Bind parameters to the prepared statement
    $stmt->bind_param("sssss", $activity_title, $college, $program, $partner_name, $partner_type);

    if ($stmt->execute()) {
        $formSubmitted = true; // Set the flag to true if the form submission was successful
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
}

// Check if the form was successfully submitted and then redirect to ui-formsPreview.php
if ($formSubmitted) {
    header("Location: ui-formsPreview.php");
    exit(); // Ensure that no more content is sent after the redirection
}

$conn->close();
?>
