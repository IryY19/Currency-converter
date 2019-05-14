<?php
    $i = $_GET['i'];
    $k = 0;
    $connect = mysqli_connect('localhost', 'root', '', 'iry');
    $query = mysqli_query($connect, "SELECT * FROM conversion1");
    
    while ($post = mysqli_fetch_assoc($query)) {
      $id = $post['id'];
    }

    if (isset($_POST['more'])) {
      $i = $i + 10;
    }
    ?>
    
    <br>
    <br>
    <div class="container" style="background: #B2BEB5; padding: 15px; opacity: 0.7; border-radius: 50px;">
      <form method="POST" action="history.php?i=<? echo $i ?>">
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-1">
              <h5>Amount</h5>
            </div>
            <div class="col-md-1">
              <h5>From</h5>
            </div>
            <div class="col-md-1">
              <h5>In</h5>
            </div>
            <div class="col-md-2">
              <h5>Course</h5>
            </div>
            <div class="col-md-3">
              <h5>Result</h5>
            </div>
          </div>
        <?php
          for($l = 0; $l < $i; $l++){
          $query = mysqli_query($connect, "SELECT * FROM conversion1");
          while ( $post = mysqli_fetch_assoc($query) ) {
            if ( $id == $post['id']) {
        ?>
          <div class="row">
            <div class="col-md-1">
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
        <button style="margin-left: 60px; margin-top: 5px; " name="more" class="btn btn-danger">Більше</button>
      </form>
    </div>