<?php
include('../includes/db.php');
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $database = new Database();
    $conn = $database->getConnection();

    $ticket_type = $_POST['ticket_type'];
    $user_id = $_SESSION['user_id'];
    $date = $_POST['date'];
    $num_visitors = $_POST['num_visitors'];
    $buyer_name = $_POST['buyer_name'];

    // Define ticket prices
    $price_per_visitor = 0;

    if ($ticket_type == 'FC Bayern Museum') {
        $price_per_visitor = 10; // Price per visitor for FC Bayern Museum
    } elseif ($ticket_type == 'FC Bayern Museum + Allianz Arena Tour') {
        $price_per_visitor = 15; // Price per visitor for FC Bayern Museum + Allianz Arena Tour
    }

    // Calculate total price based on the number of visitors
    $total_price = $num_visitors * $price_per_visitor;

    // Insert data into the database
    $sql = "INSERT INTO tickets (user_id, ticket_type, price, date, num_visitors, buyer_name) 
            VALUES (:user_id, :ticket_type, :price, :date, :num_visitors, :buyer_name)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':user_id', $user_id);
    $stmt->bindParam(':ticket_type', $ticket_type);
    $stmt->bindParam(':price', $total_price);
    $stmt->bindParam(':date', $date);
    $stmt->bindParam(':num_visitors', $num_visitors);
    $stmt->bindParam(':buyer_name', $buyer_name);

    if ($stmt->execute()) {
        header('Location: read_ticket.php?message=Ticket purchased successfully');
    } else {
        header('Location: read_ticket.php?message=Error: Unable to purchase ticket');
    }
}
?>
