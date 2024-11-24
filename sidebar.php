<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Sidebar with Toggle</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        .sidebar {
            width: 250px;
            background-color: #2b3e50;
            height: 100vh;
            position: fixed;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: width 0.3s;
            z-index: 100;
        }

        .sidebar.collapsed {
            width: 80px;
        }

        .sidebar-header {
            padding: 20px;
            background-color: #1a252f;
            color: #fff;
            text-align: center;
        }

        .sidebar-menu {
            padding: 0;
            margin: 0;
            flex-grow: 1;
        }

        .sidebar-menu li {
            list-style: none;
        }

        .sidebar-menu li a {
            display: block;
            padding: 15px 20px;
            color: #fff;
            text-decoration: none;
            transition: background 0.3s;
        }

        .sidebar-menu li a:hover,
        .sidebar-menu li a.active {
            background-color: #1a252f;
        }

        .sidebar-menu li a .material-icons {
            vertical-align: middle;
            margin-right: 10px;
        }

        .sidebar-footer {
            padding: 20px;
            background-color: #1a252f;
            text-align: center;
        }

        .sidebar-footer a {
            color: #fff;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .sidebar-footer a:hover {
            background-color: #2b3e50;
        }

        /* Main content adjustment */
        .content {
            margin-left: 250px;
            transition: margin-left 0.3s;
        }

        .content.collapsed {
            margin-left: 80px;
        }
    </style>
</head>
<body>
    <div class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <h2>SAGIP-SIKLAB</h2>
            <button class="btn btn-light" id="toggleSidebar" style="position: absolute; top: 10px; right: 10px;">☰</button>
        </div>
        <ul class="sidebar-menu">
            <li><a href="dashboard.php" class="d-flex align-items-center"><span class="material-icons">dashboard</span> Dashboard</a></li>
            <li><a href="calls.php" class="d-flex align-items-center"><span class="material-icons">phone</span> Calls</a></li>
            <li><a href="dispatches.php" class="d-flex align-items-center"><span class="material-icons">local_shipping</span> Dispatches</a></li>
            <li><a href="incidents.php" class="d-flex align-items-center"><span class="material-icons">report</span> Incidents</a></li>
            <li><a href="firestations.php" class="d-flex align-items-center"><span class="material-icons">local_fire_department</span> Fire Stations</a></li>
            <li><a href="report.php" class="d-flex align-items-center"><span class="material-icons">assignment</span> Report</a></li>
        </ul>
        <div class="sidebar-footer">
            <a href="login.php" class="d-flex align-items-center"><span class="material-icons">logout</span> Logout</a>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('toggleSidebar').addEventListener('click', function() {
            const sidebar = document.getElementById('sidebar');
            const content = document.getElementById('content');
            sidebar.classList.toggle('collapsed');
            content.classList.toggle('collapsed');
        });
    </script>
</body>
</html>
