<h2><?=$title;?></h2>
   <h2 class="pro-title">Notifications</h2>  
    
    <div class="notfi">
        <p class="cat-sel" >Get In Touch Message</p>
        <hr>
    <div class="cart">
        <table class="all-pro">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
            <?php foreach($contacts as $contact): ?>
            <tr>
                <td><?php echo $contact['name'];?></td>
                <td><?php echo $contact['email'];?></td>
                <td>One Question</td>
                <td><?php echo $contact['message'];?></td>
                <td><a href="">REPLY</a> <a href="<?php echo 'dashboard?id='.$contact['id'];?>">DELETE</a></td>
            </tr>
           <?php endforeach;?>
            <tr>
                <td>Najim Malik</td>
                <td>example@xyz.com</td>
                <td>One Question</td>
                <td>Gadi Mili Kiya? Gadi Mai Kuch The Kiya? Bo Bhi Nahi Mile!</td>
                <td><a href="">REPLY</a> <a href="">DELETE</a></td>
            </tr>
            <tr>
                <td>Najim Malik</td>
                <td>example@xyz.com</td>
                <td>One Question</td>
                <td>Gadi Mili Kiya? Gadi Mai Kuch The Kiya? Bo Bhi Nahi Mile!</td>
                <td><a href="">REPLY</a> <a href="">DELETE</a></td>
            </tr>
        </table>
    </div>
</div>

<div class="notfi">
        <p class="cat-sel" >Product Report</p>
        <hr>
    <div class="cart">
        <table class="all-pro">
            <tr>
                <th>Product</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Report</th>
                <th>Action</th>
            </tr>
            <tr>
                <td>Najim Malik</td>
                <td>example@xyz.com</td>
                <td>One Question</td>
                <td>Gadi Mili Kiya? Gadi Mai Kuch The Kiya? Bo Bhi Nahi Mile!</td>
                <td><a href="">REPLY</a> <a href="">DELETE</a></td>
            </tr>
            <tr>
                <td>Najim Malik</td>
                <td>example@xyz.com</td>
                <td>One Question</td>
                <td>Gadi Mili Kiya? Gadi Mai Kuch The Kiya? Bo Bhi Nahi Mile!</td>
                <td><a href="">REPLY</a> <a href="">DELETE</a></td>
            </tr>
            <tr>
                <td>Najim Malik</td>
                <td>example@xyz.com</td>
                <td>One Question</td>
                <td>Gadi Mili Kiya? Gadi Mai Kuch The Kiya? Bo Bhi Nahi Mile!</td>
                <td><a href="">REPLY</a> <a href="">DELETE</a></td>
            </tr>
        </table>
    </div>
</div>