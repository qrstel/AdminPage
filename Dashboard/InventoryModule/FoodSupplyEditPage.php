<!DOCTYPE html>
<head>
    <title>Inventory Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../DashboardPage/homepage.css">
    <body>
        <div class="grid-container">
                <header class="header">
                    <div class="header-left">
                        <h4>Module</h4>
                    </div>
    
                    <div class="header-middle">
                        <h4>Food Supply Inventory - Admin</h4>
                    </div>
   
              <div class="header-right">
                <span class="material-symbols-outlined">
                    <span class="admin-text">ADMIN</span> arrow_drop_down
                    </span>
              </div>
            </header>

           <aside id="sidebar">
            <div class="sidebar-header">
                <h1>Jacky's Catering</h1>
            </div>        
            <nav>
                <ul class="sidebar-module">
                    <li class="sidebar-items">
                        <span class="material-symbols-outlined"> dashboard
                        </span> <a href="../DashboardPage/Dashboard.php">Dashboard</a>
                    </li>
                    <li class="sidebar-items">
                        <span class="material-symbols-outlined"> dashboard
                        </span> <a href="../CalendarViewModule/CalendarView.html">Calendar View</a>
                    </li>
                    <li class="sidebar-items">
                        <span class="material-symbols-outlined"> receipt_long
                        </span> <a>Reservation List</a>
                                <ul class="dropdown">
                                    <li class="dropdown-link">
                                        <a href="../ReservationListModule/ReservationList.php">Pending Event</a>
                                </li>
                                <li class="dropdown-link">
                                        <a href="#">Confirmed Event</a>
                                    </li>
                                </ul>
                    </li>
                    <li class="sidebar-items">
                        <span class="material-symbols-outlined"> inventory_2
                        </span> <a>Inventory</a>
                                <ul class="dropdown">
                                    <li class="dropdown-link">
                                        <a href="../InventoryModule/EquipmentInventory.php">Equipment Inventory</a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="../InventoryModule/FoodSupplyInventory.php">Food Supply Inventory</a>
                                    </li>
                                </ul>
                    </li>
                    <li class="sidebar-items">
                        <span class="material-symbols-outlined"> receipt_long
                        </span> <a href="../SalesModule/Sales.html">Sales</a>
                    </li>
                    <li class="sidebar-items">
                        <span class="material-symbols-outlined"> diversity_3
                        </span> <a href="../StaffModule/Staff.php">Staff</a>
                    </li>
                    <li class="sidebar-items">
                        <span class="material-symbols-outlined"> dashboard
                        </span> <a href="../CustomerAccountModule/CustomerAccount.html">Customer Account</a>
                    </li>
                    <li class="sidebar-items">
                        <span class="material-symbols-outlined"> diversity_3
                        </span> <a href="../ArchiveModule/Archive.html">Archive</a>
                    </li>
                    <li class="sidebar-items">
                        <span class="material-symbols-outlined"> settings
                        </span> <a href="../ActivityLogsModule/ActivityLogs.html">Activity Logs</a>
                    </li>
                </ul>
            </nav>
           </aside>

           <main class="main">

<!-- UPDATING USER -->
<div class="container">
    <div class="text-center mb-4">
         <h3>Edit Ingredients</h3>
            <p class="text-muted">Complete the form below to update an ingredient</p>
    </div>

    <?php
    include "../dbConnection/conn.php";
    
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        $sql = "SELECT * FROM foodsupply WHERE id = '$id' LIMIT 1";
        $result = mysqli_query($conn, $sql);
        
        if ($result) {
            $row = mysqli_fetch_assoc($result);
            // The code to handle the fetched data
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
        ?>
          
    <div class="container d-flex justify-content-center">
        <form action="foodsupply_edit.php?id=<?php echo $_GET['id']; ?>" style="width:50vw; min-width:300px;" method="POST">

    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Product Name:</label>
            <input type="text" class="form-control" name="productName" value="<?php echo $row['productName'] ?? ''; ?>">
        </div>

        <div class="col">
            <label class="form-label">Quantity:</label>
            <input type="text" class="form-control" name="productQuantity" value="<?php echo $row['productQuantity'] ?? ''; ?>">
        </div>
    </div>

    <div class="row mb-3">
    <label class="form-label">Category:</label>
    
    <div class="form-check" style="margin-left: 15px;">
        <input class="form-check-input" type="radio" name="productCategory" id="flexRadioDefault1" 
        value="Meat" <?php echo ($row["productCategory"] == 'Meat') ? "checked" : ""; ?>> 
        <label class="form-check-label" for="flexRadioDefault1">Meat</label>
    </div>

    <div class="form-check" style="margin-left: 15px;">
        <input class="form-check-input" type="radio" name="productCategory" id="flexRadioDefault2" 
        value="Seafood" <?php echo ($row["productCategory"] == 'Seafood') ? "checked" : ""; ?>> 
        <label class="form-check-label" for="flexRadioDefault2">Seafood</label>
    </div>

    <div class="form-check" style="margin-left: 15px;">
        <input class="form-check-input" type="radio" name="productCategory" id="flexRadioDefault3" 
        value="Vegetables" <?php echo ($row["productCategory"] == 'Vegetables') ? "checked" : ""; ?>> 
        <label class="form-check-label" for="flexRadioDefault3">Vegetables</label>
    </div>

    <div class="form-check" style="margin-left: 15px;">
        <input class="form-check-input" type="radio" name="productCategory" id="flexRadioDefault4" 
        value="Fruits" <?php echo ($row["productCategory"] == 'Fruits') ? "checked" : ""; ?>> 
        <label class="form-check-label" for="flexRadioDefault4">Fruits</label>
    </div>

    <div class="form-check" style="margin-left: 15px;">
        <input class="form-check-input" type="radio" name="productCategory" id="flexRadioDefault5" 
        value="Condiments" <?php echo ($row["productCategory"] == 'Condiments') ? "checked" : ""; ?>> 
        <label class="form-check-label" for="flexRadioDefault5">Condiments</label>
    </div>

    <div class="form-check" style="margin-left: 15px;">
        <input class="form-check-input" type="radio" name="productCategory" id="flexRadioDefault6" 
        value="Beverages" <?php echo ($row["productCategory"] == 'Beverages') ? "checked" : ""; ?>> 
        <label class="form-check-label" for="flexRadioDefault6">Beverages</label>
    </div>
</div>

    <div>
        <button type="submit" class="btn btn-success" name="submit">Save</button>
        <a href="FoodSupplyInventory.php" class="btn btn-danger">Cancel</a>
    </div>
</form>
    </div>
</div>
    </main>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</head>