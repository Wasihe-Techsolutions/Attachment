<?php
// Check if user is logged in
if (!isset($_SESSION["user_id"]) || $_SESSION["role"] !== "student") {
    header("Location: ../../SignUps/Slogin.php");
    exit();
}
?>
<footer class="bg-blue text-white p-3 fixed-bottom" style="z-index: 1030;">
    <div class="container-fluid text-center">
        <p class="mb-0">© <?= date('Y') ?>Student Portal</p>
        
</footer>
