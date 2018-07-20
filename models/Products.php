<?php

class Products {
    
    public static function getNewProducts(){
    //Соединение с базой данных
    $db = Db::getConnection();
    
    $result = $db->query("SELECT * FROM products WHERE new=0");
    
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
}
