<?php
    include_once("header.php");
    include_once("../config/database.php");
    include_once("../src/userFunctions.php");
    include_once("../src/databaseFunctions.php");
?>


    <div class="page lineup">
        <div class="container">
            <h1>Line-up</h1>
            <div class="artists">
                <?php
                    try {

                        $lineup = db_getData("SELECT * FROM lineup");
                        
                        if ($lineup -> num_rows > 0)
                        {
                            while($artist = $lineup->fetch_assoc())
                            {

                        ?>

                        <div class="artist">
                            <img src="<?php echo IMAGE_FOLDER . "/" . $artist['artistImage']; ?>">
                            <h3 class="artistName"><?php echo $artist['artistName']; ?></h3>
                        </div>
                        
                        <?php
                                    }
                                }
                        
                    } catch (PDOException $e)
                    {
                        die("Error!: " . $e->getMessage());
                    }
                ?>
            </div>
        </div>
    </div>
    
<?php
    include_once("footer.php");
?>