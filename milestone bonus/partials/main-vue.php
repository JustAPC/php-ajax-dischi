<main class="pt-5">
  <div class="col-7 mx-auto d-flex flex-wrap pt-5">
    <div v-for="elm in multimediaList" class="multimediaCard text-center mb-4">
      <div class="w-100 p-3 mx-auto">
        <img class="img-fluid" :src=" elm.poster " />
      </div>

      <div class="multimediaDescription p-2">
        <h3 class="text-white text-uppercase fs-5">{{ elm.title }}</h3>
        <div class="mt-4 text-secondary fw-bold">
          <p class="song-author mb-0">{{ elm.author }}</p>
          <p class="song-year">{{ elm.year }}</p>
        </div>
      </div>
    </div>
  </div>
</main>
