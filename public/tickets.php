<?php
    include_once("header.php");
    include_once("../src/userFunctions.php");
    include_once("../src/databaseFunctions.php");

    $tickets = db_getData("SELECT * FROM tickets");

    // Check users login
    $user = null;
    if (isset($_POST['login']))
    {
        $user = getUser($_POST["email"],$_POST["wachtwoord"]);
    }
?>
    <div class="page tickets">
        <div class="container">
            <h1>Tickets bestellen</h1>
            <?php if($user !== "No user found" && $user !== null){?>
            <form action="orderConfirmation.php" method="post">
                <table>
                <?php
                    while($userData = $user->fetch_assoc())
                    { ?>
                        <td>Gebruikers ID:</td>
                        <td><input type="number" name="userID" value="<?php echo $userData['id']; ?>"></td>
                    <?php
                    }
                    ?>
                    <tr>
                            
                    </tr>
                    <tr>
                        <td>Tickets:</td>
                        <td>
                            <select name="ticketSelect">
                            <?php
                                while ($ticket = $tickets->fetch_assoc())
                            { ?>
                                <option name="<?php echo $ticket['name']; ?>" value="<?php echo $ticket['id']; ?>"><?php echo $ticket['name']; echo " €"; echo $ticket['price']; ?></option> <!-- echo " €"; echo $ticket['price']; -->
                            <?php
                                }
                            ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Hoeveelheid:</td>
                        <td><input type="number" name="amount" value="1"></td>
                    </tr>
                </table>
                <br>
                <input type="submit" name="order" value="Bestellen">
            </form>
            <?php } else { ?>
            <form action="#" method="post">
                <table>
                    <tr>
                        <td>Email:</td>
                        <td><input type="text" name="email"></td>
                    </tr>
                    <tr>
                        <td>Wachtwoord:</td>
                        <td><input type="text" name="wachtwoord"></td>
                    </tr>
                </table>
                <br>
                <input type="submit" name="login" value="Login">
            </form>
            <?php } ?>
            </div>
        </div>
        <?php
            include_once "footer.php";
        ?>