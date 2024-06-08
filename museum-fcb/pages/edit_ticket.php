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
    $query = $conn->prepare("SELECT * FROM tickets WHERE id = :ticket_id");
    $query->bindParam(':ticket_id', $ticket_id);
    $query->execute();
    
    if ($query && $query->rowCount() > 0) {
        $data = $query->fetch(PDO::FETCH_ASSOC);
        ?>
        <!DOCTYPE html>
        <html lang="en">
        
        <head>
            <title>Edit Ticket</title>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        </head>
        
        <body>
            <div class="container my-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-0">
                            <div class="card-header">
                                <div class="d-flex justify-content-between">
                                    <h2>Edit Ticket</h2>
                                    <a href="read_ticket.php" class="btn btn-primary">View Tickets</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="update_process_ticket.php" method="post">
                                    <input type="hidden" name="ticket_id" value="<?= $ticket_id ?>">
                                    <div class="mb-4">
                                        <label for="buyer_name" class="form-label">Buyer Name</label>
                                        <input type="text" name="buyer_name" id="buyer_name" class="form-control" value="<?= $data['buyer_name'] ?>" required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="date" class="form-label">Date</label>
                                        <input type="date" name="date" id="date" class="form-control" value="<?= $data['date'] ?>" required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="num_visitors" class="form-label">Number of Visitors</label>
                                        <input type="number" name="num_visitors" id="num_visitors" class="form-control" value="<?= $data['num_visitors'] ?>" required min="1">
                                    </div>
                                    <div class="mb-4">
                                        <label for="ticket_type" class="form-label">Ticket Type</label>
                                        <input type="text" name="ticket_type" id="ticket_type" class="form-control" value="<?= $data['ticket_type'] ?>" required readonly>
                                    </div>
                                    <button type="submit" name="edit" class="btn btn-primary">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>
        
        </html>
        <?php
    } else {
        echo "Ticket not found.";
    }
}
?>
