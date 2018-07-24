<?php

class Category {
    
    public static function getCategoryMobile() {
        //Соединение с базой данных
        $db = Db::getConnection();
        // Запрос к БД
        $result = $db->query("SELECT * FROM category WHERE type='mobile'");
        // Получение и возврат результатов
        $categoryMobile = [];
        $i = 0;
        
        while($row = $result->fetch()) {
            $categoryMobile[$i]['id'] = $row['id'];
            $categoryMobile[$i]['type'] = $row['id'];
            $categoryMobile[$i]['brand'] = $row['brand'];
            $categoryMobile[$i]['sort_order'] = $row['sort_order'];
            $categoryMobile[$i]['status'] = $row['status'];
            $i++;
        }
        return $categoryMobile;
    }
    
        public static function getCategoryNotebook() {
        //Соединение с базой данных
        $db = Db::getConnection();
        // Запрос к БД
        $result = $db->query("SELECT * FROM category WHERE type='notebook'");
        // Получение и возврат результатов
        $categoryNotebook = [];
        $i = 0;
        
        while($row = $result->fetch()) {
            $categoryNotebook[$i]['id'] = $row['id'];
            $categoryNotebook[$i]['type'] = $row['id'];
            $categoryNotebook[$i]['brand'] = $row['brand'];
            $categoryNotebook[$i]['sort_order'] = $row['sort_order'];
            $categoryNotebook[$i]['status'] = $row['status'];
            $i++;
        }
        return $categoryNotebook;
    }
    
        public static function getCategoryNotepad() {
        //Соединение с базой данных
        $db = Db::getConnection();
        // Запрос к БД
        $result = $db->query("SELECT * FROM category WHERE type='notepad'");
        // Получение и возврат результатов
        $categoryNotepad = [];
        $i = 0;
        
        while($row = $result->fetch()) {
            $categoryNotepad[$i]['id'] = $row['id'];
            $categoryNotepad[$i]['type'] = $row['id'];
            $categoryNotepad[$i]['brand'] = $row['brand'];
            $categoryNotepad[$i]['sort_order'] = $row['sort_order'];
            $categoryNotepad[$i]['status'] = $row['status'];
            $i++;
        }
        return $categoryNotepad;
    }
    }
