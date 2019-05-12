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
    $i = 10;
    $k = 0;
    $connect = mysqli_connect('localhost', 'root', '', 'iry');
    $query = mysqli_query($connect, "SELECT * FROM conversion");
    
    while ($post = mysqli_fetch_assoc($query)) {
      $id = $post['id'];
    }
    $query = mysqli_query($connect, "SELECT * FROM conversion");
    while ( $post = mysqli_fetch_assoc($query) ) { 
      if ($post['id'] == $id) { 
        $end = $post['num'] * $post['sum'];
      }
    }
    ?>
    <p align="right">USD - <?/*
      define("USD" , 'https://free.currconv.com/api/v7/convert?q=USD_UAH&compact=ultra&apiKey=a57b8a7f567ce5b32d28');
      $data = file_get_contents(USD);
      $var = json_decode($data, TRUE);
      $three = $var["USD_UAH"];
      echo $three;*/
      ?>
    </p>
    <p align="right">EUR - <?/*
      define("EUR" , 'https://free.currconv.com/api/v7/convert?q=EUR_UAH&compact=ultra&apiKey=a57b8a7f567ce5b32d28');
      $data = file_get_contents(EUR);
      $var = json_decode($data, TRUE);
      $three = $var["EUR_UAH"];
      echo $three;*/
      ?>
    </p>
    <br>
    <br>
    <div class="container">
      <form method="POST" action="index.php">
        <div class="row">
          <p></p>
          <div class="col-md-2 text-center">
            <input name="num" placeholder="Введіть суму" type="number" min="0" class="form-control">
          </div>
          <div class="col-md-3 text-center">
            <div class="input-group">
              <select name="one" class="form-control" id="exampleFormControlSelect1">
                <option selected value="<?php
                  $query = mysqli_query($connect, "SELECT * FROM conversion");
                  while ( $post = mysqli_fetch_assoc($query) ) { 
                    if ($post['id'] == $id) { 
                      print $post['from']; 
                    }
                  } 
                ?>" >
                <?php 
                  $query = mysqli_query($connect, "SELECT * FROM conversion");
                  while ( $post = mysqli_fetch_assoc($query) ) {
                    if ($post['id'] == $id) { 
                      echo $post['from'];
                    }
                  } 
                ?>
                </option>
                <option value="USD">USD</option>
                <option value="RUB">RUB</option>
                <option value="UAH">UAH</option>
              </select>
              <button name="nadya" class="btn btn-danger"><-></button>
              <select name="two" class="form-control" id="exampleFormControlSelect1">
                <option selected value="<?php
                  $query = mysqli_query($connect, "SELECT * FROM conversion");
                  while ( $post = mysqli_fetch_assoc($query) ) { 
                    if ($post['id'] == $id) { 
                      print $post['in'];
                    }
                  } 
                ?>" >
                <?php 
                  $query = mysqli_query($connect, "SELECT * FROM conversion");
                  while ( $post = mysqli_fetch_assoc($query) ) { 
                    if ($post['id'] == $id) { 
                      print $post['in'];
                     }
                  } 
                ?>
                </option>
                <option value="USD">USD</option>
                <option value="UAH">UAH</option>
              </select>
            </div>
            <br>
            <button name="cv" class="btn btn-danger">Конвертувати</button>
          </div>
          <div class="col-md-2">
            <nav aria-label="...">
              <ul class="pagination">
                <li style="width: 100%;" class="page-item disabled">
                  <span class="page-link"><?php echo $end; ?></span>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </form>
      <br>
      <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-3 text-center">
          <button onclick="window.location.href='/Iry%20Y/conversion/history.php?i=10'" class="btn btn-danger">Історія</button>
        </div>
        
      </div> 
    </div>

    <?
    if (isset($_POST['more'])) {
      $i = $i + 10;
    }
    if(isset($_POST['nadya'])){

    $today = date("y.m.d / H:i:s");
    $two = $_POST['one'];
    $one = $_POST['two'];
    $num = $_POST['num'];

    define("LINK" , 'https://free.currconv.com/api/v7/convert?q='.$one.'_'.$two.'&compact=ultra&apiKey=58b5e05dcad94a7ed81f');
    $data = file_get_contents(LINK);
    $var = json_decode($data, TRUE);
    $three = $var[$one."_".$two];

    mysqli_query($connect, "INSERT INTO `conversion`(`num`, `from`, `in`, `sum`, `date`) VALUES('$num', '$one', '$two', '$three', '$today'); ");

    }
    if(isset($_POST['cv'])){

    $today = date("y.m.d / H:i:s");
    $one = $_POST['one'];
    $two = $_POST['two'];
    $num = $_POST['num'];

    define("LINK" , 'https://free.currconv.com/api/v7/convert?q='.$one.'_'.$two.'&compact=ultra&apiKey=58b5e05dcad94a7ed81f');
    $data = file_get_contents(LINK);
    $var = json_decode($data, TRUE);
    $three = $var[$one."_".$two];

    mysqli_query($connect, "INSERT INTO `conversion`(`num`, `from`, `in`, `sum`, `date`) VALUES('$num', '$one', '$two', '$three', '$today'); ");

    }
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>