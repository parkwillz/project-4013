<?php
$pageTitle = "Home";
include "view-header.php";
?>
<script src="https://cdn.jsdelivr.net/npm/animejs@3.2.1/lib/anime.min.js"></script>
<div class="text-center">
    <h1 class="display-4">NFL Database</h1>
    <p>Welcome! On this site you can view offensive skill position statistics for QBs, WRs and RBs</p>
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
<div class="text-center" style="margin-top:70px">
    <p>Click on a skill position to view their stats</p>
</div>

<script>
  anime({
  targets: 'img',
  keyframes: [
    {translateY: -40},
    {translateX: 250},
    {translateY: 40},
    {translateX: 0},
    {translateY: 0}
  ],
  duration: 10,
  easing: 'easeOutElastic(1, .8)',
  loop: true
});
</script>

<?php
include "view-footer.php";
?>
