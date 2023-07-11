<?php
    class Giochi extends Prodotti {
        // PROPRIETA
        public $features;
        private $sizes;

        // METODI

            // COSTRUTTORE
            function __construct(String $image, String $title, String $category, String $features){
                parent::__construct($image, $title, $category);
                $this->features = $features;
                $this->sizes = "ND";
            }

            // FUNZIONI
            public function setSizes(String $sizes){

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