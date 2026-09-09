<?php

class Employee {

    public string $nom;
    public int $sou;

    function setEmployee(string $nom, int $sou) {
        $this->nom = $nom;
        $this->sou = $sou;
    }

    function paysTaxes() {
        if($this->sou >= 6000) {
            print("Pays taxes");
            return true;
        } else {
            print("Does not pay taxes");
            return false;
        }
    }
}

$empleado1 = new Employee();
$empleado1->setEmployee("Joan", 10000);
$empleado1->paysTaxes();
?>
