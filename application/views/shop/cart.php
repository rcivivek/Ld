  <h2 class="pro-title">My Cart</h2>  
    
    <div class="cart">
        
            <?php $key=0;foreach($this->cart->contents() as $items){
                 if(isset($items['name']))
                    $key++;
            }?>
            <?php if($key>0): ?>
        <table>
            <tr>
                <th>Product</th>
                <th>Price (&#8377;)</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
            <?php $sum=0; foreach($this->cart->contents() as $items):?>
            <tr>
                <td><img src="<?php echo $items['img_path']; ?>" alt="">
                   <p><?php echo $items['name'];?></p>
                   <form action="<?=base_url('cart/remove');?>" method="post">
                    <input type="hidden" name="rowid" value="<?php echo $items['rowid']; ?>">
                    <input type="submit" value="REMOVE">
                   </form></td>
                <td><?php echo $items['price'];?></td>
                <td>
                    <form action="<?=base_url('cupdated');?>" method="post">
                        <input type="hidden" name="rowid" value="<?php echo $items['rowid'];?>">
                    <input type="number" value="<?php echo $items['qty'];?>"  min="1" name="qty">                       
                   </td>
                   <td><?php $sum=$sum+$items['subtotal']; echo $items['subtotal'];?></td>
            </tr>
            
            <?php endforeach;?>
        
        </table>
        <div class="total">
            <p>Grand total: &#8377;  <?php echo $sum ;  ?>  /-</p> <?php endif;?>
            <?php if($key==0): ?>
                <div>
                    <p>There is not product in cart</p>
                </div>
        <?php endif;?>
            <a href="<?php echo base_url('products'); ?>">Continue Shopping</a>
            <input type="submit" value="Update"> 
        </form>
            <a href="<?=base_url('checkout')?>">Check Out</a>
        </div>
    </div>
