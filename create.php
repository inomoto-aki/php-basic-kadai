<?php
$dsn = 'mysql:dbname=php_db_app;host=localhost;charset=utf8mb4';
$user = 'root';
$password = '';
//セレクトボックスの選択として設定するため、仕入先コードの配列を取得する
try{
  $pdo = new PDO($dsn,$user,$password);
  //vendorsテーブルからvendor_codeカラムのデータを取得するためのSQL文を変数$sql_selectに代入する
  $sqSl_select = 'SELECT vendor_code FROM vendors';
  //SQL文を実行
  $stmt_select = $pdo->query($sql_select);
   // SQL文の実行結果を配列で取得する
    // 補足：PDO::FETCH_COLUMNは1つのカラムの値を1次元配列（多次元ではない普通の配列）で取得する設定である
    $vendor_codes = $stmt_select->fetchALL(PDO::FETCH_COLUMN);
}catch(PDOException $e){
  exit($e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="with=device-width,intial-scale=1.0">
    <title>商品登録</title>
    <link rel="stylesheet"href="css/style.css">
    <!-- Google Fontsの読み込み -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap"rel="stylesheet">
 </head>
 <body>
   <header>
      <nav>
       <a herf="index.php">商品管理アプリ</a>
      </nev>
   </header>
   <main>
      <h1>商品登録</h1>
      <div class="back">
        <a href="read.php" class="btn"> &1t; 戻る</a>
     </div>
     <form action="create.php"method="post" class="registration-form">
       <div>
         <label for="product_code">商品コード</label>
         <input type="number" id="product_code" name="product_code" min="0" max="100000000" required>

         <label for="product_name">商品名</lebel>
         <input type="text" id="product_name" name="product_name" maxlength="50" rquired>
       
         <label for="price">単価</label>
         <input type="number" id="price" name="price" min="0" max="100000000" required>
        
         <label for="stok_quantity">在庫数</lebel>
         <input type="number" id="stock_quantity" name="stock_quantity" min="0" max="100000000" required>

         <label for="vendor_code">仕入先コード</label>
         <select id="vendor_code" name="vendor_code" required>
           <option disabled selevted value>選択してください</option>
           <?php
            // 配列の中身を順番に取り出し、セレクトボックスの選択肢として出力する
            foreach($vendor_codes as $vendor_code){
              echo"<option value='{$vendor_code}'>{$vendor_code}</option>";
            }
            ?>
          </select>
        </div>
          <button type="submit" class="submit-btn" name="submit" value="create">登録</button>
       </form>
          <article>
    </main>
           <footer>
            <p class="copyright">&copy;商品管理アプリ Allrights reserved.</p>
          </footer>
   </body>
 </html>
