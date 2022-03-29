<?php
    include_once("header.php");
    include_once("../src/userFunctions.php");

    // Check for user registration
    $newUser = null;
    if(isset($_POST['register'])){
        $newUser = registerUser($_POST['firstName'],$_POST['lastName'],$_POST['email'],$_POST['password']);
    }
?>

    <div class="page registreren">
        <div class="container">
            <h1>Registreren</h1>
            <?php if($newUser === 1){?>
                <p>Nieuwe gebruiker succesvol toegevoegd!</p>
            <?php }else{ ?>
            <form action="#" method="post">
                <div class="inputRow"> 
                    <label class="label" for="firstName">Voornaam</label> 
                    <input type="text" name="firstName"> 
                    <br><br>
                    <label class="label" for="lastName">Achternaam</label> 
                    <input type="text" name="lastName">
                    <br><br>
                    <label class="label" for="email">Email</label> 
                    <input type="email" name="email">
                    <br><br>
                    <label class="label" for="password">Wachtwoord</label> 
                    <input type="password" name="password">
                    <br><br>
                    <input type="submit" name="register" value="Registreer">
                </div>
            </form>
            <?php } ?>
        </div>
    </div>

<?php
    include_once("footer.php");
?>
