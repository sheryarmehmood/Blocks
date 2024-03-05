/* global wp, jQuery */
/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title, .site-description' ).css( {
					clip: 'rect(1px, 1px, 1px, 1px)',
					position: 'absolute',
				} );
			} else {
				$( '.site-title, .site-description' ).css( {
					clip: 'auto',
					position: 'relative',
				} );
				$( '.site-title a, .site-description' ).css( {
					color: to,
				} );
			}
		} );
	} );
}( jQuery ) );


jQuery(function ($) {
    "use strict";
    
    const testimonialsSwiper = new Swiper('.swiper.testimonials__slider', {
      // Optional parameters
      loop: true,
      spaceBetween: 50,
      centeredSlides: true,
    
      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },

      breakpoints: {
          
          767: {
            spaceBetween: 10,
            slidesPerView: 2,
            centerMode:true,
          },
          991: {
            spaceBetween: 30,
            slidesPerView: 2,
          },
          1400: {
            spaceBetween: 50,
            slidesPerView: 4,
          },
        },
  });
});

function mobileMenu ( menu, button ) {
    jQuery( button ).on( 'click', function() {
        jQuery( button ).stop().toggleClass( 'open' );
        jQuery( menu ).stop().slideToggle( 500 );
        jQuery( 'body, html' ).stop().toggleClass( 'overflow-hidden' );
    } );

    jQuery( menu + ' .menu-item-has-children > a' ).on( 'click', function( e ) {
        e.preventDefault();
        jQuery( this ).parent().toggleClass( 'active' ).find( '.sub-menu' ).stop().slideToggle( 300 );
    } );
}