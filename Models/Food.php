<?php 
    class Food extends Product {
        protected $expireDate;
        protected $weight;

        public function __construct($_name, $_price, $_barCode, $_category, $_expireDate, $_weight) {
            parent:: __construct($_name, $_price, $_barCode, $_category);
            $this->setExpireDate($_expireDate);
            $this->setWeight($_weight);
        }

        public function setExpireDate($_expireDate) {
            $this->expireDate = $_expireDate;
        }

        public function setWeight($_weight) {
            $this->weight = $_weight;
        }

        public function getExpireDate() {
            return $this->expireDate;
        }
        public function getWeight() {
            return $this->weight;
        }
    }
?>