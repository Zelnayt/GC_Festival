<?php
    include_once("header.php");
    include_once("../src/databaseFunctions.php");

    if (isset($_POST['order']))
    {
        // check of de user al besteld heeft
        $boot = $_POST['boot'];
        $dagdeel = $_POST['dagdeel'];
        $aantal = $_POST['aantal'];
        $datum = $_POST['datum'];
        $naam = $_POST['naam'];
        $nummer = $_POST['nummer'];
        $email = $_POST['email'];

        db_insertData("INSERT INTO orders (boot,dagdeel,aantal_personen,datum,naam,nummer,email) 
                        VALUES ('$boot','$dagdeel','$aantal','$datum','$naam','$nummer','$email')");
    }
?>


    <div class="page orderConfirmation">
        <div class="container">
            <h1>Bedankt voor uw reservering!</h1>
            <p>Uw reservering is succesvol geplaatst. U krijgt een bevestiging per email.</p>
            <p>U kunt nu terug naar de <a href="index.php">homepagina</a>.</p>
        </div>
    </div>
    
<?php
    include_once("footer.php");
?>