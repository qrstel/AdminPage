<!DOCTYPE html>
<head>
    <title>Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="homepage.css">

    <body>
        <div class="grid-container">
            <header class="header">
                <div class="header-left">
                    <h4>Module</h4>
                </div>

                <div class="header-middle">
                    <h4>Dashboard - Admin</h4>
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
            <div class="board-alert">
                <div class="board-display">
                    <div class="board-display-inner">
                        <p class="board-alert-text">Pending Events</p>
                        <span class="material-symbols-outlined text-white"> pending_actions
                            </span>
                    </div>
                    <span class="board-alert-textcount">5</span>
                </div>

                <div class="board-display">
                    <div class="board-display-inner">
                        <p class="board-alert-text">Confirmed Events</p>
                        <span class="material-symbols-outlined text-white"> event_upcoming
                            </span>
                    </div>
                    <span class="board-alert-textcount">3</span>
                </div>

                <div class="board-display">
                    <div class="board-display-inner">
                        <p class="board-alert-text">Notification Alerts</p>
                        <span class="material-symbols-outlined text-white"> notification_important
                            </span>
                    </div>
                    <span class="board-alert-textcount">14</span>
                </div>
            </div>

            <div class="charts">
                <div class="charts-inventory">
                    <p class="inventory-title">Food Inventory Level</p>
                    <div id="bar-chart-food"></div>
                </div>
                <div class="charts-inventory">
                    <p class="inventory-title">Equipment Inventory Level</p>
                    <div id="bar-chart-equipment"></div>
                </div>
            </div>
           </main>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
        <script src="dashboardcharts.js"></script>
    </body>
</head>