<?php
require_once '../../includes/session.php';




// Clear some session data but not all
unset($_SESSION['user_id']);
unset($_SESSION['username']);
// Intentionally leave role and token


// session_regenerate_id();


// session_destroy();

header('Location: ../../index.php');
exit;
?>