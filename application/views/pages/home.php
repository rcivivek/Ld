    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_options = {
              $AutoPlay: 1,
              $Idle: 4000,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 1480;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider bullet skin 052 css*/
        .jssorb052 .i {position:absolute;cursor:pointer;}
        .jssorb052 .i .b {fill:#000;fill-opacity:0.3;}
        .jssorb052 .i:hover .b {fill-opacity:.7;}
        .jssorb052 .iav .b {fill-opacity: 1;}
        .jssorb052 .i.idn {opacity:.3;}

        /*jssor slider arrow skin 053 css*/
        .jssora053 {display:block;position:absolute;cursor:pointer;}
        .jssora053 .a {fill:none;stroke:#fff;stroke-width:640;stroke-miterlimit:10;}
        .jssora053:hover {opacity:.8;}
        .jssora053.jssora053dn {opacity:.5;}
        .jssora053.jssora053ds {opacity:.3;pointer-events:none;}
    </style>

<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:450px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="<?=base_url();?>assets/image/spin.svg" />
        </div>
        <div data-u="slides" style="position:relative;top:0px;left:0px;width:980px;height:450px;overflow:hidden;">
            <div><img data-u="image" src="<?= base_url('assets/');?>image/n2.png" /></div>
            <div><img data-u="image" src="<?= base_url('assets/');?>image/n1.png" /></div>
            <div><img data-u="image" src="<?= base_url('assets/');?>image/n5.png" /></div>
            <div><img data-u="image" src="<?= base_url('assets/');?>image/n7.png" /></div>
            <div><img data-u="image" src="<?= base_url('assets/');?>image/n9.png" /></div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb052" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora053" style="width:55px;height:55px;top:0px;left:10px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora053" style="width:55px;height:55px;top:0px;right:10px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End -->

    <div class="pro-act">
        <div>
            <img src="<?=base_url();?>assets/icon/1.jpg" alt="">
            <p>Register Your Product</p>
        </div>
        <div>
            <img src="<?=base_url();?>assets/icon/2.jpg" alt="">
            <p>Product Support</p>
        </div>
        <div>
            <img src="<?=base_url();?>assets/icon/1.jpg" alt="">
            <p>Product Enquiry</p>
        </div>
    </div>
    <!--<h2 class="pro-title">Our Products</h2>-->  
    <div class="pro a">
        <a href="<?=base_url('products');?>">
        <div>
            <img src="https://www.lg.com/in/images/main/reRevised2018TVfifa-offer-banner-.jpg" alt="">
            <p>LD Smart LED TV</p>
        </div>
    </a>
    <a href="<?=base_url('products');?>">
        <div>
            <img src="https://www.lg.com/in/images/main/jazz-tv-tile.jpg" alt="">
            <p>JMC</p>
        </div>
    </a>
    <a href="<?=base_url('products');?>">
        <div>
            <img src="https://www.lg.com/in/images/main/ok99-handyWeb.jpg" alt="">
            <p>Ceiling Fan</p>
        </div>
    </a>
    </div>
    <div class="pro b">
        <a href="<?=base_url('products');?>">
        <div>
            <img src="https://www.lg.com/in/images/main/LG%20inverter_Desktop.jpg" alt="">
            <p>IRON</p>
        </div>
    </a>
    <a href="<?=base_url('products');?>">
        <div>
            <img src="https://www.lg.com/in/images/main/Water_Purifier_Stainless_Steel_Desktop.gif" alt="">
            <p>Music System</p>
        </div>
    </a>
    <a herf="<?=base_url('products');?>">
        <div>
            <img src="https://www.lg.com/in/images/main/Air_purifier_360_Degree_Purification_Desktop.jpg" alt="">
            <p>Air Coolers</p>
        </div>
    </a>
    </div>
    <div class="pro a">
    <a href="<?=base_url('products');?>">
        <div>
            <img src="https://www.lg.com/in/images/main/21bdayvideofeature-Block-Video-web.jpg" alt="">
            <p>LD Smart LED TV</p>
        </div>
    </a>
    <a href="<?=base_url('products');?>">
        <div>
            <img src="https://www.lg.com/in/images/main/g7_plusFeature-Moduleweb.jpg" alt="">
            <p>JMC</p>
        </div>
    </a>
    <a href="<?=base_url('products');?>">
        <div>
            <img src="https://www.lg.com/in/images/main/LG_Steam_WM_Desktop.jpg" alt="">
            <p>Ceiling Fan</p>
        </div>
    </a>
    </div>
    <!--
    <a class="more-pro" href="product.html">More Products</a> -->
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