<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collector Management</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
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
    <div class="main-content">
        <h1>Pending Applicants</h1>

        <!-- Check if any results exist -->
        <table border="1">
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Police Clearance</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>

            <?php
            // Database connection
            $conn = new mysqli('localhost', 'root', '', 'recyclelink');

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM collectors WHERE status = 'Pending'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row['full_name'] . "</td>
                            <td>" . $row['email'] . "</td>
                            <td>" . $row['phone'] . "</td>
                            <td>" . $row['address'] . "</td>
                            <td><a href='" . $row['police_clearance'] . "'>View Clearance</a></td>
                            <td>" . $row['status'] . "</td>
                            <td>
                                <a href='update_status.php?id=" . $row['id'] . "&status=Approved'>Approve</a> | 
                                <a href='update_status.php?id=" . $row['id'] . "&status=Rejected'>Reject</a>
                            </td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No pending applications</td></tr>";
            }

            $conn->close();
            ?>
        </table>
    </div>
</body>
</html>
