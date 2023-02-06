<?php 
    class Product {
        protected $name;
        protected $price;
        protected $barCode;
        protected $description;
        protected $image;
        protected $category;

        public function __construct($_name, $_price, $_barCode, $_category) {
            $this->setName($_name);
            $this->setPrice($_price);
            $this->setBarCode($_barCode);
            $this->setCategory($_category);
        }

        public function setName($_name) {
            $this->name = $_name;
        }

        public function setPrice($_price) {
            $this->price = $_price;
        }

        public function setBarCode($_barCode) {
            $this->barCode = $_barCode;
        }

        public function setCategory($_category): void {
            $categories = ['cat','dog'];
            if ( in_array($_category , $categories)) {
                $this->category = $_category;
            } else {
                $this->category = null;
            }
        }

        public function getName() {
            return $this->name;
        }
        public function getPrice() {
            return $this->price;
        }
        public function getBarCode() {
            return $this->barCode;
        }
        public function getCategory() {
            return $this->category;
        }
    }

?>