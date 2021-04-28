<?php
    include  __DIR__ .'/partials/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Css -->
    <link rel="stylesheet" href="css/style.css?v=XXXXX<?php echo time(); ?>">

    <title>Lista Dischi</title>
</head>
<body>
    <!-- Header -->
    <?php
        include  __DIR__ .'/partials/header.php';
    ?>
    <!-- /Header -->

    <!-- Main -->
    <main>
        <div class="container">

            <!-- song -->
            <div id ="section_cd">
                
                    <?php foreach ($database as $song) {?>

                        <div class="box">
                            <div class="album_song">
                                <img src="<?php echo $song['poster'] ?>" alt="Album song">
                            </div>

                            <div class="title_song">
                                <?php echo "<h1>" . $song['title'] ."</h1>" ?>
                            </div>

                            <div class="artist_age">
                                <?php echo "<p>" . $song['author'] ."</p>"; ?>
                                <?php echo "<p>" . $song['year'] ."</p>"; ?>
                            </div> 
                        </div> 

                    <?php } ?>
            </div>
            <!-- /song -->
        </div>
    </main>
    <!-- Main -->
</body>
</html>