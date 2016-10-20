$('.carousel').carousel();

$(document).ready(function(){

      var header = $('header'),
                  btn    = $('button.toggle-nav');

      btn.on('click', function(){
            header.toggleClass('active');
      });

});

$(document).ready(function(){
    $("input[type=search]").focusin(function(){
        $("#navbar ul li a").fadeToggle();
    });
        $("input[type=search]").focusout(function(){
        $("#navbar ul li a").fadeToggle();
    });
});

