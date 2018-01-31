
(function($,window) {

    var isfrontpage = false;

    $( document ).ready( function() {
        if( $('.page-template-template-frontpage-php').length > 0 ) {
            $( '.sticky-navigation' ).addClass( 'header-on-frontpage' );
            isfrontpage = true;
            if( $( window ).scrollTop() > 200 ) {
                $( '.header-on-frontpage' ).addClass( 'header-frontpage-not' );
            }
        }
    } );

    $( window ).scroll(function() {
        if( !isfrontpage ) {
            return;
        }
        var thisScrollTop   = $(this).scrollTop(),
            frontpageClass  = $( '.header-on-frontpage' ),
            notClass        = 'header-frontpage-not';
        if( thisScrollTop > 100 && !frontpageClass.hasClass( notClass ) ) {
            frontpageClass.addClass( notClass );
        } else if( thisScrollTop < 100 && frontpageClass.hasClass( notClass ) ) {
            frontpageClass.removeClass( notClass );
        }
    } );

} )(jQuery,window);
