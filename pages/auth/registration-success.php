<?php
require_once '../../includes/session.php';
require_once '../../config/env.php';
require_once '../../templates/header.php';
require_once '../../templates/nav.php';

$token = $_GET['token'] ?? '';
$verify_link = BASE_URL . "/pages/auth/verify.php?token=" . $token;
?>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body p-5 text-center">
                    <div class="mb-4">
                        <i class="fas fa-check-circle text-success fa-5x animate__animated animate__bounceIn"></i>
                    </div>
                    <h2 class="fw-bold mb-3">Registration Successful!</h2>
                    <p class="text-muted mb-4 fs-5">Your account has been created. In a production environment, we would send a verification email, but for this lab, you can verify your account using the link below:</p>
                    
                    <div class="alert alert-info py-4 px-3 mb-4 rounded-3 border-0">
                        <p class="mb-2 fw-bold text-primary">Verification Link:</p>
                        <div class="input-group">
                            <input type="text" class="form-control text-center bg-white border-0 py-3 rounded-pill shadow-sm" id="verify-link" value="<?php echo htmlspecialchars($verify_link); ?>" readonly>
                        </div>
                    </div>
                    
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center mt-4">
                        <a href="<?php echo $verify_link; ?>" class="btn btn-success btn-lg px-5 rounded-pill shadow-sm">
                            <i class="fas fa-user-check me-2"></i> Verify Now
                        </a>
                        <a href="login.php" class="btn btn-outline-primary btn-lg px-4 rounded-pill">
                            Go to Login
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once '../../templates/footer.php'; ?>
