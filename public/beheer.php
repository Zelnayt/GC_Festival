<?php
    include_once("header.php");
    include_once("../src/userFunctions.php");
    include_once("../src/databaseFunctions.php");    

    // laat alle orders zien van de huidige dag
    $data = db_getData("SELECT * FROM orders");
?>

    <!-- maak een tabel met alle orders -->
    <div class="beheerContainer">
        <table id="beheerTable">
            <tr>
                <th>Order ID</th>
                <th>Boot</th>
                <th>Dagdeel</th>
                <th>Aantal personen</th>
                <th>Datum</th>
                <th>Naam</th>
                <th>Nummer</th>
                <th>Email</th>
                <th>CRUD</th>
            </tr>
            <?php
                // fetch alle orders uit de database van vandaag
                while ($order = $data->fetch(PDO::FETCH_ASSOC))
                { ?>
                    <tr>
                        <td><?php echo $order['orderID']; ?></td>
                        <td><?php echo $order['boot']; ?></td>
                        <td><?php echo $order['dagdeel']; ?></td>
                        <td><?php echo $order['aantal_personen']; ?></td>
                        <td><?php echo $order['datum']; ?></td>
                        <td><?php echo $order['naam']; ?></td>
                        <td><?php echo $order['nummer']; ?></td>
                        <td><?php echo $order['email']; ?></td>
                        <td>
                            <button>edit</button>
                            <button>delete</button><!-- O_O -->
                        </td>
                    </tr>
                <?php
                }
            ?>
        </table>
    </div>

<?php
    include_once "footer.php";
?>
