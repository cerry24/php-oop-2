<?php 
    class Toys extends Product {
        protected $material;

        public function __construct($_material, $_name, $_price, $_barCode, $_category) {
            parent:: __construct($_name, $_price, $_barCode, $_category);
            $this->setMaterial($_material);
        }
        
        public function setMaterial($_material) {
            $this->material = $_material;
        }
    }
?>