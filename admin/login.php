<?php
session_start();
require_once '../config.php';

if (isset($_SESSION['admin_logged_in'])) {
    header("Location: index.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header('Content-Type: application/json');
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');
    
    if (empty($username) || empty($password)) {
        echo json_encode(['status' => 'error', 'message' => 'Please enter username and password']);
        exit;
    }

    $stmt = $conn->prepare("SELECT * FROM admin_users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    // Verify password (assuming it's hashed using password_hash)
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['LAST_ACTIVITY'] = time(); // Set initial activity time
        echo json_encode(['status' => 'success']);
        exit;
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Invalid credentials']);
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login - Gestev K. Ltd</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
        }
        .login-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        .login-header {
            background: var(--bs-primary);
            color: white;
            padding: 30px 20px;
            text-align: center;
        }
        .login-header img {
            max-height: 50px;
            margin-bottom: 15px;
            background: white;
            padding: 5px 10px;
            border-radius: 5px;
        }
        .form-control:focus {
            box-shadow: none;
            border-color: var(--bs-primary);
        }
        .input-group-text {
            background: transparent;
            border-left: none;
            cursor: pointer;
        }
        .form-control.password-input {
            border-right: none;
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 col-lg-4">
                <div class="card login-card">
                    <div class="login-header">
                        <h4 class="mb-0 fw-bold">Admin Portal</h4>
                        <small class="opacity-75">Sign in to manage Gestev K. Ltd</small>
                    </div>
                    <div class="card-body p-4">
                        <form id="loginForm" method="POST">
                            <div class="mb-4">
                                <label class="form-label fw-semibold text-muted small text-uppercase">Username</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0"><i class="fas fa-user text-muted"></i></span>
                                    <input type="text" name="username" class="form-control bg-light border-start-0 ps-0" required placeholder="Enter username">
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-semibold text-muted small text-uppercase">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0"><i class="fas fa-lock text-muted"></i></span>
                                    <input type="password" name="password" id="passwordField" class="form-control password-input bg-light border-start-0 ps-0" required placeholder="Enter password">
                                    <span class="input-group-text toggle-password" onclick="togglePassword()">
                                        <i class="fas fa-eye text-muted" id="toggleIcon"></i>
                                    </span>
                                </div>
                            </div>
                            <button type="submit" name="login" class="btn btn-primary w-100 py-2 fw-bold shadow-sm rounded-3">
                                Sign In <i class="fas fa-sign-in-alt ms-2"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="text-center mt-4 text-muted small">
                    &copy; <?= date('Y') ?> Gestev K. Limited. All rights reserved.
                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
function togglePassword() {
    const passwordField = document.getElementById("passwordField");
    const toggleIcon = document.getElementById("toggleIcon");
    if (passwordField.type === "password") {
        passwordField.type = "text";
        toggleIcon.classList.remove("fa-eye");
        toggleIcon.classList.add("fa-eye-slash");
    } else {
        passwordField.type = "password";
        toggleIcon.classList.remove("fa-eye-slash");
        toggleIcon.classList.add("fa-eye");
    }
}

document.getElementById("loginForm").addEventListener("submit", function(e) {
    e.preventDefault();
    const btn = this.querySelector('button[type="submit"]');
    const originalText = btn.innerHTML;
    btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Authenticating...';
    btn.disabled = true;

    fetch("login.php", {
        method: "POST",
        body: new FormData(this)
    })
    .then(r => r.json())
    .then(data => {
        if (data.status === "success") {
            window.location.href = "index.php";
        } else {
            Swal.fire({ icon: "error", title: "Access Denied", text: data.message, confirmButtonColor: '#0d6efd' });
            btn.innerHTML = originalText;
            btn.disabled = false;
        }
    })
    .catch(() => {
        Swal.fire({ icon: "error", title: "Connection Error", text: "Could not connect to the server.", confirmButtonColor: '#0d6efd' });
        btn.innerHTML = originalText;
        btn.disabled = false;
    });
});
</script>
</body>
</html>
