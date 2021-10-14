  <h2 class="pro-title">All Products</h2>
    <style type="text/css">
      .addrem{
        display: inline-block;
        padding: 1px;
      }
    </style> 
    
    <div class="cart">
        <table class="all-pro">
            <tr>
                <th>Product</th>
                <th>Images</th>
                <th>Price (&#8377;)</th>
                <th>Category</th>
                <th>Description</th>
                <th> </th>
            </tr>
            <?php foreach($products as $product):?>
            <?php if($product['id']==$id):?>
                <tr>

                <form action="<?php echo base_url('admin/update');?>" method="post">
                 

                <td>
                    <p>
                        <input type="text" value="<?php echo $product['name']; ?>" name="name">
                    </p>      
               </td>
                <td><img src="<?php echo $product['img_path']; ?>" alt="">
                    <img src="<?php echo $product['img_path']; ?>" alt="">
                    <img src="<?php echo $product['img_path']; ?>" alt="">
                    <img src="<?php echo $product['img_path']; ?>" alt="">
                    <img src="<?php echo $product['img_path']; ?>" alt="">
                    <img src="<?php echo $product['img_path']; ?>" alt=""></td>
                <td><input type="text"  value="<?php echo $product['price']; ?>" name="price"></td>
                <td>
                    <select name="category" value="<?php echo $product['category'];?>">
                        <option value="<?php echo $product['category'];?>">
                            <?php echo $product['category'];?>
                        </option>
                            <?php foreach($categories as $category):?>
                                <option value="<?php echo $category['category_name']; ?>">
                                    <?php echo $category['category_name']; ?>
                                </option>
                             
                         <?php endforeach;?>
                    </select>
                </td>
                <td>
                    <input type="text" value="<?php echo $product['description']; ?>" name="description">
                </td>
                <td>
                    <div class="addrem">
                        <input type="hidden" value="<?php echo $id;?>" name="id">
                        <input type="submit" value="Update" style="text-decoration: none;display: inline-block; width: 85px;height: 35px;text-align: center;"> 
                     </div>
                                   
                </td>
            </form>
            </tr>

            <?php endif;?>

            <?php if($product['id']!=$id):?>
                <tr>
                    <td><p>
                        <?php echo $product['name']; ?>
                            
                        </p>
                       <div class="addrem">
                            <form action="<?php echo base_url("admin/all_products/".$product['id']);?>" method="post">
                                <input type="hidden" value="<?php echo $product['id']; ?>" name="id">
                                <input type="submit" value="EDIT" style="text-decoration: none;display: inline-block; width: 85px;height: 35px;text-align: center;"> 
                            </form>
                       </div>
                     <div class="addrem">
                         <form action="<?php echo base_url("admin/del_product");?>" method="post">
                            <input type="hidden" value="<?php echo $product['id']; ?>" name="id">
                            <input type="submit" value="REMOVE" style="text-decoration: none;display: inline-block; width: 85px;height: 35px;text-align: center;"> 
                     </form>
                 </div>
                <td><img src="<?php echo $product['img_path']; ?>" alt="">
                    <img src="<?php echo $product['img_path']; ?>" alt="">
                    <img src="<?php echo $product['img_path']; ?>" alt="">
                    <img src="<?php echo $product['img_path']; ?>" alt="">
                    <img src="<?php echo $product['img_path']; ?>" alt="">
                    <img src="<?php echo $product['img_path']; ?>" alt=""></td>
                <td><?php echo $product['price']; ?></td>
                <td><?php echo $product['category']; ?></td>
                <td><?php echo $product['description']; ?></td>
            </tr>
            <?php endif;?>
        <?php endforeach;?>
         
             
        </table>
    </div>