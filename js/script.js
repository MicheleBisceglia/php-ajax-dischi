const app = new Vue({
  el: '#root',
  data: {
    array: [],
  },
  created() {
    axios
      .get("http://localhost/php-ajax-dischi/server.php")
      .then((resp) => {
        this.array = resp.data;
      })
  },
})