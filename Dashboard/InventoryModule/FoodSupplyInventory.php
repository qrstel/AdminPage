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
        <h1>Inventory Management</h1> 
        <div class="container" id="itemGrid">

        <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  '.$msg.'
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    }
    ?>
    
    <button type="button" id="insertItembtn" class="btn btn-dark mb-4 mt-3">Add New Food Supply</button>
    <table class="table table-hover text-center shadow p-3 mb-5 bg-body-tertiary rounded">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Product Name</th>
          <th scope="col">Quantity</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
        </tr>
      </thead>

      <tbody>
        <?php
        include "../dbConnection/conn.php";
        $sql = "SELECT * FROM foodsupply";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["productName"] ?></td>
            <td><?php echo $row["productQuantity"] ?></td>
            <td><?php echo $row["productCategory"] ?></td>
            <td>
            <a href="FoodSupplyEditPage.php?id=<?php echo $row["id"] ?>" class="btn btn-outline-success me-2"
            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Edit</a>
            <a href="#?id=<?php echo $row["id"] ?>" class="btn btn-outline-danger"
            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Archive</a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

<!-- ADDING FOOD SUPPLY -->
<div class="container" id="itemForm" style="display:none;">
    <div class="text-center mb-4">
         <h3>Add New Food Supply</h3>
            <p class="text-muted">Complete the form below to add an ingredients</p>
    </div>
          
    <div class="container d-flex justify-content-center">
        <form action="foodsupply_add.php" method="post" style="width:50vw; min-width:300px;">

            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Product Name:</label>
                    <input type="text" class="form-control" name="productName" placeholder="Item" required>
                </div>
          
                <div class="col">
                    <label class="form-label">Quantity:</label>
                    <input type="number" class="form-control" name="productQuantity" placeholder="0" required>
                </div>
            </div>

            <div class="row mb-3">
    <label class="form-label">Category:</label>
    <div class="form-check" style="margin-left: 15px;">
        <input class="form-check-input" type="radio" name="productCategory" id="flexRadioDefault1" 
        value="Meat"> 
        <label class="form-check-label" for="flexRadioDefault1">Meat</label>
    </div>
    <div class="form-check" style="margin-left: 15px;">
        <input class="form-check-input" type="radio" name="productCategory" id="flexRadioDefault2" 
        value="Seafood"> 
        <label class="form-check-label" for="flexRadioDefault2">Seafood</label>
    </div>
    <div class="form-check" style="margin-left: 15px;">
        <input class="form-check-input" type="radio" name="productCategory" id="flexRadioDefault3" 
        value="Vegetables"> 
        <label class="form-check-label" for="flexRadioDefault3">Vegetables</label>
    </div>
    <div class="form-check" style="margin-left: 15px;">
        <input class="form-check-input" type="radio" name="productCategory" id="flexRadioDefault4" 
        value="Fruits"> 
        <label class="form-check-label" for="flexRadioDefault4">Fruits</label>
    </div>
    <div class="form-check" style="margin-left: 15px;">
        <input class="form-check-input" type="radio" name="productCategory" id="flexRadioDefault5" 
        value="Condiments"> 
        <label class="form-check-label" for="flexRadioDefault5">Condiments</label>
    </div>
    <div class="form-check" style="margin-left: 15px;">
        <input class="form-check-input" type="radio" name="productCategory" id="flexRadioDefault6" 
        value="Beverages"> 
        <label class="form-check-label" for="flexRadioDefault6">Beverages</label>
    </div>
</div>

<div>
    <button type="submit" class="btn btn-success" name="submit">Save</button>
    <button type="button" id="goBackBtn" class="btn btn-danger">Cancel</button>
</div>
</form>
</div>

</div>
           </main>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="InventoryScript.js"></script>
    </body>
</head>