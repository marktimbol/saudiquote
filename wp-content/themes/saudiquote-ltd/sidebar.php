<div class="large-4 medium-4 small-12 columns">

    <div id="side-nav">
        <?php if( ICL_LANGUAGE_CODE == 'ar' ) { ?>
           <a href="<?=get_permalink(1917);?>" class="small button expand primary mb10">إبدأ بفتح حساب حقيقي</a>
            <a href="<?=get_permalink(1915);?>" class="small button expand">جرب بفتح حساب تجريبي</a>
        <?php } else { ?>
           <a href="<?=get_permalink(1109);?>" class="small button expand primary mb10">Create a Live Account</a>
           <a href="<?=get_permalink(1107);?>" class="small button expand">Try a Demo Account</a>
        <?php } ?>
    </div>
        
    <div class="contact-sidebar">
        <?php if( ICL_LANGUAGE_CODE == 'ar' ) { ?>
            <h3>للتواصل</h3>
            <p>إتصل بمدير العلاقات في "SaudiQuote"</p>
            <br />
            <?php /*
            <p>الامارات العربيه المتحده </p>
            <p class="lead" dir="LTR" style="text-align: right !important;">+971 4 551 9718</p>
            */ ?>
            <p>المملكة المتحدة </p>
            <p class="lead" dir="LTR" style="text-align: right !important;">+44 20 3318 5935</p>
           
            <p>نيو زيلندا </p>
            <p class="lead" dir="LTR" style="text-align: right !important;">+64 6 824 3922</p> 
         
            <p><a href="mailto:info@saudiquote.com">info@saudiquote.com</a></p> 
            <br />

            <a class="button button small small2 primary radius" href="#" data-reveal-id="contact-us-modal">لطلب المعلومات </a>    

            <div id="contact-us-modal" class="reveal-modal large" data-reveal="">
                <h3>لطلب المزيد من المعلومات</h3>
                <p>شكراً لاهتمامك بشركة "SaudiQuote"، يرجى ملئ المعلومات في أدناه وعضو من فرقة "SaudiQuote" سيعاود الإتصال بك.</p>
                <p><strong>يرجى تزويدنا بالمعلومات التالية</strong></p>

                <?php echo do_shortcode('[gravityform id="2" name="Contact Us - Arabic" title="false" description="false"]'); ?>
                <a class="close-reveal-modal">&#215;</a>
            </div> 
        <?php } else { ?>
            <h3>Contact Us</h3>
            <p>Contact a SaudiQuote representative:</p>
            <br />
            <?php /*
            <p>United Arab Emirates</p>
            <p class="lead">+971 4 551 9718</p>
            */ ?>
            <p>United Kingdom</p>
            <p class="lead">+44 20 3318 5935</p>
          
            <p>New Zealand</p>
            <p class="lead">+64 6 824 3922</p>
           
            <p><a href="mailto:info@saudiquote.com">info@saudiquote.com</a></p> 
            <br />

            <a class="button button small small2 primary radius" href="#" data-reveal-id="contact-us-modal">Request more Information</a>    

            <div id="contact-us-modal" class="reveal-modal large" data-reveal="">
                <h3>Request For More Information</h3>
                <p>Thank you for your interest in SaudiQuote. Please fill in the information below and a member of the SaudiQuote team will get back to you shortly.</p>
                <p><strong>Please provide the following information</strong></p>

                <?php echo do_shortcode('[gravityform id="1" name="Contact Us" title="false" description="false" ajax="true"]'); ?>
                <a class="close-reveal-modal">&#215;</a>
            </div> 
        <?php } ?>
    </div>

    <div class="widget">
        <a class="twitter-timeline" href="https://twitter.com/SaudiQuote" data-widget-id="547358691029053440">Tweets by @SaudiQuote</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    </div>
</div>