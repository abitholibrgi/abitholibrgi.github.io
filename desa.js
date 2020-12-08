function toggleOnScroll() {
    if ($(window).scrollTop() >100){
        $('.navbar').addClass( "biru");
    }
    else {
        $('.navbar').removeClass("biru");
    }
}

$( document ).ready(function() {

toggleOnScroll();
$(window).scroll(function(){
    toggleOnScroll();
    });
});