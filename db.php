<?php

    // REQUIRE
    require_once(__DIR__ . "/models/category.php");
    require_once(__DIR__ . "/models/product.php");
    require_once(__DIR__ . "/models/food.php");
    require_once(__DIR__ . "/models/animalHouse.php");
    require_once(__DIR__ . "/models/game.php");
    
    // CATEGORIES
    $cat_dog = new Category(1, "Dog", "https://cdn-icons-png.flaticon.com/512/4253/4253264.png");
    $cat_cat = new Category(2, "Cat", "https://cdn-icons-png.flaticon.com/512/802/802404.png");
    // PRODUCTS

    try {
                    
        $prod_croccantini = new Food(
            1, "Kibble", "https://shop-cdn-m.mediazs.com/bilder/9/400/26635_pla_meradog_puppyknochen_10kg_9.jpg", "15",
            $cat_cat, "10/05/2024"
        );
        $prod_cuccia = new AnimalHouse(
            2, "Dog House", "https://www.original-legno.com/wp-content/uploads/2022/02/Cucce_in_legno_italy_con_veranda_per_cani_Barboncino.webp", 100,
            $cat_dog, "100x45x40"
        );
        $prod_kibble = new Game(
            3, "Rubber Bone", "https://shop-cdn-m.mediazs.com/bilder/2/800/48645_pla_tpr_bone_2.jpg", 9,
            $cat_dog, "Rubber"
        );
    
    } catch (Exception $e) {
    
        echo "Errore nella creazione di Product: " . $e -> getMessage();
    }
   

    $prods = [ $prod_croccantini, $prod_cuccia, $prod_kibble ];

