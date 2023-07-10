<?php
    class Accessori extends Articoli {
        // PROPRIETA
        private $material;
        private $sizes;

        // METODI

            // COSTRUTTORE
            function __construct($image, $title, $category, $price, $material, $sizes){
                parent::__construct($image, $title, $category, $price);
                $this->material = $material;
                $this->sizes = $sizes;
            }

        // FINE METODI
    }
?>