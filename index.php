<?php
$pageTitle = "Home";
include "view-header.php";
?>
<div class="text-center">
    <h1 class="display-4">Welcome to our NFL Database</h1>
    <p>On this site you can view offensive skill position statistics for QBs, WRs and RBs</p>
</div>

<div class="row mt-5 d-flex justify-content-center">
    <div class="col-md-4 d-flex align-items-center">
        <img src="/Contents/hurts.jpeg" class="img-fluid" alt="Jalen Hurts">
    </div>
    <div class="col-md-2 d-flex flex-column justify-content-center">
        <img src="/Contents/NFL-logo.png" class="img-fluid" />
    </div>
    <div class="col-md-4 d-flex flex-column justify-content-center">
        <img src="/Contents/waddle.jpeg" class="img-fluid" alt="Jaylen Waddle">
    </div>
</div>
<div class="text-center">
    <p>Click on a skill position to view their stats</p>
</div>

<?php
include "view-footer.php";
?>
