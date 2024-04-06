<?php
// Include the database connection parameters
include_once 'config.php';

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the amount, payment method, and UPI ID from the form submission
    $amount = $_POST['moneyAmount'];
    $paymentMethod = $_POST['paymentMethod'];
    $upiId = $_POST['upiId'];

    // Print or echo the received form data for debugging
    echo "Received Amount: " . $amount . "<br>";
    echo "Received Payment Method: " . $paymentMethod . "<br>";
    echo "Received UPI ID: " . $upiId . "<br>";

    // Prepare the SQL statement to insert the transaction into the database
    $stmt = $conn->prepare("INSERT INTO transactions (amount, payment_method, upi_id) VALUES (?,?,?)");
    $stmt->bind_param("dss", $amount, $paymentMethod, $upiId);

    // Execute the SQL statement
    if ($stmt->execute()) {
        echo "Transaction added successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
} else {
    echo "No form submission detected!";
}

// Close the database connection
$conn->close();
?>