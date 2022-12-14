<?php defined('ABSPATH') or die("No script kiddies please!");?>

<div class="wpbs-add-meta-slide-ref" style="display:none;">
    <?php global $options , $post; ?>
    <div class="wpbs-add-meta-slide">
        <div class="wpbs-add-slide-option-wrap">
            <div class="wpbs-option-wrapper">
                <input type="hidden" class="wpbs-slide-type" name="wpbs_option[slides][slide_key][slide_type]" value="image"/>
                <div>
                    <div class="wpbs-option-wrapper">
                        <label for="wpbs-slide-title"><?php echo ('Title'); ?></label>
                        <div class="wpbs-option-field">
                            <input type="text" class="wpbs-slide-title" name="wpbs_option[slides][slide_key][slide_title]" value=""/>
                        </div>
                    </div>
                    <div class="wpbs-option-wrapper">
                        <label for="wpbs-slide-description"><?php echo('Description'); ?></label>
                        <div class="wpbs-option-field">
                            <textarea name="wpbs_option[slides][slide_key][slide_description]" class="wp-editor-area text-field text-editor" cols="30" rows="8"></textarea>
                        </div>
                    </div>
                    <div class="wbps-option-wrapper">
                        <div class="wpbs-show-slider-image">
                            <label for="wpbs-slider-image"><?php echo('Slider Image') ?></label>
                            <div class="wpbs-option-field">
                                <input type="text" name="wpbs_option[slides][slide_key][slide_image_url]" class="wpbs-slider-image-url" value="" />
                                <input type="button" class="wpbs_slider_image_url_button" value="Upload Image" size="25">
                                <div class="wpbs-option-field wpbs-image-preview" style="display:none;">
                                    <img class="wpbs-slider-image" alt="" src="" height="120" width="150">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="wpbs-button-wrapper">
                        <div  class="wpbs-option-wrapper">
                            <label for="wpbs_button_text" class="wpbs-slide-button"><?php echo ('Button Text'); ?></label>
                            <div class="wpbs-option-field">
                                <input type="text"  class="wpbs-slide-button" name="wpbs_option[slides][slide_key][slide_button_text]" value=""/>
                            </div>
                        </div>
                        <div class="wpbs-option-wrapper">
                           <label for="wpbs_slide_button"><?php echo('Button URL') ?></label>
                           <div class="wpbs-option-field">
                              <input type="text" class="wpbs-slide-button" name="wpbs_option[slides][slide_key][slide_button_url]" value=""/>
                           </div>
                        </div>
                        <div class="wpbs-delete-meta-wrapper">
                            <input type="button" class="button-primary-delete wpbs-delete-meta-button" value="<?php echo('Delete') ?>">
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="wpbs-clone-temp" style="display:none;"></div>