<?php
include(ROOT.'/models/Category.php');
include(ROOT.'/models/Products.php');

class SiteController {
    
    public function actionIndex() {
        $categoryMobile = Category::getCategoryMobile();
        
        $categoryNotebook = Category::getCategoryNotebook();
        
        $categoryNotepad = Category::getCategoryNotepad();
        
        $newProducts = Products::getNewProducts();
        
        require_once(ROOT.'/views/site/index.php');
    }
}
