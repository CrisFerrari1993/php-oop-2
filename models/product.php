<?php

class Product {

    
    private $id;
    private $title;
    private $image;
    private $price;
    private $category;

    public function __construct(
        $id, $title, $image, $price,
        Category $category
    ) {

        $this -> setId($id);
        
        $this -> setTitle($title);
        $this -> setImage($image);
        $this -> setPrice($price);
        
        $this -> setCategory($category);
    }

    public function getId() {

        return $this -> id;
    }
    public function setId($id) {

        $this -> id = $id;
    }

    public function getTitle() {

        return $this -> title;
    }
    public function setTitle($title) {
        if(!is_string($title) || strlen($title) < 3)
            throw new Exception("$title must be most longher than 3 Character");
        $this -> title = $title;
    }

    public function getImage() {

        return $this -> image;
    }
    public function setImage($image) {
        
        $this -> image = $image;
    }

    public function getPrice() {

        return $this -> price;
    }
    public function setPrice($price) {
        if(!is_numeric($price))
            throw new Exception("$price must be a number");
        $this -> price = $price;
    }

    public function getCategory() {

        return $this -> category;
    }
    public function setCategory(Category $category) {

        $this -> category = $category;
    }
    
}