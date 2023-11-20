<?php
function selectRunningbacks() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT runningback_id,runningback_name, runningback_yards, runningback_attempts, runningback_tds FROM `runningback`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertRunningbacks($rName, $rYards, $rAtt, $rTDs) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO runningback (runningback_name, runningback_yards, runningback_attempts, runningback_tds) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("siii", $rName, $rYards, $rAtt, $rTDs);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateRunningbacks($rName, $rYards, $rAtt, $rTDs, $rbid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update runningback set runningback_name = ?, runningback_yards = ?, runningback_attempts = ?, runningback_tds = ? where runningback_id = ?");
        $stmt->bind_param("siiii", $rName, $rYards, $rAtt, $rTDs, $rbid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteRunningbacks($rbid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from runningback where runningback_id=?");
        $stmt->bind_param("i", $rbid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
