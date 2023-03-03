<?php
    include_once("header.php");
    include_once("../config/database.php");
    include_once("../src/userFunctions.php");
    include_once("../src/databaseFunctions.php");
?>


    <div class="page lineup">
        <div class="container">
            <h1>Assortiment</h1>
            <div class="artists">
                <?php
                    try {
                        // get data from database
                        $lineup = db_getData("SELECT * FROM lineup");
                            while($artist = $lineup->fetch(PDO::FETCH_ASSOC))
                            {

                        ?>

                        <!-- laat alle images zien -->
                        <div class="artist">
                            <img src="<?php echo IMAGE_FOLDER . "/" . $artist['bootImage']; ?>">
                            <h3 class="artistName"><?php echo $artist['bootName']; ?></h3>
                        </div>
                        
                        <?php
                                    }
                        
                    } catch (PDOException $e)
                    {
                        // print error message
                        die("Error!: " . $e->getMessage());
                    }
                ?>
            </div>
        </div>
    </div>
    
<?php
    include_once("footer.php");
?>