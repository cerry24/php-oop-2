<?php 
    class Cart {
        protected $productList = [];
        protected $totalPrice;
        protected $totalQuantities;

        public function __construct() {
        }
        
        public function setAddProduct($_product) {
            if (is_a($_product, 'Product')) {
                array_push($this->productList, $_product);
                $this->updateTotalPrice();
            }
        }

        public function getTotalPrice() {
            return $this->totalPrice;
        }

        public function updateTotalPrice() {
            $sum = 0;
            foreach ($this->productList as $_product) {
                $sum += $_product->price;
            }
            $this->totalPrice = $sum;
        }
    }
?>