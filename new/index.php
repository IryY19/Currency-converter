<?php
    $i = 10;
    $k = 0;
    $connect = mysqli_connect('localhost', 'root', '', 'iry');
    $query = mysqli_query($connect, "SELECT * FROM conversion1");
    while ($post = mysqli_fetch_assoc($query)) {
      $id = $post['id'];
    }
    $query = mysqli_query($connect, "SELECT * FROM conversion1");
    while ( $post = mysqli_fetch_assoc($query) ) { 
      if ($post['id'] == $id) { 
        $end = $post['num'] * $post['sum'];
      }
    }
    ?>
    <br>
    <br>
    <div class="container">
      <form method="POST">
        <div class="row">
          <p></p>
          <div class="col-md-2 text-center">
            <input name="num" placeholder="Введіть суму" type="number" min="0" class="form-control">
          </div>
          <div class="col-md-3 text-center">
            <div class="input-group">
              <select name="one" class="form-control" id="exampleFormControlSelect1">
                <option selected value="<?php
                  $query = mysqli_query($connect, "SELECT * FROM conversion1");
                  while ( $post = mysqli_fetch_assoc($query) ) { 
                    if ($post['id'] == $id) { 
                      print $post['from']; 
                    }
                  } 
                ?>" >
                <?php 
                  $query = mysqli_query($connect, "SELECT * FROM conversion1");
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
              <button name="nadya" class="btn btn-outline-dark"><-></button>
              <select name="two" class="form-control" id="exampleFormControlSelect1">
                <option selected value="<?php
                  $query = mysqli_query($connect, "SELECT * FROM conversion1");
                  while ( $post = mysqli_fetch_assoc($query) ) { 
                    if ($post['id'] == $id) { 
                      print $post['in'];
                    }
                  } 
                ?>" >
                <?php 
                  $query = mysqli_query($connect, "SELECT * FROM conversion1");
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
            <button name="cv" class="btn btn-outline-dark">Конвертувати</button>
          </div>
          <div class="col-md-2">
            <nav aria-label="...">
              <ul class="pagination">
                <li style="width: 100%;" class="page-item disabled">
                  <span class="page-link">
                    <?php
                      $query = mysqli_query($connect, "SELECT * FROM conversion1");
                      while ( $post = mysqli_fetch_assoc($query) ) { 
                        if ($post['id'] == $id) { 
                          print $post['sum'];
                        }
                      }
                    ?>
                  </span>
                </li>
              </ul>
            </nav>
          </div>
          <div class="col-md-3">
          </div>
          <div class="text-right col-md-2 alert alert-dark" style=" padding: 15px; opacity: 0.7;">
            <p>
              EUR -
              <? 
                define("LINK" , 'https://api.privatbank.ua/p24api/pubinfo?exchange&coursid=11');
                $data = file_get_contents(LINK);
                $var = json_decode($data, TRUE);
                $three = $var["EUR_UAH"]; 
                echo $three;
              ?> 
            </p>
            <p>
              USD - 
              <? 
                define("LINK" , 'https://free.currconv.com/api/v7/convert?q=USD_UAH&compact=ultra&apiKey=58b5e05dcad94a7ed81f');
                $data = file_get_contents(LINK);
                $var = json_decode($data, TRUE);
                $three = $var["USD_UAH"]; 
                echo $three;
              ?>
            </p>
            <p>
              PLN - 
              <? 
                define("LINK" , 'https://free.currconv.com/api/v7/convert?q=PLN_UAH&compact=ultra&apiKey=58b5e05dcad94a7ed81f');
                $data = file_get_contents(LINK);
                $var = json_decode($data, TRUE);
                $three = $var["PLN_UAH"]; 
                echo $three;
              ?> 
            </p>
            <p>
              CZK -
              <? 
                define("LINK" , 'https://free.currconv.com/api/v7/convert?q=CZK_UAH&compact=ultra&apiKey=58b5e05dcad94a7ed81f');
                $data = file_get_contents(LINK);
                $var = json_decode($data, TRUE);
                $three = $var["CZK_UAH"]; 
                echo $three;
              ?> 
            </p>
            <p>
              KRW -
              <? 
                define("LINK" , 'https://free.currconv.com/api/v7/convert?q=KRW_UAH&compact=ultra&apiKey=58b5e05dcad94a7ed81f');
                $data = file_get_contents(LINK);
                $var = json_decode($data, TRUE);
                $three = $var["KRW_UAH"]; 
                echo $three;
              ?> 
            </p>
          </div>
        </div>
      </form>
      <br>
    </div>