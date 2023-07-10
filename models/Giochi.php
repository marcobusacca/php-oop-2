<?php
    class Giochi extends Prodotti {
        // PROPRIETA
        public $features;
        private $sizes;

        // METODI

            // COSTRUTTORE
            function __construct($image, $title, $category, $features){
                parent::__construct($image, $title, $category);
                $this->features = $features;
                $this->sizes = "ND";
            }

            // FUNZIONI
            public function setSizes($sizes){

                if ($sizes === ""){

                    $this->sizes = "ND";

                } else{
                    $this->sizes = $sizes;
                }
            }

            public function getSizes(){
                return $this->sizes;
            }

        // FINE METODI
    }
?>