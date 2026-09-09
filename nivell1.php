<?php

// class Employee {

//     public string $nom;
//     public int $sou;

//     function setEmployee(string $nom, int $sou) {
//         $this->nom = $nom;
//         $this->sou = $sou;
//     }

//     function paysTaxes() {
//         if($this->sou >= 6000) {
//             print("Pays taxes");
//             return true;
//         } else {
//             print("Does not pay taxes");
//             return false;
//         }
//     }
// }

// $empleado1 = new Employee();
// $empleado1->setEmployee("Joan", 10000);
// $empleado1->paysTaxes();
//
class Shape {
    public int $width;
    public int $height;
    public function __construct(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
}

class Triangle extends Shape {

    function calcArea() {
        $area = 0;
        $area = ($this->width * 0.5) * $this->height;
        print($area);
        echo PHP_EOL;
        return $area;
    }
}
class Rectangle extends Shape {

    function calcArea() {
        $area = 0;
        $area = $this->width * $this->height;
        print_r($area);
        echo PHP_EOL;
        return $area;
    }
}
$triangle = new Triangle(30, 10);
$triangle->calcArea();
$rectangle = new Rectangle(30, 10);
$rectangle->calcArea();
?>
