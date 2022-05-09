<?php 
include '../database.php';

function multimediaGenerator ($database) {
    
    foreach ($database as $singleElement) {
        echo '<div class="multimediaCard">';
        echo 
        '<div class="posterImg"><img src="' . $singleElement["poster"] . '"></div>
        <div class="multimediaDescription"><h3 class="song-title">' . $singleElement["title"] . '<h3>
        <p class="song-author">' . $singleElement["author"] . '</p>
        <p class="song-year"' . $singleElement["year"] . "</p>";
        echo '</div>';
    }
};

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Ajax Dischi</title>
  </head>
  <body class="bg-color">
    <header>
        <img src="https://upload.wikimedia.org/wikipedia/commons/1/19/Spotify_logo_without_text.svg" alt="logo" id="spotify-logo-header">
    </header>
    
    <main class="pt-5">
        <div class="col-7 mx-auto d-flex flex-wrap pt-5">
            <?php foreach ($database as $singleElement) {?>
            <div class="multimediaCard text-center mb-4">
                <div >
                    <img class="poster-img p-3" src="<?= $singleElement["poster"] ?>">
                </div>
                
                <div class="multimediaDescription">
                    <h3 class="text-white text-uppercase fs-5"><?=$singleElement["title"]?></h3>
                    <div class="mt-4 text-secondary fw-bold">
                        <p class="song-author mb-0"><?=$singleElement["author"]?></p>
                        <p class="song-year"><?=$singleElement["year"]?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
