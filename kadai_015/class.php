<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編_第15章課題</title>
</head>

<body>
    <p>
        <?php
         // クラスを定義する
        class Food {
            // プロパティを定義する                        
            private $name;
            private $price;
            
             // コンストラクタを定義する
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }

             //Foodクラスのpriceプロパティの値を出力する
            public function show_price() {
                echo $this->price . '<br>';
            } 
        }

        // クラスを定義する
        class Animal {
        // プロパティを定義する                        
        private $name;
        private $height;
        private $weight;

        // コンストラクタを定義する
        public function __construct(string $name, int $height, string $weight) {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
        }

        // Animalクラスのheightプロパティの値を出力する
        public function show_height() {
            echo $this->height . '<br>';
        }
    }

         // インスタンス化する
        $food = new Food('potato', 250);

         // インスタンス化する
        $animal = new Animal('dog', 60, '5000');

         // インスタンス$show_priceの各プロパティの値を出力する
        print_r($food);

        echo '<br>';

         // インスタンス$show_heightの各プロパティの値を出力する
        print_r($animal);

        echo '<br>';

        $food->show_price();

        $animal->show_height();

        ?>

    </p>

</body>

</html>
