<?php
// membuat class dengan nama Animal
class Animal {
    public $nama;
    public $jenis;
    
    public function __construct($nama, $jenis) {
        $this->nama = $nama;
        $this->jenis = $jenis;
    }
    
    public function getInfo() {
        return "Hewan ini adalah {$this->nama}, jenis {$this->jenis}.";
    }
}

// membuat class Cat yang merupakan turunan dari kelas Animal
class Cat extends Animal {
    public function __construct($nama) {
        parent::__construct($nama, "kucing");
    }
    
    public function getInfo() {
        return parent::getInfo() . " Kucing adalah hewan yang suka bermain dan bersih.";
    }
}

// membuat class Dog yang merupakan turunan dari kelas Animal
class Dog extends Animal {
    public function __construct($nama) {
        parent::__construct($nama, "anjing");
    }
    
    public function getInfo() {
        return parent::getInfo() . " Anjing adalah hewan yang setia dan cerdas.";
    }
}

// Membuat objek dan memanggil metode getInfo
$animal = new Animal("Harimau", "karnivora");
echo $animal->getInfo() . "\n";

$cat = new Cat("Kitty");
echo $cat->getInfo() . "\n";

$dog = new Dog("Buddy");
echo $dog->getInfo() . "\n";




