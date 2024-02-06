<?php

    class Game extends Product {

        private static $typology = 'Games';
        private $matherial;

        public function __contruct(

            $id, $title, $image, $price,
            Category $category,
            $matherial

        ) {

            $this-> setId($id);
            $this-> setImage($image);
            $this-> setPrice($price);
            $this-> setCategory($category);
            $this-> setMatherial($matherial);
        }

        public function getMatherial() {
            return $this-> matherial;
        }

        public function setMatherial($matherial){
            $this-> matherial = $matherial;
        }

        public function getTypology(){
            return self::$typology;
        }
    }