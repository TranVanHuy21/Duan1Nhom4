<?php

class CategoryController
{
    private $categoryModel;
    private $parentCategoryModel;

    public function __construct()
    {
        $this->categoryModel = new CategoryModel(connectDB());
        $this->parentCategoryModel = new CategoryModel(connectDB());
    }

    public function displayCategories()
    {
        $categories = $this->categoryModel->getCategories();
        require_once './views/category/listCategories.php';
    }

    public function addCategory()
    {
        $parentCategories = $this->categoryModel->getParentCategories();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $category_name = $_POST['Category_name'];
            $parent_id = $_POST['Parent_id'];

            try {
                $this->categoryModel->insertCategory($category_name, $parent_id);
                header("Location: index.php?act=listCategories");
                exit();
            } catch (Exception $e) {
                echo "Error: " . $e->getMessage();
            }
        }
        require_once './views/category/addCategory.php';
    }

    public function formEditCategory(){
        // require_once  './views/'
    }
    public function editCategory()
    {
        $id = $_GET['id'];
        $category = $this->categoryModel->getCategoryByID($id);
        $parentCategories = $this->categoryModel->getParentCategories();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $category_name = $_POST['Category_name'];
            $parent_id = $_POST['Parent_id'];
            $this->categoryModel->editCategory($id, $category_name, $parent_id);
            header("Location: index.php?act=listCategories");
        }

        require_once './views/category/editCategory.php';
    }

    public function deleteCategory($id)
    {
        $this->categoryModel->deleteCategory($id);
        header("Location: index.php?act=listCategories");
    }

    public function displayParentCategories()
    {
        $parentCategories = $this->parentCategoryModel->getParentCategories();
        require_once './views/parentCategory/listParentCategories.php';
    }

    public function addParentCategory()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $ParentCategory_name = $_POST['ParentCategory_name'];
            $this->parentCategoryModel->insertParentCategory($ParentCategory_name);
            header("Location: index.php?act=displayParentCategories");
        }
        require_once './views/parentCategory/addParentCategory.php';
    }

    public function editParentCategory($id)
    {
        $parentCategory = $this->parentCategoryModel->getParentCategoryByID($id);
        $id = $_GET['id'];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $ParentCategory_name = $_POST['ParentCategory_name'];
            $this->parentCategoryModel->editParentCategory($id, $ParentCategory_name);
            header("Location: index.php?act=displayParentCategories");
        }
        require_once './views/parentCategory/editParentCategory.php';
    }

    public function deleteParentCategory($id)
    {
        $this->parentCategoryModel->deleteParentCategory($id);
        header("Location: index.php?act=displayParentCategories");
    }
}
?>