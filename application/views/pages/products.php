
<h2 class="pro-title">Our Products</h2>  
    <div class="cat">
        <?php if(isset($search)):?>
        <div>
            <P>Search result: <?php echo $search; ?></P>
        </div>
    <?php endif;?>
        <p class="cat-sel" >Select Category</p>
        <hr>
        <ul>
            <li class="active"><a href="<?=base_url('products');?>">All</a></li>
            <?php foreach($categories as $category):?>
            <li><a href="<?php echo base_url('category/'.$category['id'])?>"><?php echo $category['category_name']?></a></li>
            <?php endforeach;?>
        </ul>
    </div>
    
    <div class="products">
        <?php if($condition==1):?>
        <?php foreach($products as $product):?>
        <div class="product">
            <img src="<?php echo $product['img_path'];?>" alt="">
            <p class="title"><a href="<?php echo base_url('products/'.$product['id']);?>"><?php echo $product['name'];?></a></p>
            <p class="price">&#8377; <?php echo $product['price'];?></p>
            <p class="star">3.5 <i class="fa fa-star" aria-hidden="true"></i></p>
        </div>
        <?php endforeach;?>
    <?php endif;?>
    <?php if($condition==1):?>
        <?php foreach($products as $product):?>
        <div class="product">
            <img src="<?php echo $product['img_path'];?>" alt="">
            <p class="title"><a href="<?php echo base_url('products/'.$product['id']);?>"><?php echo $product['name'];?></a></p>
            <p class="price">&#8377; <?php echo $product['price'];?></p>
            <p class="star">3.5 <i class="fa fa-star" aria-hidden="true"></i></p>
        </div>
        <?php endforeach;?>
    <?php endif;?>
    <?php if($condition==1):?>
        <?php foreach($products as $product):?>
        <div class="product">
            <img src="<?php echo $product['img_path'];?>" alt="">
            <p class="title"><a href="<?php echo base_url('products/'.$product['id']);?>"><?php echo $product['name'];?></a></p>
            <p class="price">&#8377; <?php echo $product['price'];?></p>
            <p class="star">3.5 <i class="fa fa-star" aria-hidden="true"></i></p>
        </div>
        <?php endforeach;?>
    <?php endif;?>
    <?php if($condition==0):?>
        <div >
            <?php echo $this->session->flashdata('msg'); ?>
        </div>
    <?php endif?>
    </div>
