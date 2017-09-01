<?php include 'util/header.php'; ?>
    <div id="main">
        <h1>Add Product</h1>

        <?php

        $category_id = $_POST['category_id'];
        $cate = new CategoryDB();
        $current_category = $cate->getCategory($category_id);
        ?>
        <form action="index.php" method="post" id="updatecategory">
            <input type="hidden" name="action" value="updatecategory"/>

            <label>Code:</label>
            <input type="input" name="cateid" readonly value="<?php echo $current_category->getCateID() ?>"/>
            <br/>

            <label>Name:</label>
            <input type="input" name="catename" value="<?php echo $current_category->getCateName() ?>"/>
            <br/>

            <label>&nbsp;</label>
            <input type="submit" value="Update Category"/>
            <br/>
        </form>
        <p><a href="index.php?action=list_category">View Product List</a></p>
    </div>
<?php include 'util/footer.php'; ?>