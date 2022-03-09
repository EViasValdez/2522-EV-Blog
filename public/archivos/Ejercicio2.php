<?php
    class animalDomestico{
        public $especie;
        public $color;
        public $accion;
        public $tipo;
        public function gato(){
            return $this->especie = "Felino";
            return $this->color = "Negro claro";
            return $this->accion = "Maullar";
            return $this->tipo = "Gris";
        }
        public function perro(){
            return $this->especie = "Canino";
            return $this->color = "Blanco";
            return $this->accion = "Ladrar";
            return $this->tipo = "Beagle";
        }
    }
    class veiculo{
      public $color;
      public $marca;
      public $modelo;
      public function moto(){
        return $this->color = "Blanco";
        return $this->marca = "Italika";
        return $this->modelo = "2020";
      }
      public function auto(){
        return $this->color = "Verde";
        return $this->marca = "Volkswagen";
        return $this->modelo ="2021";
      }
    }
    class dispositivoDigital{
      public $proposito;
      public $modelo;
      public $color;
      public $marca;
      public $tipo;

      public function camara(){
        return $this->proposito = "Fotografia";
        return $this->modelo = "C80";
        return $this->color = "Azul";
        return $this->marca = "Canon";
        return $this->tipo = "Semiprofesional";
      }

      public function celular(){
        return $this->proposito = "Telefonia celular";
        return $this->modelo = "R12";
        return $this->color = "Negro";
        return $this->marca = "Samsung";
        return $this->tipo = "Una sola camara";
      }
    }
?>