<?php
    class Prodotti {
        // PROPRIETA
        public $image;
        public $title;
        public $category;
        protected $price;

        // METODI

            // COSTRUTTORE
            function __construct(String $image, String $title, String $category){
                $this->image = $image;
                $this->title = $title;
                $this->category = $category;
                $this->price = "ND";
            }

            // FUNZIONI
            public function setPrice(Float $price){
                $this->price = "€ ".$price;
            }

            public function getPrice(){
                return $this->price;
            }

        // FINE METODI
    }
?>