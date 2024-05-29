<?php


class lingkaran {
    private $r;

    public function __construct($jari) {
        $this->r = $jari;
    }

    public function set_r($jari_baru){
       $this->r = $jari_baru; 
    }
    public function get_r(){
        echo $this->r;
    }
    public function luas_lingkaran(){
       $luas = 3.14*($this->r * $this->r);
       return $luas; 
    }
}


class bola {
    private $r;

    public function __construct($jari) {
        $this->r = $jari;
    }

    public function set_r($jari_baru){
       $this->r = $jari_baru; 
    }
    public function get_r(){
        echo $this->r;
    }
    public function volume_bola(){
        $volume = (4*(3.14*($this->r*$this->r*$this->r))/3);
        return $volume; 
    }
}


function luas_lingkaran($r){
    $luas = 3.14 * ($r*$r);
    return $luas;
}

function volume_bola($r){
    $volume = (4*(3.14*($r*$r*$r))/3);
    return $volume;
}

// luas lingkaran menggunakan function
// echo  luas_lingkaran(5);
// echo "<br>";
// volume bola menggunakan function
// echo number_format(volume_bola(5), 2) ;

// luas lingkaran menggunakan class 
$class_ling = new lingkaran(5);
// echo $class_ling->get_r();
// echo "<br>";
// echo $class_ling->luas_lingkaran();

// volume bola menggunakan class
$class_bola = new bola(5);
echo "Volume Bola = ".number_format($class_bola->volume_bola(), 2);


?>