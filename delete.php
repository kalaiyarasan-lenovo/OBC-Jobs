<?php
include("config/config_db.php");

header('Content-Type: application/json'); // Set the Content-Type to JSON

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);


    // Prepare and execute the delete query
    $query = "DELETE FROM records WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'Record deleted successfully.']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error deleting record: ' . $conn->error]);
    }
    $stmt->close();
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid ID.']);
}

$conn->close();
?>
