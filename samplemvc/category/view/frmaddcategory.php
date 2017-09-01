<?php //include 'header.php'; ?>
    <div id="main">
        <h1>Add Product</h1>
        <form action="index.php" method="post" id="addcategory">
            <table>
                <tr>
                    <th>Code:</th>
                    <td><input type="input" name="cateid"/></td>
                </tr>

                <tr>
                    <th>Name:</th>
                    <td><input type="input" name="catename"/></td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" value="Add Category"/>
                        <input type="hidden" name="action" value="addcategory"/>
                    </td>
                </tr>
            </table>
        </form>
        <p><a href="index.php?action=list_category">View Product List</a></p>

    </div>
<?php //include 'footer.php'; ?>