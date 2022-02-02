<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <title>PHP Dischi</title>
</head>

<body>
  <!-- header -->
  <?php include_once __DIR__ . '/partials/header.php' ?>

  <!-- main -->
  <main id="app">
    <div class="row">
        <div class="col-2" v-for="album in albums">
            <img class="title-image" v-bind:src="album.poster" alt="">
            <h1> {{ album.title }} </h1>
            <p> {{ album.author }} </p>
            <p> {{ album.year }} </p>
        </div>
    </div>
  </main>

  <!-- footer -->
  <?php include_once __DIR__ . '/partials/footer.php' ?>
  
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>
