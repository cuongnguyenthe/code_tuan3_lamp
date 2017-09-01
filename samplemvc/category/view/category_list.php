<?php include 'util/header.php'; ?>
    <div id="main">
        <div id="sidebar">
            <h1>Categories</h1>
        </div>
        <div id="content">
            <!-- display a table of products -->
            <table>
                <tr>
                    <th>Code</th>
                    <th>Category Name</th>
                    <th>&nbsp;</th>
                </tr>
                <?php foreach ($categories as $category) : ?>
                    <tr>
                        <td><?php echo $category->getCateID(); ?></td>
                        <td><?php echo $category->getCateName(); ?></td>
                        <td>
                            <form action="." method="post">
                                <input type="hidden" name="action" value="delete_category"/>
                                <input type="hidden" name="category_id" value="<?php echo $category->getCateID(); ?>"/>
                                <input type="submit" value="Delete"/>
                            </form>

                            <form action="." method="post">
                                <input type="hidden" name="action" value="frmupdatecategory"/>
                                <input type="hidden" name="category_id" value="<?php echo $category->getCateID(); ?>"/>
                                <input type="submit" value="Update"/>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <p><a href="?action=show_add_form">Add Category</a></p>
        </div>
    </div>
<?php include 'util/footer.php'; ?>