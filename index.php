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
</head>
<body>
  <header>
      <div>
        <img src="img/logo-small.svg" alt="">
      </div>
    </header>

    <main class="text-light">
      <div class="container pt-5">
        <div class="row">
          <?php 
          foreach($database as $item) {
        echo '<div class="col-2 my_card">' ; 
          echo '<img class="w-50 m-5" src="' . $item['poster'] . '">' ;
          echo '<p>' . $item['title'] . '</p>' ;
          echo '<p>' . $item['author']; '</p>' ;
          echo '<p>' . $item['year']; '</p>' ;
          echo '<p>' . $item['genre']; '</p>' ;
        echo '</div>';
        } ?>
        </div>
      </div>
    </main>
</body>
</html>