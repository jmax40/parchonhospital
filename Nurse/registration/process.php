<?php
// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Establish a database connection (update with your database credentials)
    $servername = "localhost";
    $username = "root";
    $password = "123456";
    $dbname = "parconhospital";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check for connection errors
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve data from the form
    $record_no = $_POST['record_no'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $sex = $_POST['sex'];
    $status = $_POST['status'];
    $birthplace = $_POST['birthplace'];
    $occupation = $_POST['occupation'];
    $birthday = $_POST['birthday'];
    $religion = $_POST['religion'];
    $contact_no = $_POST['contact_no'];
    $date = date("m-d-Y");


    // Insert data into the database (adjust SQL statement according to your database structure)
    $sql = "INSERT INTO nurse_medical_record (record_no, name, age, address,sex,status, birthplace, occupation, birthday, religion, contact_no, date)
            VALUES ('$record_no', '$name', '$age', '$address', '$sex','$status', '$birthplace', '$occupation', '$birthday', '$religion', '$contact_no', '$date')";

    if ($conn->query($sql) === true) {
        echo "<script>alert('Successfully inserted');window.location.href='registration.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>





<?php
// Establish a database connection (update with your database credentials)
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "parconhospital";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the database
$sql = "SELECT * FROM nurse_medical_record ORDER BY id DESC";
// Replace with your actual table name
$medical_record = $conn->query($sql);

?>








