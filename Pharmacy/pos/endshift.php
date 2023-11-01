
<?php
// Replace with your actual database credentials
$hostname = "localhost";
$username = "root";
$password = "123456";
$dbname = "parconhospital";

// Create a database connection
$conn = mysqli_connect($hostname, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['endshift'])) {
    $username = $_POST['username'];

    // Validate the username
    if (!empty($username)) {
        // Query to select the user by username
        $select_query = "SELECT * FROM user_account WHERE username = '$username'";
        $result = mysqli_query($conn, $select_query);

        if (mysqli_num_rows($result) > 0) {
            // Fetch the user data
            $row = mysqli_fetch_assoc($result);
            $fullname = $row['fullname'];
            $status = "PAID";
            $outduty = date("m-d-Y H:i:s");

            // Query to update the user's status and fullname
            $update_query = "UPDATE pharmacy_sales SET status = '$status', stocker = '$fullname', outduty ='$outduty' Where status = 'UNPAID'";
            
            if (mysqli_query($conn, $update_query)) {
                // Redirect to another page
                echo '<script>window.location.href = "purchased.php";</script>';
            } else {
                echo "Error updating user: " . mysqli_error($conn);
            }
        } else {
            echo "User with username $username not found in the table.";
        }
    } else {
        echo "Username is required.";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
