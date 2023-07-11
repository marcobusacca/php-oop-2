<?php
    class Accessori extends Prodotti {
        // PROPRIETA
        public $material;
        private $sizes;

        // METODI

            // COSTRUTTORE
            function __construct(String $image, String $title, String $category, String $material){
                parent::__construct($image, $title, $category);
                $this->material = $material;
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