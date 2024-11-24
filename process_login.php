<?php
include('dbcon.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = htmlspecialchars(trim($_POST['email']));
    $password = trim($_POST['password']);

    try {
        // Get all users from the Firebase `users` table
        $usersRef = $database->getReference('users');
        $users = $usersRef->getValue();

        if ($users) {
            foreach ($users as $key => $user) {
                if ($user['email'] === $email) {
                    if (password_verify($password, $user['password'])) {
                        // Redirect to dashboard or homepage on successful login
                        header("Location: dashboard.php");
                        exit;
                    } else {
                        // Invalid password
                        header("Location: login.php?error=1");
                        exit;
                    }
                }
            }
        }

        // User not found
        header("Location: login.php?error=2");
        exit;
    } catch (Exception $e) {
        die("Error logging in: " . $e->getMessage());
    }
} else {
    header("Location: login.php");
    exit;
}
?>