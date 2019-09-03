$(window).scroll(function() {
    var scroll = $(window).scrollTop();
     //>=, not <=
    if (scroll >= 1) {
        $("body").addClass("scrolled");
    }else{
        $("body").removeClass("scrolled");
    }
});
$(document).ready(function(){
    $('li.menuIcon.Facebook a').prepend('<i class="fab fa-facebook-square"></i>');
    $('li.menuIcon.Mail a').prepend('<i class="fas fa-at"></i>');
    $('li.menuIcon.Address a').prepend('<i class="fas fa-map-marker"></i>');
    $('li.menuIcon.Telephone a').prepend('<i class="fas fa-phone"></i>');
    $('li.menuIcon.Twitter a').prepend('<i class="fab fa-twitter"></i>');
    $('li.menuIcon.Youtube a').prepend('<i class="fab fa-youtube"></i>');
    $('li.menuIcon.Instagram a').prepend('<i class="fab fa-instagram"></i>');
    $('li.menuIcon.Linkedin a').prepend('<i class="fab fa-linkedin-in"></i>');
    $('li.menuIcon.Map a').prepend('<i class="fas fa-map-marker-alt"></i>');
    $('li.menuIcon.Pinterest a').prepend('<i class="fab fa-pinterest"></i>');
    $('.wp-block-pullquote blockquote p').append('<i class="fas fa-plus"></i><i class="fas fa-minus"></i>');
    $('li.menuIcon.menu-item-has-children').prepend('<i class="fas fa-plus"></i><i class="fas fa-minus"></i>');
    $('.LV_valid').append('<i class="fas fa-check"></i>');
    $('li.menuIcon.menu-item-has-children').on('click', function(e) {           
        $(this).toggleClass('active');            
    });
    $('.service label').on('click', function(e) {
        $('.service').removeClass('active');        
        $(this).parent().addClass('active');            
    });
    $('.package_icon_wrapper').ready(function(){
        $('.package_content_wrapper').eq(0).addClass('active'); 
        $('.package_icon_wrapper').eq(0).addClass('active');
    });
    $('.package_icon_wrapper').on('click', function(e) {
        var positionOfElement = $(this).index();
        $('.package_icon_wrapper').removeClass('active');        
        $(this).addClass('active');
        $('.package_content_wrapper').removeClass('active');        
        $('.package_content_wrapper').eq(positionOfElement).addClass('active'); 
    });
    $('.specItem h3').on('click', function(e) {
        $(this).parent().toggleClass('active');            
    });
    $('.wp-block-pullquote blockquote').on('click', function(e) {           
        $(this).parent().toggleClass('active');            
    });
    $('.mobileNav').on('click', function(e) {           
        $('#menu-wrapper .menu-main-menu-container').toggleClass('active');            
    });
    $('#footer .widgettitle').on('click', function(e) {           
        $(this).parent().toggleClass('active');            
    });
    ScrollReveal().reveal('.wp-block-columns', { delay: 100 });
    ScrollReveal().reveal('.wp-block-pullquote', { delay: 100 });
});    
jQuery(document).on('lv_after_field_invalid',function(event,element){
    $(".LV_validation_message.LV_invalid").append('<div id="iconer"><i class="fas fa-times"></i></div>');
});
jQuery(document).on('lv_after_field_valid',function(event,element){
    $(".LV_validation_message.LV_valid").append('<div id="iconer"><i class="fas fa-check"></i></div>');
});
$('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 1500,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});

// Mobile Menu
function mobileNav() {
    var element = document.getElementById("menu-wrapper");
    element.classList.toggle("active");
}

var menu = document.querySelector('.menu_icon');
function toggleMenu () {
  menu.classList.toggle('open');
}
menu.addEventListener('click', toggleMenu);