<!DOCTYPE html>
<html>
<head>
  <title>Pharmacy Management</title>
  
  <!-- Include DataTables CSS -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

  <!-- Include jQuery (required for DataTables) -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Include DataTables JavaScript -->
  <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  






  <!-- Import Google Icon Font -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    /* Custom CSS for the search field */
    .search-bar {
  display: flex;
  align-items: center;
  width: 300px;
  height: 40px;
  background-color: #f5f5f5;
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 0px 0px rgba(47, 46, 46, 0.1);
  border: 3px solid #bbdefb; /* Set the border color */
}


    .search-bar input {
      flex: 1;
      border: none;
      outline: none;
      padding: 10px;
      font-size: 16px;
      background-color: transparent;
      text-align: center;
    }

    .search-bar button {
      border: none;
      background-color: #bbdefb;
      color: #fff;
      padding: 10px;
      border-radius: 0 20px 20px 0;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .search-bar button:hover {
      background-color: #f44211;
    }

  

    .add-button {
  background-color: #bbdefb;
  color: #ffffff;
  border-radius: 50%;
  border: 3px solid #bbdefb; 
  width: 40px;
  height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-left: 20px;
   /* Add some margin to separate the buttons */
}




/* Add overlay form */

.overlay {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.7);
  z-index: 1;
  text-align: center;
}

.form-container {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background: white;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}

.my-form {
  /* Form styles */
}

.close-button {
  margin-top: 10px;
  background-color: #ccc;
  border: none;
  padding: 5px 10px;
  cursor: pointer;
  border-radius: 5px;
}

.close-button:hover {
  background-color: #aaa;
}








/* Form registration styles */

.my-form {
  max-height: 600px; /* Adjust the height as needed */
  overflow-y: auto;
}

.my-form h2 {
  text-align: center;
  margin-bottom: 20px;
}

.form-row {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 10px;
}

.form-row label {
  flex: 1;
  text-align: left;
  padding-right: 10px;
}

.form-row input {
  flex: 3;
}

.my-form button[type="submit"] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 10px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s;
}

.my-form button[type="submit"]:hover {
  background-color: #45a049;
}




.blue-button {
        background-color: lightgreen;
        color: green; /* Text color is set to white for visibility */
        padding: 10px 20px;
        border: none;
        border-radius: 0px;
        cursor: pointer;
    }

    table {
            width: 100%; /* Adjust the width as needed */
            margin: 0 auto; /* Center the table horizontally */
        }
        th, td {
            padding: 50px; 
            text-align: center; /* Center text horizontally within cells */
            font-size: 30px; /* Adjust the font size as needed */
            color: #333; /* Set the text color to a dark gray (#333), you can change it to your preferred color */
        }
        th {
            background-color: #bbdefb;
        }



        div.dataTables_wrapper input[type="search"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #e5e5e5;
        border-radius: 4px;
        background-color: #f5f5f5;
        color: green;
        font-size: 40px;
        transition: border-color 0.2s, box-shadow 0.2s;
    }

    /* Style the search input when focused */
    div.dataTables_wrapper input[type="search"]:focus {
        border-color: #87CEFA; /* Change the border color to light blue (#87CEFA) */
        box-shadow: 0 0 5px rgba(135, 206, 250, 0.5); /* Change the box shadow color to light blue */
    }



 /*  body {
            background-image: url('../img/pharmacy.png'); 
            background-size: cover; 
            background-repeat: no-repeat; 
        } 


*/


         
        .overlay1 {
  display: none; /* Add this line to hide the overlay by default */
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.7);
  z-index: 1;
  text-align: center;
}

.form-container1 {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background: white;
  padding: 40px; /* Adjust padding as needed */
  width: 20%; /* Increase the width as needed */
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}

@media (max-width: 768px) {
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}

@media (max-width: 576px) {

  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}

