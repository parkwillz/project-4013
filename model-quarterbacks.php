<?php
function selectQuarterbacks() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT quarterback_id, quarterback_name, quarterback_yards, quarterback_tds, quarterback_ints FROM `quarterback`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertQuarterbacks($qName, $qYards, $qTDs, $qInts) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO quarterback (quarterback_name, quarterback_yards, quarterback_tds, quarterback_ints) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("siii", $qName, $qYards, $qTDs, $qInts);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateQuarterbacks($qName, $qYards, $qTDs, $qInts, $qbid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update quarterback set quarterback_name = ?, quarterback_yards = ?, quarterback_tds = ?, quarterback_ints = ? where quarterback_id = ?");
        $stmt->bind_param("siiii", $qName, $qYards, $qTDs, $qInts, $qbid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteQuarterbacks($qbid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from quarterback where quarterback_id=?");
        $stmt->bind_param("i", $qbid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
