<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <script
      defer
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <title>Ajax Dischi</title>
  </head>
  <body class="bg-color">
    <div id="root">
      <header>
        <img
          src="https://upload.wikimedia.org/wikipedia/commons/1/19/Spotify_logo_without_text.svg"
          alt="logo-spotify"
          id="spotify-logo-header"
        />
      </header>

      <main class="pt-5">
        <div class="col-7 mx-auto d-flex flex-wrap pt-5">
          <div v-for="elm in multimediaList" class="multimediaCard text-center mb-4">
            <img class="poster-img p-3" :src=" elm.poster " />

            <div class="multimediaDescription">
              <h3 class="text-white text-uppercase fs-5">{{ elm.title }}</h3>
              <div class="mt-4 text-secondary fw-bold">
                <p class="song-author mb-0">{{ elm.author }}?></p>
                <p class="song-year">{{ elm.year }}</p>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>

    <script defer src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script defer src="script.js" rel="text/javascript"></script>
  </body>
</html>
