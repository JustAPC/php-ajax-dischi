new Vue({
  el: "#root",
  data: {
    multimediaList: [],
    genre: "Rock",
  },
  created() {
    axios
      .get("http://localhost/php-ajax-dischi/milestone%20bonus/database.php?genre=${this.genre}")
      .then((res) => {
        this.multimediaList = res.data;
        console.log(this.multimediaList);
      });
  },
});
