<?php

class PersegiPanjang {
    // Property
    public $panjang;
    public $lebar;

    // Method
    function __construct($p, $l) {
        $this -> panjang = $p;
        $this -> lebar = $l;
    }

    function getLuas() {
        return $this -> panjang * $this -> lebar;
    }

    function getKeliling() {
        return 2 * ($this -> panjang + $this -> lebar);
    }

}

// Instance Object
$persegi_panjang1 = new PersegiPanjang(10, 5);
echo "Luas Persegi Panjang1 = " . $persegi_panjang1 -> getLuas();
echo "<br>Keliling Persegi Panjang1 = " . $persegi_panjang1 -> getKeliling();

?>