<?php
class Kubus{
  public function __construct($side){
    $this->side = $side;
  }

  public function getLarge(){
    return 6*($this->side*$this->side);
  }
  public function getVolume(){
    return ($this->side*$this->side*$this->side);
  }
}

class Bola{
  public function __construct($radius){
    $this->radius = $radius;
  }

  public function getLarge(){
    return 4 * (22/7) * $this->radius*$this->radius;
  }
  public function getVolume(){
    return (4/3) * (22/7) *$this->radius*$this->radius*$this->radius;
  }
}

class Balok{
  public function __construct($length,$wide,$height){
    $this->length = $length;
    $this->wide = $wide;
    $this->height = $height;
  }

  public function getLarge(){
    return 2*( ($this->length * $this->wide) + ($this->length * $this->height ) + ($this->wide * $this->height ) );
  }
  public function getVolume(){
    return $this->length * $this->wide * $this->height;
  }
}
$name = "Aura Salsabila";
$NIM  = 192410101015;
$kelas = "Pemrograman Website B";

?>