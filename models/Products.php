<?php

class Products {
    
    //Получение списка товаров
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
    
    // Получение списка рекомендованных товаров
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
    
    // Полученине списка ТОП товаров
    public static function getLeaderProducts() {
        //Соединение с базой данных
        $db = Db::getConnection();
        
        $result = $db->query("SELECT *FROM products ORDER BY leader DESC");
        
        $leaderProducts = [];
        $i = 0;
        while($row = $result->fetch()){
            $leaderProducts[$i]['id'] = $row['id'];
            $leaderProducts[$i]['title'] = $row['title'];
            $leaderProducts[$i]['price'] = $row['price'];
            $leaderProducts[$i]['mini_description'] = $row['mini_description'];
            $leaderProducts[$i]['description'] = $row['description'];
            $leaderProducts[$i]['image'] = $row['image'];
            $leaderProducts[$i]['brand'] = $row['brand'];
        $i++;
        }
        return $leaderProducts;
    }
}
