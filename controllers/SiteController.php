<?php
include(ROOT.'/models/Category.php');
include(ROOT.'/models/Products.php');

class SiteController {
    /**
     * Action для главной страницы
     */
    public function actionIndex() {
        // Список категорий мобильных телефонов
        $categoryMobile = Category::getCategoryMobile();
        // Список категорий ноутбуков
        $categoryNotebook = Category::getCategoryNotebook();
        // Список категорий планшетов
        $categoryNotepad = Category::getCategoryNotepad();
        // Список новыъ товаров
        $newProducts = Products::getNewProducts();
        // Список рекомендованых товаров
        $recProducts = Products::getRecomendedProducts();
        // Список ТОП продуктов
        $leaderProducts = Products::getLeaderProducts();
        // Подключение вида
        require_once(ROOT.'/views/site/index.php');
        
        return true;
    }
}
