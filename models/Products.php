<?php

class Products {
    
    public static function getNewProducts(){
    //Соединение с базой данных
    $db = Db::getConnection();
    
    $result = $db->query("SELECT * FROM products ORDER BY datetime DESC");
    
    $newProducts = [];
    $i = 0;
    
    while($row = $result->fetch()) {
        $newProducts[$i]['id'] = $row['id'];
        $newProducts[$i]['title'] = $row['title'];
        $newProducts[$i]['price'] = $row['price'];
        $newProducts[$i]['mini_description'] = $row['mini_description'];
        $newProducts[$i]['description'] = $row['description'];
        $newProducts[$i]['image'] = $row['image'];
        $newProducts[$i]['brand'] = $row['brand'];
        $i++;
    }
    return $newProducts;
    }
    
    public static function getRecomendedProducts(){
    //Соединение с базой данных
    $db = Db::getConnection();
    
    $result = $db->query("SELECT * FROM products WHERE recomended=1 ORDER BY datetime DESC");
    
    $recProducts = [];
    $i = 0;
    
    while($row = $result->fetch()) {
        $recProducts[$i]['id'] = $row['id'];
        $recProducts[$i]['title'] = $row['title'];
        $recProducts[$i]['price'] = $row['price'];
        $recProducts[$i]['mini_description'] = $row['mini_description'];
        $recProducts[$i]['description'] = $row['description'];
        $recProducts[$i]['image'] = $row['image'];
        $recProducts[$i]['brand'] = $row['brand'];
        $i++;
    }
    return $recProducts;
    }
}
