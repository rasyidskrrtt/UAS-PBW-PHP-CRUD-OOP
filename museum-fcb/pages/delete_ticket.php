<?php
include('../includes/db.php');
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

if (isset($_GET['id'])) {
    $ticket_id = $_GET['id'];

    $database = new Database();
    $conn = $database->getConnection();

    $sql = "DELETE FROM tickets WHERE id=:id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $ticket_id);

    if ($stmt->execute()) {
        header('Location: read_ticket.php?message=' . urlencode("Ticket successfully deleted"));
    } else {
        header('Location: read_ticket.php?message=' . urlencode("Failed to delete ticket"));
    }
} else {
    header('Location: read_ticket.php');
    exit();
}
?>
