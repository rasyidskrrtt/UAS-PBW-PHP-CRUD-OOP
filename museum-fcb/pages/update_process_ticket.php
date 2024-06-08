<?php
include('../includes/db.php');
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

if (isset($_POST['edit'])) {
    $database = new Database();
    $conn = $database->getConnection();

    $ticket_id = $_POST['ticket_id'];
    $buyer_name = $_POST['buyer_name'];
    $date = $_POST['date'];
    $num_visitors = $_POST['num_visitors'];
    $ticket_type = $_POST['ticket_type'];

    // Define ticket prices
    $price_per_visitor = 0;

    if ($ticket_type == 'FC Bayern Museum') {
        $price_per_visitor = 10; // Price per visitor for FC Bayern Museum
    } elseif ($ticket_type == 'FC Bayern Museum + Allianz Arena Tour') {
        $price_per_visitor = 15; // Price per visitor for FC Bayern Museum + Allianz Arena Tour
    }

    // Calculate total price based on the number of visitors
    $total_price = $num_visitors * $price_per_visitor;

    $sql = "UPDATE tickets SET buyer_name = :buyer_name, date = :date, num_visitors = :num_visitors, ticket_type = :ticket_type, price = :price WHERE id = :ticket_id";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':buyer_name', $buyer_name);
    $stmt->bindParam(':date', $date);
    $stmt->bindParam(':num_visitors', $num_visitors);
    $stmt->bindParam(':ticket_type', $ticket_type);
    $stmt->bindParam(':price', $total_price);
    $stmt->bindParam(':ticket_id', $ticket_id);

    if ($stmt->execute()) {
        header('Location: read_ticket.php?message=' . urlencode("Ticket successfully updated"));
    } else {
        echo "Error: " . $stmt->errorInfo()[2];
    }
} else {
    header('Location: read_ticket.php');
    exit();
}
?>
