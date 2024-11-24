<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAGIP-SIKLAB | Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #notification {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1050; /* Ensure it appears on top of other elements */
        }
    </style>
</head>
<body>
    <div id="notification" class="d-none"></div> <!-- Placeholder for Notification -->

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-12">
                <div class="card shadow">
                    <div class="card-header bg-danger text-white text-center">
                        <h3>SAGIP-SIKLAB Signup</h3>
                    </div>
                    <div class="card-body">
                        <form action="process_signup.php" method="POST" id="signupForm">
                            <div class="mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required>
                            </div>
                            <button type="submit" class="btn btn-danger w-100">Sign Up</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Handle notification visibility on page load (using PHP query params)
        document.addEventListener("DOMContentLoaded", () => {
            const urlParams = new URLSearchParams(window.location.search);
            const success = urlParams.get("success");

            if (success === "1") {
                showNotification("Signup successful!", "success");
            }
        });

        // Function to show notification
        function showNotification(message, type) {
            const notification = document.getElementById("notification");
            notification.className = `alert alert-${type} alert-dismissible fade show`;
            notification.innerHTML = `
                ${message}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            `;
            notification.classList.remove("d-none");
        }
    </script>
</body>
</html>
