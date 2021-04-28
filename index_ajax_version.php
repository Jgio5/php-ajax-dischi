<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Vue.js -->
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <!-- Ajax -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <!-- Css -->
    <link rel="stylesheet" href="css/style.css?v=XXXXX<?php echo time(); ?>">
    <title>Lista Dischi</title>
</head>
<body>
    <div id="app">
        <!-- Header -->
        <header>
            <div class="logo">
                <img src="img/spotify_logo.png" alt="logo spotify">
            </div>
        </header>
        <!-- /Header -->

        <!-- Main -->
        <main>
            <div class="container">
                <div id ="section_cd">
                    <div v-for='cd in cds' class="box">
                        <div class="album_song">
                            <img :src="cd.poster" alt="immagine album">
                        </div>

                        <div class="title_song">
                            <h1> {{ cd.title }} </h1>
                        </div>

                        <div class="artist_age">
                            <p> {{ cd.author }} </p>
                            <p> {{ cd.year }} </p>
                        </div>

                    </div>
                </div>
            </div>
        </main>
        <!-- Main -->
    </div>
    <script src ="js/main.js"></script>
</body>
</html>
