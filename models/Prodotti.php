<?php
    class Prodotti {
        // PROPRIETA
        public $image;
        public $title;
        public $category;
        protected $price;

        // METODI

            // COSTRUTTORE
            function __construct($image, $title, $category){
                $this->image = $image;
                $this->title = $title;
                $this->category = $category;
                $this->price = "ND";
            }

            // FUNZIONI
            public function setPrice($price){
                $this->price = "€ ".$price;
            }

            public function getPrice(){
                return $this->price;
            }

        // FINE METODI
    }
?>