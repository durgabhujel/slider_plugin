(function($) {
    /**
     * add slide funnctionality
     */
    $(function() {
        //image slide
        $('.wpbs-add-meta-button').click(function() {
            var clone_html = $(".wpbs-add-meta-slide-ref").html();
            var slide_count = $('#wpbs-slide-count').val();
            slide_count++;
            var slide_key = 'slide_' + slide_count;
            console.log(slide_key);
            $('.wpbs-clone-temp').html(clone_html);
            $('.wpbs-clone-temp *[name]').each(function() {
                var name = $(this).attr('name');
                var name = name.replace('slide_key', slide_key);
                $(this).attr('name', name);
            })
            var actual_html = $('.wpbs-clone-temp').html();
            $(".wpbs-option-wrap").append(actual_html);
            $('#wpbs-slide-count').val(slide_count);
        });

        //delete Button
        $("body").on('click', '.wpbs-delete-meta-button', function() {
            $(this).closest(".wpbs-add-meta-slide").remove();
        });
        //image download
        $('body').on('click', '.wpbs_slider_image_url_button', function(e) {
            e.preventDefault();
            var btnClicked = $(this);
            var image = wp.media({
                    title: 'Insert Banner Slider Image',
                    button: { text: 'Insert Banner Slider Image' },
                    library: { type: 'image' },
                    multiple: false
                }).open()
                .on('select', function(e) {
                    var uploaded_image = image.state().get('selection').first();
                    console.log(uploaded_image);
                    var image_url = uploaded_image.toJSON().url;
                    $(btnClicked).closest('.wpbs-add-slide-option-wrap').find('.wpbs-slider-image').attr('src', image_url);
                    $(btnClicked).closest('.wpbs-add-slide-option-wrap').find('.wpbs-slider-image-url').val(image_url);
                    if ($(btnClicked).closest('.wpbs-add-slide-option-wrap').find('.wpbs-slider-image-url').val(image_url) != '') {
                        $('.wpbs-image-preview').show();
                    } else {
                        $('.wpbs-image-preview').hide();
                    }
                });

        });

    });
})(jQuery);