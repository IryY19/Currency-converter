<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Currency conversion</title>
  </head>
  <body style="background: #F7E7CE;">
    <?php
    $i = $_GET['i'];
    $k = 0;
    $connect = mysqli_connect('localhost', 'root', '', 'iry');
    $query = mysqli_query($connect, "SELECT * FROM conversion");
    
    while ($post = mysqli_fetch_assoc($query)) {
      $id = $post['id'];
    }
    if (isset($_POST['more'])) {
      $i = $i + 10;
    }
    ?>
    
    <br>
    <br>
    <div class="container">
      <form method="POST" action="history.php?i=<? echo $i ?>">
        <div class="row">
            <div class="col-md-1">
              <h5>id</h5>
            </div>
            <div class="col-md-1">
              <h5>Сума</h5>
            </div>
            <div class="col-md-1">
              <h5>З</h5>
            </div>
            <div class="col-md-1">
              <h5>В</h5>
            </div>
            <div class="col-md-2">
              <h5>Курс</h5>
            </div>
            <div class="col-md-3">
              <h5>Результат</h5>
            </div>
          </div>
        <?php
          for($l = 0; $l < $i; $l++){
          $query = mysqli_query($connect, "SELECT * FROM conversion");
          while ( $post = mysqli_fetch_assoc($query) ) {
            if ( $id == $post['id']) {
        ?>
          <div class="row">
            <div class="col-md-1">
              <h5><? print $post['id']?></h5>
            </div>
            <div class="col-md-1">
              <h5><? print $post['num']?></h5>
            </div>
            <div class="col-md-1">
              <h5><? print $post['from']?></h5>
            </div>
            <div class="col-md-1">
              <h5><? print $post['in']?></h5>
            </div>
            <div class="col-md-2">
              <h5><? print $post['sum']?></h5>
            </div>
            <div class="col-md-3">
              <h5>
                <? 
                  $num = $post['num'];
                  $sum = $post['sum'];
                  $end = $num * $sum; 
                  print $end;
                ?> 
              </h5>
            </div>
          </div>
        <?
            $id = $id -1;
            }
          }
        }
        ?>
        <button name="more" class="btn btn-danger">Більше</button>
      </form> 
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>