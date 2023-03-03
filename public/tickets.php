<?php
    include_once("header.php");
    include_once("../src/userFunctions.php");
    include_once("../src/databaseFunctions.php");

    $boten = db_getData("SELECT * FROM boten");
    $dagdelen = db_getData("SELECT * FROM dagdelen");
?>
    <div class="page tickets">
        <div class="container">
            <h1>Huur uw boot</h1>
            <form action="orderConfirmation.php" method="post" class="menuOrder">
                <table>
                    <tr>
                        <td>Soort boot:</td>
                        <td>
                            <select name="boot">
                            <?php
                                // fetch alle boten uit de database
                                while ($boot = $boten->fetch(PDO::FETCH_ASSOC))
                            { ?>
                                <option name="boten"  value="<?php echo $boot['bootNaam']; ?>"><?php echo $boot['bootNaam']; ?></option>
                            <?php
                                }
                            ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Selecteer dagdeel:</td>
                        <td>
                            <select name="dagdeel">
                            <?php
                                // fetch alle dagdelen uit de database
                                while ($dagdeel = $dagdelen->fetch(PDO::FETCH_ASSOC))
                            { ?>
                                <option name="dagdelen" value="<?php echo $dagdeel['dagdeel']; ?>"><?php echo $dagdeel['dagdeel']; ?></option>
                            <?php
                                }
                            ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Aantal personen:</td>
                        <td>
                            <input type="number" name="aantal" id="" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Selecteer datum:</td>
                        <td>
                            <input type="date" name="datum" id="" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Vul uw naam in:</td>
                        <td>
                            <input type="text" name="naam" id="" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Vul uw nummer in:</td>
                        <td>
                            <input type="text" name="nummer" id="" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Vul uw email in:</td>
                        <td>
                            <input type="email" name="email" id="" required>
                        </td>
                    </tr>
                </table>
                <br>
                <input type="submit" name="order" value="Bestellen">
            </form>
            </div>
        </div>
        <?php
            include_once "footer.php";
        ?>