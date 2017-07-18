<?php
if (!defined('ABSPATH'))
    exit;
if (!current_user_can('manage_options')) {
    wp_die(__('You do not have sufficient permissions to access this page.'));
}
?>
<div class="wrap">
    <style>
        .oxilab-other-plugins{
            width: 100%;
            height: auto;
        }
        .oxilab-other-plugins-col-3{
            width: calc(33.33% - 20px);
            float: left;
            background-color: #fff;
            margin: 10px 0;
            min-height: 200px;
            margin-right: 20px;
            box-shadow: 0 0 5px #3c738e
        }
       @media screen and (max-width: 950px) and (min-width: 601px) {
            .oxilab-other-plugins-col-3{
                width: calc(50% - 20px);
                
            }
        }
        @media only screen and (max-width: 600px) {
            .oxilab-other-plugins-col-3{
                width: 100%;
            }
        }
        .oxilab-other-plugins-heading{
            width: 100%;
            float: left;
            line-height: 100%;
            background-color: #fff;
            color: #898989;
            text-align: center;
        }
        .oxilab-other-plugins-heading h3 {
            text-align: center;
            font-size: 16px!important;
            margin: 0;
            padding: 1em 0;
        }
        .oxilab-other-plugins-icon{
            width: 100%;
            float: left;
        }
        .oxilab-other-plugins-icon img{
            width: 100%;
            height: auto;
        }
        .oxilab-other-plugins-content{
            width: 100%;
            float: left;
        }
        .oxilab-other-plugins-content  p{
            margin: 10px;
            color: #2d2d2d;
            font-size: 14px;
            text-align: center;
            font-style: italic;
            min-height: 7.5em;
        }
        .oxilab-other-plugins-download{
            width: 100%;
            height: auto;
            float: left;
            display: flex;
            border-top: 1px solid #ccc;
        }
        .oxilab-other-plugins-download .button{
            display: inline-block;
            margin: 10px auto;
            padding: 7px 30px;
            font-weight: 700;
            height: auto;
            position: relative;
            transition: transform .5s;
        }
    </style>
    <h1> Our Plugins</h1>
    <p>This is our plugins list of Oxilab Development</p>
    <div class="oxilab-other-plugins">
        <div class="oxilab-other-plugins-col-3">
            <div class="oxilab-other-plugins-heading">
                <h3> Responsive Tabs with Accordions</h3> 
            </div>
            <div class="oxilab-other-plugins-icon">
                <img src="<?php echo plugin_dir_url(dirname(__FILE__)) . 'other-plugins/responsive-tabs-with-accordions.png'; ?>">
            </div>
            <div class="oxilab-other-plugins-content">
                <p> Responsive Tabs with Accordions is an awesome WordPress Content Tabs Plugin with many nice features. Creating an Awesome Tabs with Responsive Tabs with Accordions is fast and easy.</p> 
            </div>
            <div class="oxilab-other-plugins-download">
                <a class="button" target="_blank" href="https://wordpress.org/plugins/vc-tabs/">Download</a>
            </div>
        </div>
        <div class="oxilab-other-plugins-col-3">
            <div class="oxilab-other-plugins-heading">
                <h3> Accordions or FAQs</h3> 
            </div>
            <div class="oxilab-other-plugins-icon">
                <img src="<?php echo plugin_dir_url(dirname(__FILE__)) . 'other-plugins/accordions-or-faqs.png'; ?>">
            </div>
            <div class="oxilab-other-plugins-content">
                <p> Accordions or FAQs is a great WordPress accordion and FAQs builder plugin that enables you to display a list of FAQs on your web page or blog post without having any difficulty.</p> 
            </div>
            <div class="oxilab-other-plugins-download">
                <a class="button" target="_blank" href="https://wordpress.org/plugins/accordions-or-faqs/">Download</a>
            </div>
        </div>
        <div class="oxilab-other-plugins-col-3">
            <div class="oxilab-other-plugins-heading">
                <h3> SB Image Hover Effects</h3> 
            </div>
            <div class="oxilab-other-plugins-icon">
                <img src="<?php echo plugin_dir_url(dirname(__FILE__)) . 'other-plugins/sb-image-hover-effects.png'; ?>">
            </div>
            <div class="oxilab-other-plugins-content">
                <p>A Responsive plugin for WordPress powered by pure CSS3 and ihover. It is an awesome plugin with 65+ image effect with unlimited style, categories and shortcodes.</p> 
            </div>
            <div class="oxilab-other-plugins-download">
                <a class="button" target="_blank" href="https://wordpress.org/plugins/sb-image-hover-effects/">Download</a>
            </div>
        </div>
        <div class="oxilab-other-plugins-col-3">
            <div class="oxilab-other-plugins-heading">
                <h3> Image Hover Effects Ultimate</h3> 
            </div>
            <div class="oxilab-other-plugins-icon">
                <img src="<?php echo plugin_dir_url(dirname(__FILE__)) . 'other-plugins/image-hover-effects-ultimate.png'; ?>">
            </div>
            <div class="oxilab-other-plugins-content">
                <p>Can easily add 60+ amazing image hover effects without any scripting at all. Bring your images to live with some beautiful animation and transition with this awesome plugin.</p> 
            </div>
            <div class="oxilab-other-plugins-download">
                <a class="button" target="_blank" href="https://wordpress.org/plugins/image-hover-effects-ultimate/">Download</a>
            </div>
        </div>
    </div>
</div>