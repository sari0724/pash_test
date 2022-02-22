<?PHP

class Animal
{
    #プロパティ
    public $cry = 'bowbow!';
    #クラス関数
    function bow()
    {
        echo $this->cry . PHP_EOL;
    }
}

class Dog extends Animal
{
    public $cry = 'Wan!';
}

class Cat extends Animal
{
    public $cry = 'Nya!';
}

#インスタンス化
$animal = new Animal;
$dog = new Dog;
$cat = new Cat;
#関数の呼び出し
$animal -> bow();
$dog -> bow();
$cat -> bow();

?>