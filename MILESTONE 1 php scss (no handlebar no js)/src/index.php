<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>ex-dischi-musicali</title>
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="app.css">

        <?php
        include 'db.php';
        ?>
    </head>
    <body>
        <header>
            <div class="container">
                <img src="img/logo.png" alt="logo" />
            </div>
        </header>

        <div class="cds-container">
            <!-- I CD SARANNO INSERITI QUI -->
            <?php
              foreach ($db as $album) {?>
                <div class='cd'>
        						<img src="<?php echo $album["poster"]; ?>"/>
        						<h3><?php echo $album["title"]; ?></h3>
        						<span class="author"><?php echo $album["author"]; ?></span>
        						<span class="year"><?php echo $album["year"]; ?></span>
        				</div>
              <?php } ?>


        </div>

    </body>
</html>
