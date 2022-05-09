new Vue({
  el: "#root",
  data: {
    multimediaList: [],
  },
  created() {
    axios.get("http://localhost/php-ajax-dischi/milestone%202/database.php").then((res) => {
      this.multimediaList = res.data;
    });
  },
});