.submit-button {
  background-color: green;
  color: white;
  border: none;
  padding: 20px 35px; /* Increase the padding for width and height */
  cursor: pointer;
  border-radius: 10px; /* Increase the border-radius for rounded corners */
}

.cancel-button {
  background-color: red;
  color: white;
  border: none;
  padding: 20px 35px; /* Increase the padding for width and height */
  cursor: pointer;
  border-radius: 10px; /* Increase the border-radius for rounded corners */
}
.centered-text {
      text-align: center;
      font-size: 50px;
      
   


      
    }



    
  

        body {
  background-image: url('../img/bg2.jpg');
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center center;
}

        

  </style>

</head>
<body>


<nav>
  <div class="nav-wrapper blue lighten-1">

    <a href="index.html" class="brand-logo">
        <div style="max-width: 60px; max-height: 60px;">
          <img src="../img/spa.png" alt="Logo Description" style="width: 100%; height: 100%; object-fit: contain;">
        </div>
      </a>
      

    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down">
    <li><a href="index_out.php"><i class="fas fa-box"></i> Product</a></li>
    <li><a href="purchased.php"><i class="fas fa-shopping-cart"></i> Purchased</a></li>
    <li><a href="Sales.php"><i class="fas fa-chart-bar"></i> Sales</a></li>
    <li><a  href="../login.php"><i class="fas fa-sign-out-alt"></i> Log out</a></li>
    </ul>
  </div>
</nav>

<ul class="sidenav" id="mobile-demo">
<li ><a href="index_out.php"><i class="fas fa-box"></i> Product</a></li>
<li><a href="purchased.php"><i class="fas fa-shopping-cart"></i> Purchased</a></li>
<li><a href="Sales.php"><i class="fas fa-chart-bar"></i> Sales</a></li>
<li><a  href="../login.php"><i class="fas fa-sign-out-alt"></i> Log out</a></li>

</ul>

<br>
<br>
<!-- 
<center>
  <div class="search-bar">
    <input type="text" id="searchInput" class="text-input" placeholder="Search">
    <button onclick="performSearch()">
      <i class="fas fa-search"></i>
    </button>
  
  </div>

</center>
Navbar Start -->


<span>



  <button  id="exportButton" onclick="resetSearch()" class="add-button" style="display: inline;">
    <i class="fas fa-file-excel"></i>
  </button>

  <button id="toggleSearchButton" class="add-button" style="display: inline;">
  <i class="fas fa-search"></i>
  </button>



</span>


 
<br>
<br>




