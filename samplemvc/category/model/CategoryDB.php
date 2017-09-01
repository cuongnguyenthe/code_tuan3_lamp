<?php
class CategoryDB
{
    public function getCategories()
    {
        $db = Database::connect();
        $query = "SELECT * FROM category";
        $result = $db->query($query);
        $categories = array();
        foreach ($result as $row) {
            $category = new Category($row['categoryID'], $row['categoryName']);
            $categories[] = $category;
        }
        return $categories;
    }
    

    public function getCategory($cateid)
    {
        $db = Database::connect();
        $query = "SELECT * FROM category WHERE categoryID = '$cateid'";
        $statement = $db->query($query);
        $row = $statement->fetch();
        $category = new Category($row['categoryID'], $row['categoryName']);
        return $category;
    }

    public function deleteCategory($cateid)
    {
        $db = Database::connect();
        $query = "DELETE FROM category WHERE categoryID = '$cateid'";
        $row_count = $db->exec($query);
        return $row_count;
    }

    public function updateCategory($category)
    {
        $db = Database::connect();
        $cateid = $category->getCateID();
        $catename = $category->getCateName();
        $query = "UPDATE category SET categoryName = '$catename' WHERE categoryID = '$cateid'";
        $row_count = $db->exec($query);
        return $row_count;
    }

    public function addCategory($category)
    {
        $db = Database::connect();

        $cateid = $category->getCateID();
        $catename = $category->getCateName();

        $query = "INSERT INTO category(categoryID, categoryName)
                  VALUES('$cateid', '$catename')";

        $row_count = $db->exec($query);
        return $row_count;
    }
}

?>