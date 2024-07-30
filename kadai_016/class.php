<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
<p>
<?php

//クラス"Food"を定義する
class Food {

//プロパティを定義する                        
  private $name;
  private $price;

//コンストラクタを定義する
public function __construct(string $name, int $price) {
  $this->name = $name;
  $this->price = $price;
  }

//メソッド(Price)を定義  
  public function show_price() {
    return $this->price;
  }
}

//インスタンス化する
$potato = new Food ('potato',250);
print_r($potato);
  echo '<br>';

// メソッドにアクセスする  
echo $potato->show_price();
  echo '<br>';


//クラス"Animal"を定義する
class Animal {

//プロパティを定義する                        
  private $name;
  private $height;
  private $weight;
  
//コンストラクタを定義する
  public function __construct(string $name, int $height, int $weight) {
  $this->name = $name;
  $this->height = $height;
  $this->weight = $weight;
    }

//メソッド(height)を定義  
  public function show_height() {
    return $this->height;
    }
  }

// インスタンス化する
  $dog = new Animal ('dog',60,5000);

// インスタンス$userの各プロパティの値を出力する
  print_r($dog);
  echo '<br>';

// メソッドにアクセスする
  echo $dog->show_height();
?>
</p>
  </body>
  </html>