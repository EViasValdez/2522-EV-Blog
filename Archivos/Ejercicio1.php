<?php
    class animal{
        public $nombre = "Gato ";
        public $especie = "Felino ";
        public $tipo = "Domestico ";
        public $color = "Gris ";
        public $alimentacion = "Variada ";
            function retornar(){
                return $this->nombre;
                return $this->especie;
                return $this->tipo;
                return $this->color;
                return $this->alimentacion;
            }
            function imprimir(){
                for ($a = 0; $a < 100; $a++) {
                    echo $this->nombre;
                    echo $this->especie;
                    echo $this->tipo;
                    echo $this->color;
                    echo $this->alimentacion;
              }
            }
    }
    $animalc = new animal();
    $animalc->imprimir();
?>