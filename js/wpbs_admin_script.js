(function($) {
    /**
     * add slide funnctionality
     */
    $(function() {
        //image slide
        $('.wpbs-add-meta-button').click(function() {
            var clone_html = $(".wpbs-add-form-slide-ref").html();
            var slide_count = $('#wpbs-slide-count').val();
            slide_count++;
            var slide_key = 'slide_' + slide_count;
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

    });
});