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
                    <form>
                    <input type="number" value="<?php echo $items['qty'];?>"  min="1">                       
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
            <input type="submit" value="Update"> </form>
        </div>
    </div>
<style type="text/css">
  
  #t{
    background: grey;
    margin: 100px 250px;
    padding: 100px;
    border-radius: 4px;
  }

  #t input{
    margin:10px;
    padding: 10px;
    width: 100%;
    border-radius: 4px;
  }
  #t h2{
    text-align: center;
    position: relative;
    margin-top: -20px;
    padding:20px auto;
  }
  #t label{
    margin: auto,10px;
  }

</style>
<div id=t>
  <h2>PLace Order</h2>
  <form action="<?=base_url('checkout');?>" method="post">
    <label for="name">Name:</label><br>
    <input type="text" name="name" id="name"><br>
    <label for="mobile_no">Mobile NO:</label><br>
    <input type="text" name="mobile_no" id="mobile_no"><br>
    <label for="email">Email:</label><br>
    <input type="text" name="email" id="email"><br>
    <label for="">Address:</label><br>
    <input type="text" name="name" id="name"><br>
    <input type="submit" value="Place Order" style="background:silver; align-content: center;margin-top:10px;">
  </form>
</div>