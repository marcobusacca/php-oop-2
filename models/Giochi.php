<?php
    class Giochi extends Articoli {
        // PROPRIETA
        private $features;
        private $sizes;

        // METODI

            // COSTRUTTORE
            function __construct($image, $title, $category, $price, $features, $sizes){
                parent::__construct($image, $title, $category, $price);
                $this->features = $features;
                $this->sizes = $sizes;
            }

        // FINE METODI
    }
?>