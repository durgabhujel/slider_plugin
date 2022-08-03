<?php  defined('ABSPATH') or die("No script kiddies please !");
 global $post;
 echo "jfhjhgjsdfhkjhgksdjfhgkjhsdfkgjhsdjklfkgjkgsdfklgjgkdsljfdjgkjkgsjkgjjkgfkj";
 wp_die();
 ?>
 <div class="slider-wrapper">
        <ul>
            <?php
        if(isset($wpbs_option['slides']['slide_title'])){
            $wbps_slide_count = count($wpbs_option['slides']['slide_title'])
            // echo '<pre>';
            // print_r($wpbs_option['slides']['slide_title']);
            // echo '</pre>';
            // wp_die();
        ?>
        <li>
            <div class="image-slider">
                <img  class="image" src="" alt="" srcset="">
            </div>
            <div class="slider-text-wrapper">
                <div class="slider-title-wrap">
                    <h3 class="slider-title"> </h3>
                </div>
                <div class="slider-description-wrap">
                    <p class="slider-description"></p>
                </div>
            </div>
            <div class="slider-button-wrapper">
                <div class="slider-button-wrap">
                    <a  class=""href="<?php ?>"><?</a>
                </div>
            </div>

        </li>
    </div>
 <?php
 }?>
