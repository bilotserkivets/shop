<?php

class Brands {
    
    public static function getBrands() {
        // Запрос к базе данных
        $db = Db::getConnection();
        
        $result = $db->query("SELECT * FROM brands");
        
        $brands = [];
        $i = 0;
        while($row = $result->fetch()) {
            $brands[$i]['id'] = $row['id'];
            $brands[$i]['name'] = $row['name'];
            $brands[$i]['image'] = $row['image'];
            $i++;
        }
        return $brands;
    }
}
