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
        </div>
      </form>
      <br>
    </div>