<?php
 
 
class News {
    
    public static function getNewsItemById($id) {
      $id = intval($id);
      
      if($id) {
        //запрос к базе данных 
          $db = Db::getConnection;
          
          $result = $db->query('SELECT * FROM news WHERE id='.$id);
          $result->setFetchMode(PDO::FETCH_ASSOC);
          
          $newsItem = $result->fetch();
          
          return $newsItem;
      }


        
    }
    
    
    public static function getNewsList() {
      //запрос к базе данных
        $db = Db::getConnection();
        
        $result = $db->query("SELECT id, title, text, DATE_FORMAT(date, '%d.%m.%Y') AS date, image FROM news ORDER BY date DESC LIMIT 5");
        
        $i = 0;
        while($row = $result->fetch()) {
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['title'] = $row['title'];
            $newsList[$i]['text'] = $row['text'];
            $newsList[$i]['date'] = $row['date'];
            $newsList[$i]['image'] = $row['image'];
            $i++;
        }
        
        return $newsList;
    }
}
