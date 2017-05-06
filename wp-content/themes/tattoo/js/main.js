jQuery(function($){
    var $container = $('#grid');
    // function startMasonry() {
        $container.imagesLoaded(function() {
            $container.masonry({
                itemSelector: '.grid-item',
                horizontalOrder: true,
                percentPosition: true,
                pagination: '#load_more_gs',
                gutter: 15
            });
        });
    $(window).scroll(function(){
        // var nextPage = getPage();
        var bottomOffset = 2000;
        var data = {
            'action': 'loadmore',
            'query': true_posts,
            'page' : current_page
        };
        // if( $(window).scrollTop() > ($('#header').offset().top - 75) && !$('body').hasClass('loading')){
        if($(window).scrollTop() + $(window).height() == $(document).height()){
            $.ajax({
                url:ajaxurl,
                data:data,
                type:'POST',
                beforeSend: function( xhr){
                    $('body').addClass('loading');
                },
                success: function (data) {
                    var el = $(data);
                    $container.append( el );
                    $container.masonry('appended', el, true).masonry('reloadItems');
                    $container.imagesLoaded( function() {
                        $container.masonry();
                    });
                    current_page++;
                    $('body').removeClass('loading');
                    $('#load_more_gs').remove();
                }
            });
        }
    });
});
