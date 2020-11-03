/*$( document ).ready(function() {
    console.log( "ready!" );
});*/
$(window).on('load', function () {
    menu_init();
});
$( window ).resize(function() {
    menu_init();
});
function menu_init(){
    var x = $(window).width();
    var body = jQuery("body");
    if (x<=959.8){
        body.removeClass("openMenu");
    }else {
        body.addClass("openMenu");
    }
}

var a = 0;
/*$(window).scroll(function() {

    var oTop = $('#counter').offset().top - window.innerHeight;
    if (a == 0 && $(window).scrollTop() > oTop) {
        $('.counter-value').each(function() {
            var $this = $(this),
                countTo = $this.attr('data-count');
            $({
                countNum: $this.text()
            }).animate({
                    countNum: countTo
                },

                {

                    duration: 2000,
                    easing: 'swing',
                    step: function() {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function() {
                        $this.text(this.countNum);
                        //alert('finished');
                    }

                });
        });
        a = 1;
    }
});*/
