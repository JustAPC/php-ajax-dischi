<main class="pt-5">
  <div class="col-7 mx-auto d-flex flex-wrap pt-5">
    <?php foreach ($database as $singleElement) {?>
    <div class="multimediaCard text-center mb-4">
      <div class="w-100 p-3 mx-auto">
        <img class="img-fluid" src="<?= $singleElement["poster"] ?>">
      </div>

      <div class="multimediaDescription p-2">
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
