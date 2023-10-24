
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
// Add this code at the top of your PHP script
var_dump($_POST);

    // Retrieve data from the form
    $article = $_POST['article'];
    $infoname = $_POST['info'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $supplier = $_POST['supplier'];
    $invoice_no = $_POST['invoice_no'];
    $invoice_date = $_POST['invoice_date'];
    $rop = $_POST['rop'];
    $stocker = $_POST['stocker'];
    $dateandtime = date('Y-m-d H:i:s');
    $day = date('d-m-y');     
    $month = date('m-y');    
    $year = date('Y');  

    $cost = $quantity * $price;    
    

// Now you can use $day, $month, and $year in your SQL query or elsewhere in your code.







    // Retrieve data for other fields similarly

    // Insert data into the database (adjust SQL statement according to your database structure)
    $sql = "INSERT INTO productpharmacy (article, info, quantity, price, cost, supplier, invoice_no, invoice_date, rop, stocker, dateandtime, day, month, year)
    VALUES ('$article', '$infoname', '$quantity', '$price', '$cost', '$supplier', '$invoice_no', '$invoice_date', '$rop', '$stocker', '$dateandtime', '$day', '$month', '$year')";

    if ($conn->query($sql) === true) {
        echo "<script>alert('Successfully inserted');window.location.href='index_in.php';</script>";
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
$sql = "SELECT * FROM productpharmacy"; // Replace with your actual table name
$pharmacy_product = $conn->query($sql);

?>