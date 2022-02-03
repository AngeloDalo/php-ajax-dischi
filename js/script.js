const App = new Vue(
    {
      el: '#app',
      data: {
        albums: []
      },
      created() {
        axios.get('http://localhost/PHP/02-02-2022_axios_php/php-ajax-dischi/server/controller-api.php').then((result) => {
        console.log(result);
          this.albums = result.data.results;
        }).catch((error) => { console.log(error); });
        console.log(this.albums);
      }
    }
  );
  