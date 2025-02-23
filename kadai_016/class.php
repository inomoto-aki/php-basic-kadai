<!DOCTYPE html>
<html lag="ja">
  <head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>
<body>
  <p>
    <?php
    //クラスを定義する
    class Food{
      //プロパティを定義する
      public $name;
      public $price;
      //メソッドを定義する
      public function show_name(){
        echo $this->name . '<br>';
      }
    public function show_price(){
      echo $this->price .'<br>';
      
    }
      //コンストラクタを定義する
      public function __construct(string $name, int $price ){
        $this->name =$name;
        $this->price =$price;
      }
    }
      //インスタンス化する
      $potato = new Food ('potato',250);
      //プロパティへのアクセス
      $potato->set_name ('potato');
      $potato->show_name();
      //メソッドへのアクセス
      $potato->set_name('potato');
      $potato->show_name();
    
    ?>
    </p>
    <p>
      <?php
      //クラスを定義する
      class  Animal{
        //プロパティを定義する
        public $name;
        public $height;
        public $weight;
        //メソッドを定義する
        public function show_height(){
          echo $this->height.'<br>';
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;
        }
         //コンストラクタを定義する
         public function __construct(string $name,int $height,string $weight ){

         $this->name = $name;
         $this->height = $heigth;
         $this->weight = $weight;
      }
      }
          //インスタンス化する
      $dog = new Animal ('dog',60,5000);
    print_r($animal);

    echo'<br>';
    $potato->show_price();

    echo'<br>';
    $dog->show_height();
     
      ?>
      </p>
  </body>
  </html>

    