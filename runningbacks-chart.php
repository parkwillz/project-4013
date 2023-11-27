<?php
require_once("util-db.php");
require_once("model-runningbacks-chart.php");

$pageTitle = "Runningbacks Chart";
include "view-header.php";

$runningbacks = selectRunningbacks();
include "view-runningbacks-chart.php";
include "view-footer.php";
?>
