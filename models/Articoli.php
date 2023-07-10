<?php
    class Articoli {
        // PROPRIETA
        protected $image;
        protected $title;
        protected $category;
        protected $price;

        // METODI

            // COSTRUTTORE
            function __construct($image, $title, $category, $price){
                $this->image = $image;
                $this->title = $title;
                $this->category = $category;
                $this->price = $price;
            }

        // FINE METODI
    }
?>