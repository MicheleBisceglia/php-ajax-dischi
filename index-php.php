<?php include "database.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <title>Document</title>

  <!-- Axios -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- VueJs -->
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

</head>
<body>
  <header>
    <div>
      <img src="img/logo-small.svg" alt="">
    </div>
  </header>


    <!-- Milestone 1/ stampa dischi con php -->
    <main class="text-light pt-5">
      <div class="container">
        <div class="row">
          <?php 
          foreach($database as $item) {
        echo '<div class="col-2">' ; 
          echo '<div class="my_card h-100 pb-3">
            <img class="w-75 m-3" src="' . $item['poster'] . '">' ;
            echo '<h6>' . $item['title'] . '</h6>' ;
            echo '<p">' . $item['author']. '</p>' ;
            echo '<small>' . $item['year']. '</small>' ;
          echo '</div>';
        echo '</div>';
        } ?>
        </div>
      </div>
    </main>
    <!-- /Milestone 2-->
      
    <!-- Milestone 2: stampa dischi con utilizzo di axios -->
    <main id="root" class="text-light pt-3">
      <div class="container">
        <div class="row">
          <div class="col-2"
            v-for="item in array">
            <div class="my_card h-100 pb-3">
              <img :src="item.poster" class="w-75 m-3" alt="">
              <h6> {{ item.title }}</h6>
              <p> {{ item.author }}</p>
              <small> {{ item.year }}</small>
            </div>
          </div>
        </div>
      </div>
    </main>
    
    <script src="js/script.js"></script>
    <!-- /Milestone 2-->
</body>
</html>