<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animals E-Shop</title>
    <?php require_once(__DIR__ . "/db.php"); ?>
    <style>
        * {margin : 0;
           padding : 0;
           box-sizing: border-box;}
        #wrapper {background-image : url(https://as2.ftcdn.net/v2/jpg/01/17/38/65/500_F_117386504_5vibY754r0pav71ZLswL7U5yWP7Yde3Y.jpg);
                  background-size  : cover;
                  width : 100%;
                  height : 100vh;
                  display : flex;
                  justify-content : center;
                  align-items : center; }
        .container{background-color: rgba(255,255,255,0.9);
                    width : 80%;
                    padding: 1rem;
                    border-radius: 25px; }
        ul {display : flex;
        justify-content : space-between;}
        li {list-style: none;}
    </style>
</head>
<body>
    <div id="wrapper">
        <div class="container">
            <ul>
                <?php
        
                    foreach ($prods as $prod) {
                        
                        ?>
        
                            <li>
                                <h3>
                                    <?php
                                        echo $prod -> getTypology();
                                    ?>
                                </h3>
                                <?php
                                    echo $prod -> getTitle();
                                ?>: 
                                <?php
                                    echo $prod -> getPrice();
                                ?>
                                €
                                <br>
                                <img src="<?php echo $prod -> getImage() ?>"  width="250" />
                                <br>
                                Category:
                                <img src="<?php echo $prod -> getCategory() -> getIcon() ?>"  width="30" />
                                <?php
                                    echo $prod -> getCategory() -> getName();
                                ?>
                            </li>
                        <?php
                    }
                ?>
            </ul>
        </div>
    </div>
</body>
</html>