<table id="yourTableID" class="display">
    <thead style="background-color: #bbdefb;">
        <tr>            
            <th>End of Shift</th>
            <th>Pharmacy's</th>
            <th>Total Cost</th>
            <th>Download Excel</th>
        </tr>
    </thead>
    <tbody>
        <?php include 'process.php'; // Include the PHP file here ?>

        <?php
        $uniqueStockerData = array(); // Initialize an array to store unique stocker data

        while ($row = $Sales_report->fetch_assoc()):
            $stockerName = $row['stocker']; // Assuming the stocker name is in the 'stocker' column
            $dateTime = $row['outduty']; // Assuming the date and time is in the 'date_time' column
            $price = $row['cost']; // Assuming the price is in the 'cost' column

            // Create a unique key combining stocker name and date/time
            $uniqueKey = $stockerName . $dateTime;

            // Check if the unique key is not in the array
            if (!array_key_exists($uniqueKey, $uniqueStockerData)) {
                // Add the unique key to the array and initialize the total cost and date/time
                $uniqueStockerData[$uniqueKey] = array(
                    'name' => $stockerName,
                    'dateTime' => $dateTime,
                    'totalCost' => $price
                );
            } else {
                // If the unique key is already in the array, update the total cost
                $uniqueStockerData[$uniqueKey]['totalCost'] += $price;
            }
        endwhile;

        // Loop through the unique stocker data and display it
        foreach ($uniqueStockerData as $uniqueKey => $stockerInfo) {
        ?>
            <tr>
                <td><?= $stockerInfo['dateTime'] ?></td>
                <td><?= $stockerInfo['name'] ?></td>
                <td><?= $stockerInfo['totalCost'] ?></td>
                <td>
                    <a href="excel.php?outduty=<?php echo $stockerInfo['dateTime'] ?>">
                        <button class="excel-button">
                            <img src="../img/excel.ico" alt="Export to Excel" class="excel-icon">
                        </button>
                    </a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>







<div id="overlay" class="overlay">
  <div id="formContainer" class="form-container">
    <form id="registrationForm" class="my-form" action="submit_action.php" method="post">
      <h2> Pharmacy Stocks </h2>

      <div class="form-row">
        <label for="text">Article:</label>
        <input type="text" id="username" name="username" required>
        
      </div>

      <div class="form-row">
        <label for="text">Description:</label>
        <input type="text" id="email" name="email" required>
       
      </div>

      <div class="form-row">
        <label for="text">Quantity:</label>
        <input type="text" id="password" name="password" required>
     
      </div>

      <div class="form-row">
        <label for="text">Price:</label>
        <input type="text" id="confirmPassword" name="confirmPassword" required>
        
      </div>
      <div class="form-row">
        <label for="text">Supplier:</label>
        <input type="text" id="confirmPassword" name="confirmPassword" required>
        
      </div>

      <div class="form-row">
        <label for="text">Invoice No:</label>
        <input type="text" id="confirmPassword" name="confirmPassword" required>
        
      </div>
      
      <div class="form-row">
        <label for="text">Invoice Date:</label>
        <input type="date" id="confirmPassword" name="confirmPassword" required>
        
      </div>


      <div class="form-row">
        <label for="text">ROP:</label>
        <input type="text" id="confirmPassword" name="confirmPassword" required>
        
      </div>

      <button type="submit">Stock-In</button>
      <button type="submit" id="closeFormButton" class="close-button">Close</button>
    </form>
    
  </div>
</div>












<script src="table2excel.js"></script>
<script>


function exportToExcel() {
  var table2excel = new Table2Excel();
  table2excel.export(document.querySelectorAll("excell"));
}

// Attach the export function to the button click event
document.getElementById("exportButton").addEventListener("click", exportToExcel);






  function performSearch() {
    var input = document.getElementById('searchInput').value.toLowerCase();
    var tableRows = document.querySelectorAll("tbody tr");

    tableRows.forEach(function(row) {
      var rowData = row.textContent.toLowerCase();
      if (rowData.includes(input)) {
        row.style.display = "table-row";
      } else {
        row.style.display = "none";
      }
    });
  }









  




  $(document).ready(function() {
    var table = $('#yourTableID').DataTable({
        "paging": true, // Enable pagination
        "lengthMenu": [10, 25, 50, -1], // Define the number of entries per page
        "info": true, // Show entry count information
        "order": [[0, 'desc']] // Sort the first column (Date) in descending order
    });

    // Hide the search input initially
    $('.dataTables_filter').hide();

    $('#toggleSearchButton').on('click', function() {
        toggleSearchInput();
    });

    $('#searchButton').on('click', function() {
        performSearch(table);
    });
});

function toggleSearchInput() {
    var searchInput = $('.dataTables_filter');

    if (searchInput.is(':visible')) {
        searchInput.hide();
    } else {
        searchInput.show();
        $('#searchInput').focus();
    }
}

function performSearch(table) {
    var input = $('#searchInput').val().toLowerCase();

    // Use DataTables' built-in search
    table.search(input).draw();
}





function excel(date) {
    // Populate the form fields with the data
    document.getElementById('field1').value = date;


    // Show the overlay
    document.getElementById('overlay1').style.display = 'block';
}




        function closeForm() {
            // Hide the overlay
            document.getElementById('overlay1').style.display = 'none';
        }




</script>





<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
