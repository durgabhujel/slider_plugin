<?php defined('ABSPATH') or die("No script kiddies please !");
global $post;
$post_id = $post->ID;
$wpbs_option = get_post_meta($post_id,'wpbs_option',true);
?>
<div class="wpbs-option-wrap">
    <div class="wpbs-add-meta-wrap">
        <input type="button" class="button-primary wpbs-add-meta-button" value="<?php echo ('Add Image Slider') ?>">
    </div>
    <?php
    if(isset($wpbs_option['slides']['slide_title'])){
     $total_slides = count($wpbs_option['slides']['slide_title']);
     for($i=1;$i<=$total_slides;$i++){
       $slide_key = 'slide_'.$i;
        ?>
      <div class="wpbs-add-meta-slide">
    <div class="wpbs-add-slide-option-wrap">
    <div class="wpbs-option-wrapper">
       <input type="hidden" class="wpbs-slide-type" name="wpbs_option[slides][<?php echo esc_attr($slide_key);?>][slide_type]"  value="image"/>
      </div>

      <div class="wpbs-option-wrapper">
        <label for="wpbs_slide_title" class="wpbs-slide-title"><?php echo( 'Title'); ?></label>
          <div class="wpbs-option-field">
            <input type="text" class="wpbs-slide-title" name="wpbs_option[slides][<?php echo esc_attr($slide_key);?>][slide_title]"  value="<?php echo esc_attr($wpbs_option['slides']['slide_title'][$i-1]); ?>"/>
          </div>
      </div> 
      <div class="wpbs-option-wrapper">
        <label for="wpbs_slide_description" class="wpbs_slide_description"><?php echo( 'Description'); ?></label>
          <div class="wpbs-option-field">
            <textarea  class="wpbs_slide_description" name="wpbs_option[slides][<?php echo esc_attr($slide_key);?>][slide_description]"  rows="8" cols="20"><?php echo esc_html($wpbs_option['slides']['slide_description'][$i-1]); ?></textarea>
          </div>
      </div>
      <div class="wpbs-show-slider-image">
        <div class="wpbs-option-wrapper">
          <label for="wpbs_slider_image" class="wpbs-slider-image"><?php ( 'Slider Image') ?></label>
            <div class="wpbs-option-field">
              <input type="text" class="wpbs-slider-image-url" name="wpbs_option[slides][<?php echo esc_attr($slide_key);?>][slide_image_url]"  value="<?php echo esc_attr($wpbs_option['slides']['slide_image_url'][$i-1]); ?>" />
              <input type="button" class="wpbs_slider_image_url_button" name="wpbs_slider_image_url_button"  value="Upload Image" size="25"/> 
                <div class="wpbs-option-field wpbs-image-preview">
                  <img  class="wpbs-slider-image" src="<?php echo esc_attr($wpbs_option['slides']['slide_image_url'][$i-1]); ?>" alt="" height="120" width="200">
                </div>
            </div>   
       </div>
      </div>
      <div class="wpbs-button-wrapper" >
        <div class="wpbs-option-wrapper">
          <label for="wpbs_slide_button_text" class="wpbs-slide-button"><?php echo( 'Button Text'); ?></label>
            <div class="wpbs-option-field">
              <input type="text" class="wpbs-slide-button" name="wpbs_option[slides][<?php echo esc_attr($slide_key);?>][slide_button_text]"  value="<?php echo esc_attr($wpbs_option['slides']['slide_button_text'][$i-1]); ?>"/>
            </div>
        </div> 
        <div class="wpbs-option-wrapper">
          <label for="wpbs_slide_button_url" class="wpbs-slide-button"><?php _e( 'Button URL', 'wp-1-slider' ); ?></label>
            <div class="wpbs-option-field">
              <input type="text" class="wpbs-slide-button" name="wpbs_option[slides][<?php echo esc_attr($slide_key);?>][slide_button_url]"  value="<?php echo esc_attr($wpbs_option['slides']['slide_button_url'][$i-1]); ?>"/>
                    
            </div>
        </div> 
      </div>
    </div>
    <div class="wpbs-delete-meta-wrap">
      <input type="button" class="button-primary wpbs-delete-meta-button" value="<?php echo( 'Delete'); ?>">
    </div>
  </div> 
      <?php
    } 
  }
  else{
    if(isset($wpbs_option['slides']) && is_array($wpbs_option['slides'])){
        $wpbs_slide_count = count($wpbs_option['slides']);

      }else{
        $wpbs_slide_count = 0;
      }                              
      if($wpbs_slide_count>0){

        foreach($wpbs_option['slides'] as $slide_key => $slide_detail){


         if(isset($slide_detail['slide_type']) && $slide_detail['slide_type']=='image'){
            ?>     
  <div class="wpbs-add-meta-slide">
    <div class="wpbs-add-slide-option-wrap">
    <div class="wpbs-option-wrapper">
       <input type="hidden" class="wpbs-slide-type" name="wpbs_option[slides][<?php echo esc_attr($slide_key);?>][slide_type]"  value="image"/>
      </div>

      <div class="wpbs-option-wrapper">
        <label for="wpbs_slide_title" class="wpbs-slide-title"><?php echo( 'Title'); ?></label>
          <div class="wpbs-option-field">
            <input type="text" class="wpbs-slide-title" name="wpbs_option[slides][<?php echo esc_attr($slide_key);?>][slide_title]"  value="<?php echo esc_attr($wpbs_option['slides'][$slide_key]['slide_title']); ?>"/>
          </div>
      </div> 
      <div class="wpbs-option-wrapper">
        <label for="wpbs_slide_description" class="wpbs_slide_description"><?php echo( 'Description'); ?></label>
          <div class="wpbs-option-field">
          <textarea  class="wpbs_slide_description" name="wpbs_option[slides][<?php echo esc_attr($slide_key);?>][slide_description]"  value="<?php echo esc_attr($wpbs_option['slides'][$slide_key]['slide_description']); ?>" rows="8" cols="20"><?php echo esc_html($wpbs_option['slides'][$slide_key]['slide_description']); ?></textarea>
          </div>
      </div>
      <div class="wpbs-show-slider-image">
        <div class="wpbs-option-wrapper">
          <label for="wpbs_slider_image" class="wpbs-slider-image"><?php echo( 'Slider Image') ?></label>
            <div class="wpbs-option-field">
              <input type="text" class="wpbs-slider-image-url" name="wpbs_option[slides][<?php echo esc_attr($slide_key);?>][slide_image_url]"  value="<?php echo esc_attr($wpbs_option['slides'][$slide_key]['slide_image_url']); ?>" />
              <input type="button" class="wpbs_slider_image_url_button" name="wpbs_slider_image_url_button"  value="Upload Image" size="25"/> 
                <div class="wpbs-option-field wpbs-image-preview">
                  <img  class="wpbs-slider-image" src="<?php echo esc_attr($wpbs_option['slides'][$slide_key]['slide_image_url']); ?>" alt="" height="120" width="200">
                </div>
            </div>   
       </div>
      </div>
      <div class="wpbs-button-wrapper">
        <div class="wpbs-option-wrapper">
          <label for="wpbs_slide_button_text" class="wpbs-slide-button"><?php echo( 'Button Text'); ?></label>
            <div class="wpbs-option-field">
              <input type="text" class="wpbs-slide-button" name="wpbs_option[slides][<?php echo esc_attr($slide_key);?>][slide_button_text]"  value="<?php echo esc_attr($wpbs_option['slides'][$slide_key]['slide_button_text']); ?>"/>
            </div>
        </div> 
        <div class="wpbs-option-wrapper">
          <label for="wpbs_slide_button_url" class="wpbs-slide-button"><?php echo( 'Button URL'); ?></label>
            <div class="wpbs-option-field">
              <input type="text" class="wpbs-slide-button" name="wpbs_option[slides][<?php echo esc_attr($slide_key);?>][slide_button_url]"  value="<?php echo esc_attr($wpbs_option['slides'][$slide_key]['slide_button_url']); ?>"/>
                    
            </div>
        </div> 
      </div>
    </div>
    <div class="wpbs-delete-meta-wrap">
      <input type="button" class="button-primary wpbs-delete-meta-button" value="<?php _e( 'Delete', 'wp-1-slider' ); ?>">
    </div>
  </div>
  <?php }
      } // for loop for videos
    }  // if slide is greater than 1

      if (isset($wpbs_option['slides']) && is_array($wpbs_option['slides'])) {
              $array_val = $wpbs_option['slides'];
              $array_key=array_keys($array_val);
              natsort($array_key);
              $last_keys=end($array_key);
              $last_count=str_ireplace('slide_', '',$last_keys );
             
             
        } else {
            $last_count = 0;
        }
  }
    ?>
    

    <input type="hidden"  id="wpbs-slide-count" value="<?php echo  $last_count; ?>" >
</div>