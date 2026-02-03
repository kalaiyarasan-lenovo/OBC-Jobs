<?php
include("config/config_db.php");

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';

    if (empty($email)) {
        echo json_encode(["status" => "error", "message" => "Email is required."]);
        exit;
    } 
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(["status" => "error", "message" => "Please enter a valid email address."]);
        exit;
    }

    // Check if email already exists
    $check_query = "SELECT id FROM subscribers_table WHERE email = ?";
    $stmt = $conn->prepare($check_query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo json_encode(["status" => "error", "message" => "This email is already subscribed."]);
    } else {
        // Insert new subscriber
        $insert_query = "INSERT INTO subscribers_table (email) VALUES (?)";
        $stmt = $conn->prepare($insert_query);
        $stmt->bind_param("s", $email);

        if ($stmt->execute()) {
            echo json_encode(["status" => "success", "message" => "Thank you for your subscription!"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Error subscribing. Please try again."]);
        }
    }
    $stmt->close();
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request method."]);
}
?>
