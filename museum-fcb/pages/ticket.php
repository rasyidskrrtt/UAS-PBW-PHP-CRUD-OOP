<?php
include('../includes/header.php');
?>
<div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <?php
            if (isset($_GET['message'])) {
                $message = $_GET['message'];
            ?>
                <div class="alert alert-danger my-4"><?= $message ?></div>
            <?php
            }
            ?>
            <div class="card border-0">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h2>Purchase Ticket</h2>
                        <a href="read_ticket.php" class="btn btn-primary">View Tickets</a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="add_process_ticket.php" method="post">
                        <div class="mb-4">
                            <label for="buyer_name" class="form-label">Buyer Name</label>
                            <input type="text" name="buyer_name" id="buyer_name" class="form-control" required>
                        </div>
                        <div class="mb-4">
                            <label for="date" class="form-label">Date</label>
                            <input type="date" name="date" id="date" class="form-control" required>
                        </div>
                        <div class="mb-4">
                            <label for="num_visitors" class="form-label">Number of Visitors</label>
                            <input type="number" name="num_visitors" id="num_visitors" class="form-control" required min="1">
                        </div>
                        <div class="mb-4">
                            <label for="ticket_type" class="form-label">Ticket Type</label>
                            <select name="ticket_type" id="ticket_type" class="form-select" required>
                            <option value="">Please select ticket type</option>
                            <option value="FC Bayern Museum">FC Bayern Museum - €10 per visitor</option>
                            <option value="FC Bayern Museum + Allianz Arena Tour">FC Bayern Museum + Allianz Arena Tour - €15 per visitor</option>
                            </select>
                        </div>
                        <button type="submit" name="add" class="btn btn-primary">Purchase</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
