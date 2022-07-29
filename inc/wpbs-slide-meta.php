<?php defined('ABSPATH') or die("No script kiddies please !");
global $Post;
$post_id = $post->ID;
$wpbs_option = get_post_meta($post_id,'wpbs_option',true);
?>
<div class="wpbs-option-wrapper">
    <div class="wpbs-add-meta-wrap">
        <input type="button" class="button-primary wpbs-add-meta-button" value="<?php echo ('Add Image Slider') ?>">
    </div>

    <?php
    if(isset($wpbs_option['slides']['slide_title'])){
        $total_slides = count($wpbs_option['slides']['slides_title']);
        for($i=1;$i<=$total_slides;$i++){
            $slide_key = 'slide_' .$i;
            ?>
            <div class="wpbs-add-meta-slide">
            <div class="wpbs-add-slide-option-wrap">
                <div class="wpbs-option-wrappper">
                    <input type="text" class="wpbs-slide-type" name="wpbs_option['slides'][<?php echo esc_attr($slide_key);?>][slide_type]" value="image">
                </div>

                <div class="wpbs-option-wrapper">
                    <label for="wpbs_slide_title" class="wpbs-slide-title"><? echo('Title') ?></label>
                </div>
            </div>
            </div>
            <?php
        }

    }?>

    <!-- <input type="hidden"  id="wpbs-slide-count" value=<?php echo $last_count; ?> > -->
</div>