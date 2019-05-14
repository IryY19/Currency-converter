<?php
    if(isset($_POST['nadya'])){

    $today = date("y.m.d / H:i:s");
    $two = $_POST['one'];
    $one = $_POST['two'];
    $num = $_POST['num'];

    define("LINK" , 'https://free.currconv.com/api/v7/convert?q='.$one.'_'.$two.'&compact=ultra&apiKey=58b5e05dcad94a7ed81f');
    $data = file_get_contents(LINK);
    $var = json_decode($data, TRUE);
    $three = $var[$one."_".$two];
    $sum = $three * $num;

    mysqli_query($connect, "INSERT INTO `conversion1`(`num`, `from`, `in`, `cv`, `sum`, `date`) VALUES('$num', '$one', '$two', '$three', '$sum', '$today'); ");
    ?> <script type="text/javascript">
      window.location.href = "index.php";
    </script>
    <?php

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
    $sum = $three * $num;

    mysqli_query($connect, "INSERT INTO `conversion1`(`num`, `from`, `in`, `cv`, `sum`, `date`) VALUES('$num', '$one', '$two', '$three', '$sum', '$today'); ");
    ?> <script type="text/javascript">
      window.location.href = "index.php";
    </script>
    <?php
    }
?>