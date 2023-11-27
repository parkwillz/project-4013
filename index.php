<?php
$pageTitle = "Home";
include "view-header.php";
?>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>-->
<!--<script src="https://cdn.jsdelivr.net/npm/animejs@3.2.1/lib/anime.min.js"></script>-->
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
<h1 class="ml6" style="text-align: center;">
  <span class="text-wrapper">
    <span class="letters">Click A Skill Position To View Stats</span>
  </span>
</h1>
<style>
    .ml6 {
  position: relative;
  font-weight: 450;

  font-size: 2.0em;
}

.ml6 .text-wrapper {
  position: relative;
  display: inline-block;
  padding-top: 0.2em;
  padding-right: 0.05em;
  padding-bottom: 0.1em;
  overflow: hidden;
}

.ml6 .letter {
  display: inline-block;
  line-height: 1em;
}
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<!--
<div class="text-center" style="margin-top:70px">
    <p>Click on a skill position to view their stats</p>
</div>
-->

<script>
  anime({
  targets: '.img-fluid',
  translateX: 0,
  rotate: '4turn',
  backgroundColor: '#FFF',
  duration: 1000
});
</script>

<script>
// Wrap every letter in a span
var textWrapper = document.querySelector('.ml6 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml6 .letter',
    translateY: ["1.1em", 0],
    translateZ: 0,
    duration: 750,
    delay: (el, i) => 50 * i
  }).add({
    targets: '.ml6',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
    </script>

<?php
include "view-footer.php";
?>
