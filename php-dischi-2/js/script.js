const App = new Vue(
    {
      el: '#app',
      data: {
        albums: [],
        textSearch: 'all',
      },
      created() {
        console.log(this.textSearch);
        axios.get('http://localhost/PHP/02-02-2022_axios_php/php-dischi-2/server/controller-api.php?genre=' + this.textSearch) .then((result) => {
          this.albums = result.data.results;
        }).catch((error) => { console.log(error); });
      },

      methods: {
        changeGenre: function (textSearch) {
          console.log(this.textSearch);
          axios.get('http://localhost/PHP/02-02-2022_axios_php/php-dischi-2/server/controller-api.php?genre=' + textSearch) .then((result) => {
            this.albums = result.data.results;
          }).catch((error) => { console.log(error); });
        }
     }
  }
);