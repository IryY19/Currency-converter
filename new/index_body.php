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
            <input name="num" placeholder="Enter amount" type="number" min="0" class="form-control">
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
                <option value="EUR">EUR</option>
                <option value="GBP">GBP</option>
                <option value="CHF">CHF</option>
                <option value="JPY">JPY</option>
                <option value="CAD">CAD</option>
                <option value="BYN">BYN</option>
                <option value="BGN">BGN</option>
                <option value="HKD">HKD</option>
                <option value="DKK">DKK</option>
                <option value="CNY">CNY</option>
                <option value="CZK">CZK</option>
                <option value="KRW">KRW</option>
                <option value="XAU">XAU</option>
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
                <option value="RUB">RUB</option>
                <option value="UAH">UAH</option>
                <option value="EUR">EUR</option>
                <option value="GBP">GBP</option>
                <option value="CHF">CHF</option>
                <option value="JPY">JPY</option>
                <option value="CAD">CAD</option>
                <option value="BYN">BYN</option>
                <option value="BGN">BGN</option>
                <option value="HKD">HKD</option>
                <option value="DKK">DKK</option>
                <option value="CNY">CNY</option>
                <option value="CZK">CZK</option>
                <option value="KRW">KRW</option>
                <option value="XAU">XAU</option>
              </select>
            </div>
            <br>
            <button name="cv" class="btn btn-outline-dark">Convert</button>
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
              USD -
              <? 
                define("LINK" , 'https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange?json');
                $data = file_get_contents(LINK);
                $var = json_decode($data, TRUE);
                $three = $var[27]['rate']; 
                echo $three;
              ?> 
            </p>
            <p>
              EUR - 
              <? 
                define("LINK" , 'https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange?json');
                $data = file_get_contents(LINK);
                $var = json_decode($data, TRUE);
                $three = $var[34]['rate']; 
                echo $three;
              ?>
            </p>
            <p>
              RUB - 
              <? 
                define("LINK" , 'https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange?json');
                $data = file_get_contents(LINK);
                $var = json_decode($data, TRUE);
                $three = $var[19]['rate']; 
                echo $three;
              ?> 
            </p>
            <p>
              CZK - 
              <? 
                define("LINK" , 'https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange?json');
                $data = file_get_contents(LINK);
                $var = json_decode($data, TRUE);
                $three = $var[4]['rate']; 
                echo $three;
              ?> 
            </p>
            <p>
              PLN - 
              <? 
                define("LINK" , 'https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange?json');
                $data = file_get_contents(LINK);
                $var = json_decode($data, TRUE);
                $three = $var[35]['rate']; 
                echo $three;
              ?> 
            </p>
          </div>
        </div>
      </form>
      <br>
    </div>