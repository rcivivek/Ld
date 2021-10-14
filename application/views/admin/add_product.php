 <h2 class="pro-title">Add Product</h2>  
    
    <div class="add">
        <form action="<?php echo base_url("admin/product"); ?>" method="post" enctype="multipart/form-data">
            <input type="text" name="name" id="" placeholder="Product Name">
            <input type="text" name="tags" id="" placeholder="Searching Tags">
            <input type="text" name="description" id="" placeholder="Product Description">
            <input type="number" name="price" id="" placeholder="Product Price" min="1">
            <select name="category" id="">
                <option value="">Select Category</option>
                <?php foreach($categories as $category):?>
                <option value="<?php echo $category['category_name']; ?>"><?php echo $category['category_name']; ?></option>
            
                
            <?php endforeach;?>
            </select>
            <input type="file" name="pfile" id="">
            <input type="submit" value="Add Product">
        </form>
    </div>
