<div class="con-form">
    <h2 class="pro-title">Get In Touch</h2>
    <?php if($this->session->flashdata('msg')): ?>
    <div class="alert alert-<?php echo $this->session->flashdata('msg_class'); ?>"><?php echo $this->session->flashdata('msg'); ?></div>
<?php endif; ?>
    <form action="<?php echo base_url("janta"); ?>" method="post">
        <div>
            <input type="text" name="name" placeholder="Name*" required>
            <input type="email" name="email" placeholder="Email*" required>
            <input type="text" name="subject" placeholder="Subject">
        </div>
        <div>
            <textarea name="message" placeholder="Message...*" required></textarea>
            <input type="submit" value="Submit">
        </div>    
    </form>
</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14013.87623762359!2d77.36999217431315!3d28.58570201110977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cef7d7a0aed2f%3A0xc08e66a08281036!2sSector+72%2C+Noida%2C+Uttar+Pradesh!5e0!3m2!1sen!2sin!4v1547057899690" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    <div id="contact" class="service">
        <h2>LD Product Service and Support</h2>
        <p class="sub">Get your questions answered about product setup, use and care, repair and maintenance issues. We can help.</p>
        <div class="cont">
            <div>
                <i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i>
                <p class="main">Send an Email</p>
                <a href="mailto:lordlycare@ldelectronics.in?Subject=LD%20Support" target="_top">Send a Message to LD Customer Support.</a>
            </div>
            <div>
                <i class="fa fa-phone fa-2x" aria-hidden="true"></i>
                <p class="main">Phone</p>
                <p>Call an LD Support Representative on <br>
                        1800 313 8912 <br>
                        24 hrs, 7 days a week <br>
                        Except national holidays</p>
            </div>
            <div>
                <i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i>
                <p class="main">Mail</p>
                <p>LD Electronics India Pvt. Ltd, <br>
                        A Wing ( 1st Floor ) <br>
                        C-179 , Sector - 72, <br>
                        Noida -201304</p>
            </div>            
        </div>
    </div>
