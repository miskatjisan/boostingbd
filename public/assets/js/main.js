"use strict";

// Swiper Slider Initialize
// Swiper Slider Thumbnail
let swiper = new Swiper(".product-info__slider-thumb", {
    spaceBetween: 14,
    slidesPerView: 5,
    watchSlidesProgress: true,
});
// Swiper Slider Main
let swiper2 = new Swiper(".product__info-slider", {
    loop: true,
    grabCursor: true,
    thumbs: {
        swiper: swiper,
    },
});

// Testimonial Slider
let swiper3 = new Swiper(".testimonial__slider", {
    slidesPerView: 1,
    spaceBetween: 30,
    grabCursor: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        991: {
            slidesPerView: 2
        }
    }
});

// Blogs Slider
let swiper4 = new Swiper(".blogs__slider", {
    slidesPerView: 1.4,
    spaceBetween: 15,
    grabCursor: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        440: {
            slidesPerView: 2.6,
            spaceBetween: 20,
        },
        576: {
            slidesPerView: 2.5
        },
        768: {
            slidesPerView: 2.45
        },
        991: {
            slidesPerView: 3.45,
            spaceBetween: 30
        }
    }
});

// File Input
( function ( document, window, index )
{
	var inputs = document.querySelectorAll( '.input__file' );
	Array.prototype.forEach.call( inputs, function( input )
	{
		var label	 = input.nextElementSibling,
			labelVal = label.innerHTML;

		input.addEventListener( 'change', function( e )
		{
			var fileName = '';
			if( this.files && this.files.length > 1 )
				fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
			else
				fileName = e.target.value.split( '\\' ).pop();

			if( fileName )
				label.querySelector( 'span' ).innerHTML = fileName;
			else
				label.innerHTML = labelVal;
		});

		// Firefox bug fix
		input.addEventListener( 'focus', function(){ input.classList.add( 'has-focus' ); });
		input.addEventListener( 'blur', function(){ input.classList.remove( 'has-focus' ); });
	});
}( document, window, 0 ));

// Input Password see & close
let inputIconBtnS = document.querySelectorAll('.input__box .input__icon:not(input[type="search"] + .input__icon)');
inputIconBtnS.forEach(function(inputIconBtn) {
    inputIconBtn.addEventListener('click', () => {
        const type = inputIconBtn.previousElementSibling.getAttribute('type') === 'password' ? 'text' : 'password';
        inputIconBtn.previousElementSibling.setAttribute('type', type);
        inputIconBtn.classList.toggle('active');
    });
});

// Input Checkbox
let checkBoxes = document.querySelectorAll('input[type="checkbox"]');
checkBoxes.forEach(function(checkBox) {
    checkBox.addEventListener('click', function(){
        if (checkBox.checked == 1) {
            this.parentElement.parentElement.parentElement.classList.add('checked');
        } else if (checkBox.checked == 0) {
            this.parentElement.parentElement.parentElement.classList.remove('checked');
        }
    });
});

// jQuery
$(function () {
    // Header
    $(window).scroll(function() {
        let scrollTop = $(window).scrollTop();
        if (scrollTop > 0) {
            $('.header').addClass('scrolling');
        } else {
            $('.header').removeClass('scrolling');
        }
    });

    // Home
    let headerHeight = $('.header').height();
    $('.home').css('paddingTop', headerHeight + 56);
    $('.service__provide').css('paddingTop', headerHeight + 90);
    $('.service__provide.__2').css('paddingTop', headerHeight + 85);

    // Menu Collapsed when scroll
    $(window).on('scroll', () => {
        if ($(window).scrollTop()) {
            $('.navbar-toggler[aria-expanded="true"]').click();
        }
    });

    // .video height == video player height
    $('.video__player').css('height', $('.video__play').height());

    // video player
    $('.video__play-button').on('click', function () {
        $('.video__player').addClass('active');
        $('.video__play').trigger('play').attr('controls', 'controls');
    });

    // After Resize Window
    $(window).on('resize', () => {
        // .video height == video player height
        $('.video__player').css('height', $('.video__play').height());

        // Home
        let headerHeight = $('.header').height();
        $('.home').css('paddingTop', headerHeight + 56);
        $('.service__provide').css('paddingTop', headerHeight + 90);
        $('.service__provide.__2').css('paddingTop', headerHeight + 85);
    });

    // Slick Slider
    $('.categories__slider ul').slick({
        pauseOnFocus: false,
        pauseOnHover: false,
        slidesToShow: 5,
        slidesToScroll: 5,
        speed: 300,
        touchThreshold: 10,
        responsive: [
            {
            breakpoint: 1200,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 4
            }
            },
            {
            breakpoint: 768,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3
            }
            },
            {
            breakpoint: 375,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
            }
        ]
    });

    // Click to add class
    $('.categories__slider ul li, .payment__lists ul li').click(function() {
        $(this).addClass('active').siblings().removeClass('active');
    });

    // FAQ lists
    $(".faq__lists dl dt").click(function () {
        $(this).toggleClass('rotate').siblings().removeClass('rotate');
        // self clicking close
        if ($(this).next(".faq__lists dl dd").hasClass("active")) {
            $(this).next(".faq__lists dl dd").removeClass("active").slideUp();
        } else {
            $(".faq__lists dl dd").removeClass("active").slideUp();
            $(this).next(".faq__lists dl dd").addClass("active").slideDown();
        }
    });

    // Dropdown Menu
    $('.dropdown__menu-lists li').hover(function(){
        $(this).addClass('active').siblings().removeClass('active');
    });
    // $('.dropdown-menu, .dropdown__menu-lists').on('click', function(e){
    //     e.stopPropagation();
    // });

    // Read MOre / Favorite
    $('.read__more, .favorite').click(function(){
        $(this).toggleClass('active');
    });
    
    // Sidebar Main Menus
    $('.sidebar__main-menus li').click(function(){
        $(this).addClass('active').siblings().removeClass('active');
    });

    // nav bar Scrollspy
    $('body').scrollspy({
        target: '.header .navbar-nav',
        offset: 50
    });
    
});