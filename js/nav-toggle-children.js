// we wait until the document is ready
jQuery(document).ready(function($){

    // find the list items that are parents and for each, add the + button
    // does not matter window width, we handle the visibility of the button through media queries
    $('.menu-item-has-children').each(function(){
        // we create a simple <a> tag that has a plus icon as content
        $(this).prepend('<a href="#" class="sub-menu-open"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox = "0 0 30 30" style = "enable-background:new 0 0 30 30;" xml: space = "preserve" ><style type="text/css">.st0{fill: #FFFFFF;}</style><polygon class="st0" points="11,1 25,15 11,29 " /></svg > </a>')
    });

    // on clicking the button, find the dropdown menu (which should be a sibling of the anchor) and open it
    $('.sub-menu-open').click(function (event) {
        event.preventDefault();
        $(this).toggleClass('opened');
        $(this).siblings('.sub-menu').slideToggle();
    });

});