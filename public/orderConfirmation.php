<?php
    include_once("header.php");
    include_once("../src/databaseFunctions.php");

    // Check for order
    if(isset($_POST['order'])){
        $userID = $_POST['userID'];
        $ticketID = $_POST['ticketSelect'];
        $amount = $_POST['amount'];


        $order = db_insertData("INSERT INTO orders (userID,ticketID,amount) VALUES ('$userID','$ticketID','$amount')");
        $newOrder = db_getData("SELECT * FROM orders INNER JOIN tickets ON orders.ticketID = tickets.id WHERE orders.id = " . $order);
    }
?>


    <div class="page orderConfirmation">
        <div class="container">
            <h1>Bedankt voor de bestelling!</h1>
            <table class="orderOverview" border="1">
                <tr>
                    <th>Ticket</th>
                    <th>Aantal</th>
                    <th>Prijs</th>
                </tr>
                <tr>
                    <?php
                    while($orderData = $newOrder->fetch_assoc()){
                        ?>
                        <td><?php echo $ticketID; ?></td>
                        <td><?php echo $amount; ?></td>
                        <td>€ <?php echo $amount * $orderData['price']; ?></td>
                        <?php
                    }
                    ?>
                </tr>
            </table>
        </div>
    </div>
    
<?php
    include_once("footer.php");
?>