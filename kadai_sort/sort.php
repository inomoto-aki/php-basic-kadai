<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>
<body>
  <p>
    <?php
    function sort_2way($array,$order){
     
      if($order ){
        sort($array);
        echo"昇順にソートします。<br>";
      }else{
        rsort($array);
        echo"降順にソートします。<br>";
         }
         foreach($array as $unm){
          echo $unm . "<br>";
      }
    }
    $nums =[15, 4, 18, 23, 10 ];
    sort_2way($nums, true);
    echo"<br>";
    sort_2way($nums,false);
    ?>
    </p>
</body>
</html>