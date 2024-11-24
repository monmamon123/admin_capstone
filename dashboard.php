<?php 
include('dbcon.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v2.12.0/mapbox-gl.css' rel='stylesheet' />
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v2.12.0/mapbox-gl.js'></script>
</head>
<body class="d-flex vh-100">
    <?php include 'sidebar.php'; ?>
    
    <div class="container-fluid d-flex flex-column p-0">
        <!-- Topbar -->
        <div class="d-flex align-items-center bg-light shadow-sm p-2">
            <button id="toggleSidebar" class="btn btn-light d-flex align-items-center me-auto">
                <span class="material-icons">menu</span>
            </button>
            <div class="d-flex align-items-center">
                <span class="material-icons me-2">notifications</span>
                <span class="material-icons me-2">account_circle</span>
                <span>Juan Masipag</span>
            </div>
        </div>

        <!-- Header -->
        <div class="p-3">
            <div class="row g-3">
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="bg-primary text-white text-center rounded p-3">
                        <strong>Total Incidents Report Today</strong>
                        <div>10</div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="bg-warning text-dark text-center rounded p-3">
                        <strong>Active Incidents</strong>
                        <div>2</div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="bg-success text-white text-center rounded p-3">
                        <strong>Dispatched Fire Trucks</strong>
                        <div>6</div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="bg-danger text-white text-center rounded p-3">
                        <strong>Number of Calls Today</strong>
                        <div>20</div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="bg-info text-white text-center rounded p-3">
                        <strong>Resolved Incidents</strong>
                        <div>10</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Map -->
        <div id="map_dashboard" class="flex-grow-1 rounded border mt-3"></div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>
