<h2 class="pro-title">Our Products</h2>  
    
    <div class="item">
        <div class="image">
            <img src="<?php echo $product['img_path'] ?>" id="expandedImg" alt="">
            <div class="more-img">
                <img src="image/slide1.jpg" alt="" onclick="myFunction(this);">
                <img src="image/slide2.jpg" alt="" onclick="myFunction(this);">
                <img src="image/slide3.jpg" alt="" onclick="myFunction(this);">
                <img src="image/slide4.jpg" alt="" onclick="myFunction(this);">
                <img src="image/slide1.jpg" alt="" onclick="myFunction(this);">
                <img src="image/slide1.jpg" alt="" onclick="myFunction(this);">
                <img src="image/slide2.jpg" alt="" onclick="myFunction(this);">
                <img src="image/slide3.jpg" alt="" onclick="myFunction(this);">
                <img src="image/slide4.jpg" alt="" onclick="myFunction(this);">
                <img src="image/slide1.jpg" alt="" onclick="myFunction(this);">
            </div>
        </div>
        <div class="detail">
            <p class="title"><?php echo $product['name'];?></p>
            <a href="" class="category">LED TV</a>
            <p class="description"><?php echo $product['description'];?></p>
            <p class="price">&#8377; <?php echo $product['price']; ?></p>
            <a href="<?php echo base_url('cart/'.$product['id']);?>" class="buy">ADD TO CART</a>
        </div>
    </div>
