<?php
if (!isset($_SESSION["role"]) || $_SESSION["role"] !== "admin") {
    header("Location: ../SignUps/Alogin.php");
    exit();
}
?>
<footer class="bg-white text-dark py-2 fixed-bottom" style="height: 50px; box-shadow: 0 -2px 10px rgba(0,0,0,0.2);">
    <div class="container d-flex justify-content-between align-items-center h-100">
        
    </div>
</footer>
