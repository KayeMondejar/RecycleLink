<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RecycleLink Admin Panel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Side Navigation Bar -->
    <div class="sidebar">
        <h2>RecycleLink</h2>
        <ul>
            <li><a href="index.php" class="active">Dashboard</a></li>
            <li><a href="collector_admin.php">Collector Management</a></li>
            <li><a href="#">User Management</a></li>
            <li><a href="#">Pickup Management</a></li>
            <li><a href="#">Waste Management</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <h1>Welcome to the Admin Dashboard</h1>
        <div class="dashboard-cards">
            <div class="card">
                <h2>Total Users</h2>
                <p>
                    <?php
                        // Retrieve and display the total number of users
                        $total_users = 120; // Placeholder value, replace with database query
                        echo $total_users;
                    ?>
                </p>
            </div>
            <div class="card">
                <h2>Pending Pickup Requests</h2>
                <p>
                    <?php
                        // Retrieve and display the number of pending pickup requests
                        $pending_pickups = 8; // Placeholder value, replace with database query
                        echo $pending_pickups;
                    ?>
                </p>
            </div>
            <div class="card">
                <h2>Active Collectors</h2>
                <p>
                    <?php
                        // Retrieve and display the number of active collectors
                        $active_collectors = 15; // Placeholder value, replace with database query
                        echo $active_collectors;
                    ?>
                </p>
            </div>
            <div class="card">
                <h2>Waste Collected (kg)</h2>
                <p>
                    <?php
                        // Retrieve and display the total waste collected
                        $waste_collected = 2560; // Placeholder value, replace with database query
                        echo $waste_collected;
                    ?>
                </p>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
