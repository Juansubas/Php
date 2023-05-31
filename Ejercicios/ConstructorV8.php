<?php
class Point {

    //YA NO HAY NECESIDAD DE DEFINIR LAS VARIABLES Y LEUGO
    //INICIALIZARLAS EN EL CONSTRUCTOR
    public function __construct(
        public float $x = 0.0,
        public float $y = 0.0,
        public float $z = 0.0,
    ) {}
}

//ANTIGUA MANERA

/*
 *
class Point {
  public float $x;
  public float $y;
  public float $z;

  public function __construct(
    float $x = 0.0,
    float $y = 0.0,
    float $z = 0.0
  ) {
    $this->x = $x;
    $this->y = $y;
    $this->z = $z;
  }
}*/