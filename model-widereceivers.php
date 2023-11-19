<?php
function selectWidereceivers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT widereceiver_id, widereceiver_name, widereceiver_rec, widereceiver_yards, widereceiver_tds FROM `widereceiver`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertWidereceivers($wName, $wRec, $wYards, $wTDs) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO widereceiver (widereceiver_name, widereceiver_rec, widereceiver_yards, widereceiver_tds) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("siii", $wName, $wRec, $wYards, $wTDs);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateWidereceivers($wName, $wRec, $wYards, $wTDs, $wrid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update widereceiver set widereceiver_name = ?, widereceiver_rec = ?, widereceiver_yards = ?, widereceiver_tds = ? where widereceiver_id = ?");
        $stmt->bind_param("siiii", $wName, $wRec, $wYards, $wTDs, $wrid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteWidereceivers($wrid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from widereceiver where widereceiver_id=?");
        $stmt->bind_param("i", $wrid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
