<?php
    class Cibo extends Articoli {
        // PROPRIETA
        private $netWeight;
        private $ingredients;

        // METODI

            // COSTRUTTORE
            function __construct($image, $title, $category, $price, $netWeight, $ingredients){
                parent::__construct($image, $title, $category, $price);
                $this->netWeight = $netWeight;
                $this->ingredients = $ingredients;
            }

        // FINE METODI
    }
?>