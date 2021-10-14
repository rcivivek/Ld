<div class="con-form">
    <h2 class="pro-title">Get In Touch</h2>
    <?php if($this->session->flashdata('msg')): ?>
    <div class="alert alert-<?php echo $this->session->flashdata('msg_class'); ?>"><?php echo $this->session->flashdata('msg'); ?></div>
<?php endif; ?>
    <form action="<?php echo base_url("user_report"); ?>" method="post">
        <div>
            <input type="text" name="name" placeholder="Name*" required>
            <input type="email" name="email" placeholder="Email*" required>
            <input type="text" name="productId" placeholder="ProductId*" required>
        </div>
        <div>
            <textarea name="message" placeholder="Message...*" required></textarea>
            <input type="submit" value="Submit">
        </div>    
    </form>
</div>