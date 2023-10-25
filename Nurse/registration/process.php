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








<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "parconhospital";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['nurseDel'])) {
    $No = $_GET['nurseDel'];

    // Sanitize the input to prevent SQL injection
    $No = $conn->real_escape_string($No);

    // Delete the record from the member table
    $delete_sql = "DELETE FROM nurse_medical_record WHERE id = $No";
    $result = $conn->query($delete_sql);

    if ($result) {
        header("location: registration.php");
        exit;
    } else {
        echo "Please check your Query";
    }
}
?>








<?php
// Include your database connection code here
// For example, include a file that connects to your database like "db_connection.php"

if (isset($_POST['update'])) {
    // Get the form data
    $id = $_POST['id'];
    $record_no = $_POST['record_no'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $status = $_POST['status'];
    $birthplace = $_POST['birthplace'];
    $occupation = $_POST['occupation'];
    $birthday = $_POST['birthday'];
    $religion = $_POST['religion'];
    $contact_no = $_POST['contact_no'];

    // Perform database update
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "parconhospital";

    $db = new mysqli($servername, $username, $password, $dbname);
    
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    // Prepare the SQL update statement
    $sql = "UPDATE nurse_medical_record SET 
        record_no = '$record_no',
        name = '$name',
        age = '$age',
        address = '$address',
        sex = '$gender',
        status = '$status',
        birthplace = '$birthplace',
        occupation = '$occupation',
        birthday = '$birthday',
        religion = '$religion',
        contact_no = '$contact_no'
        WHERE id = '$id'";

    if ($db->query($sql) === TRUE) {
        echo "<script>alert('Successfully updated');window.location.href='registration.php';</script>";
    } else {
        echo "Error updating record: " . $db->error;
    }

    $db->close();
}
?>
