<?php
class Person{
    // Atributos
    public $name;
    public $surname;
    public $age = 18;
    private $height;
    private $direction;
    static public  $max_age = 122;
    // Constructor
    function __construct($name, $surname){
        $this->name = $name;
        $this->surname = $surname;
    }
    // Métodos
    public function getFullName(){
        return $this->name.' '.$this->surname;
    }
    public function isAdult(){
        // Esta función debería devolver un booleano
        if($this->age >= 18) return "si";
        else return "no";
    }
}

$brother=new Person('Alberto', 'González Martínez');
//$brother->name='Alberto';
//$brother->surname='González Martínez';
$brother->age = 23;
echo $brother->getFullName();
echo '<br/>';
echo 'Esta persona '.$brother->isAdult().' es adulta';
echo '<br/>';
echo 'Lo maximo que puede vivir una persona es:'.Person::$max_age
// $name = 'Juan';
// $age = 22;
// $height = 1.90;
// $direction = 'brasil 48, Vigo';


?>