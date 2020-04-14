<?php
echo "<h3> Hello! </h3>";

 $day1="Monday";
 $day2="Friday";
 $day3="Sunday";
 //переменные в строках
 echo "Days of week: $day1, $day2, $day3.<br>";
 echo "Days of week: {$day1}TuesdayWednesdayThusday${day2}Saturday{$day3}<br><br>";

$week  = 'Monday Tuesday Wednesday';
$weekday = explode(" ", $week);
echo $weekday[0], " ";
echo $weekday[1], "<br>";

 $number = 50;
 $string = "10.3aaa";
 //конкатенация
 echo $number.$string, "<br>";
 echo $number.'10', "<br><br>";
 //арифм операции
 echo ($number == 50), "<br>";
 echo '10'*'2', "<br>";
 echo $number+1, "<br><br>";
 //присвоение
 $number2=$number;
 echo "$number2<br>";
 //присвоение по ссылке
 $number3= &$number2;
 $number3=20;
 echo "$number2<br><br>";
 //приведение типов
 echo $number+(int)$string, "<br>";
 echo $number+(float)$string, "<br>";
 echo (bool)$string, "<br>";
 echo (string)TRUE, "<br>";
 echo (string)FALSE , "empty line<br>";
 echo (string)1.4e2, "<br>";
 echo (string)NULL, "empty line<br>";
 echo gettype((unset)$number), "<br>";
 echo $number, "<br>";
class Obj {
  public function __toString() {
   return "Object";
  }
 }
$obj = new Obj;
echo (string)$obj;
//переменная переменных
$x = "name";
$$x = "Anna";
echo "<br>$name";
echo ' ', $$x;
//условные операторы
if($number > 50)
 echo "<br>", 'TRUE';
elseif ($number=50)
 echo "<br>", 'EQUAL';
else
 echo "<br>", 'FALSE';
//циклы
while($number < 52)
 $number++;
echo "<br>", $number, "<br>";

do
 $number--;
while ($number>50);
echo $number, "<br><br>";

for (; $number > 0; $number--) {
 if ($number == 48)
  goto end;
 echo "\$number = $number<br>";
}
echo 'before', "<br>";
end:
echo 'after', "<br>";
//массивы
$a=[1, 2, 3, 6=>4, 5, 6, 7, 'b'=>'c', 'd'=>'e'];
echo $a[6].$a['b'], "<br>";
unset($a[0]);
$a[0]=10;
echo $a[0], "<br>";
$array = implode(",", $a);
echo $array, "<br>";

$shop = array( array( "Name" => "pensil",
    "Cost" => 10,
    "Sum" => 15,
),
    array( "Name" => "book",
        "Cost" => 60,
        "Sum" => 25,
    )
);
for ($row = 0; $row < 2; $row++) {
 echo $shop[$row]["Name"]." cost ".$shop[$row]["Cost"]." sum ".$shop[$row]["Sum"], "<br>";
}
for ($row = 0; $row < 2; $row++) {
 echo "<br>Line $row<br>";

 foreach($shop[$row] as $key => $value) {
  echo $value."<br>";
 }
}
//класс
class book {
    public $title;
    public $price;
    function __construct($title, $price) {
        $this->title = $title;
        $this->price = $price;
    }
}
class new_book extends book {
    public $pages;
    function __construct($title, $price, $pages) {
        parent::__construct($title, $price);
        $this->pages = $pages;
    }
}
$obj = new new_book('BOOK', 35, 500);
echo $obj->title, ' ', $obj->price,' ',$obj->pages,"<br>";
//синглтон
class Singleton{
    private static $instance = null;
    public static function getInstance(){
        if (null === self::$instance){
            self::$instance = new self();
        }
        return self::$instance;
    }
    private function __clone() {}
    private function __construct() {}
    private function __wakeup () {}
    public function test() {
        var_dump($this);
    }
}
$Object = Singleton::getInstance();
$Object -> test();
Singleton::getInstance()->test();
//ошибка
//$Object2 = new Singleton();
//$Object3 = clone $Object;
echo "<br>";
//хеш-таблица
$x = array("mary" => 19, "joe" => 16);
$x["mary"]=18;
$x["vicky"]=21;
print_r($x);
echo "<br>";
print_r(array_keys($x));
echo "<br>";
print_r(array_values($x));
echo "<br>";
unset($x["mary"]);
print_r($x);
?>