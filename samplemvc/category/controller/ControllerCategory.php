<?php
require('../database/Database.php');
require('model/Category.php');
require('model/CategoryDB.php');

class ControllerCategory
{
    public function listCategory(){
        $cate = new CategoryDB();
        $categories = $cate->getCategories();
        include('view/category_list.php');
    }

    public function deleteCategory(){
        $cate = new CategoryDB();
        $category_id = $_POST['category_id'];
        // Delete the product
        $cate->deleteCategory($category_id);
        // Display the Product List page for the current category
        header("Location: .?category_id=$category_id");
    }

    public function showAddForm(){
        include('view/frmaddcategory.php');
    }

    public function addNewCategory(){
        $cate = new CategoryDB();
        $code = $_POST['cateid'];
        $name = $_POST['catename'];

        // Validate the inputs
        if (empty($code) && empty($name)) {
            $error = "Invalid product data. Check all fields and try again.";
            echo $error;
        } else {
            $category = new Category($code, $name);
            $cate->addCategory($category);
            // Display the Product List page for the current category
            header("Location: .?category_id=$code");
        }
    }

    public function showUpdateForm(){
        include('view/frmupdatecategory.php');
    }

    public function updateDataCategory(){
        $cate = new CategoryDB();
        $code = $_POST['cateid'];
        $name = $_POST['catename'];
        $category = new Category($code, $name);
        $cate->updateCategory($category);
        // Display the Product List page for the current category
        header("Location: .?category_id=$code");
    }
    public function handleRequest(){
        if (isset($_POST['action'])) {
            $action = $_POST['action'];
        } else if (isset($_GET['action'])) {
            $action = $_GET['action'];
        } else {
            $action = 'list_category';
        }

        if ($action == 'list_category') {
            $this->listCategory();
        } else if ($action == 'delete_category') {
            $this->deleteCategory();
        } else if ($action == 'show_add_form') {
            $this->showAddForm();
        } else if ($action == 'addcategory') {
            $this->addNewCategory();
        } else if ($action == 'frmupdatecategory') {
            $this->showUpdateForm();
        } else if ($action == 'updatecategory') {
            $this->updateDataCategory();
        }
    }
}
?>