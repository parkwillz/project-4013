<?php
require_once("util-db.php");
require_once("model-runningbacks.php");

$pageTitle = "Runningbacks Chart";
include "view-header.php";

$runningbacks = selectRunningbacks();
include "view-runningbacks.php";
include "view-footer.php";
?>
