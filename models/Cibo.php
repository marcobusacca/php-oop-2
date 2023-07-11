<?php
    class Cibo extends Prodotti {
        // PROPRIETA
        private $netWeight;
        private $ingredients;

        // METODI

            // COSTRUTTORE
            function __construct(String $image, String $title, String $category){
                parent::__construct($image, $title, $category);
                $this->netWeight = "ND";
                $this->ingredients = "ND";
            }

            // FUNZIONI
            public function setNetWeight(Int $netWeight){
                $this->netWeight = $netWeight."g";
            }

            public function getNetWeight(){
                return $this->netWeight;
            }

            public function setIngredients(Array $ingredients){

                if (count($ingredients) === 1){

                    $this->ingredients = $ingredients[0];

                } else{

                    $string = "";

                    for ($i = 0; $i < count($ingredients); $i++){

                        if ($i === count($ingredients) - 1){

                            $string.= $ingredients[$i];

                        } else{
                            $string.= $ingredients[$i].", ";
                        }
                    }

                    $this->ingredients = $string;
                }

            }

            public function getIngredients(){
                return $this->ingredients;
            }

        // FINE METODI
    }
?>