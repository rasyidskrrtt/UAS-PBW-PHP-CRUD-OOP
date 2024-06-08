<?php
include('../includes/db.php');
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$database = new Database();
$conn = $database->getConnection();

$query = $conn->query("SELECT * FROM tickets");

include('../includes/header.php');
?>

<div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h2>Tickets</h2>
                        <a href="ticket.php" class="btn btn-primary">Purchase Ticket</a>
                    </div>
                </div>
                <div class="card-body">
                    <?php if (isset($_GET['message'])) { ?>
                        <div class="alert alert-info"><?= htmlspecialchars($_GET['message']) ?></div>
                    <?php } ?>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Buyer Name</th>
                                <th>Date</th>
                                <th>Number of Visitors</th>
                                <th>Ticket Type</th>
                                <th>Price (€)</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = $query->fetch(PDO::FETCH_ASSOC)) { ?>
                                <tr>
                                    <td><?= $row['id'] ?></td>
                                    <td><?= $row['buyer_name'] ?></td>
                                    <td><?= $row['date'] ?></td>
                                    <td><?= $row['num_visitors'] ?></td>
                                    <td><?= $row['ticket_type'] ?></td>
                                    <td><?= $row['price'] ?></td>
                                    <td>
                                        <a href="edit_ticket.php?id=<?= $row['id'] ?>" class="btn btn-primary">Edit</a>
                                        <a href="delete_ticket.php?id=<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this ticket?');">Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
