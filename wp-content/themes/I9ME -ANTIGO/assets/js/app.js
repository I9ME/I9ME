$(document).ready(function(){

$(".pesquisa").click(function() {
    $( ".form_pesquisa_mobile" ).slideToggle( "fast" );
    $(" .form_pesquisa_mobile").css("background-color","#fff");
  });

});


$(document).ready(function(){
  $(".toggle").click(function(event){
    event.preventDefault();
      if ($(this).hasClass('on'))
        {
          $(this).removeClass('on');
            $("#menu").stop().fadeOut();
        }else{
                $(this).addClass('on');
                $("#menu").stop().fadeIn();
            }
  });


$(document).ready(function(){
    //funcao dos projetos
    $(function(){
          var $container = $('#container');
          // init
          $container.isotope({
            // options
            itemSelector: '.item',
            "masonry": { "columnWidth": 0, "gutter": 10 }
          }); 
        })


      /*var alturaTela = jQuery('window').height();
      var header = jQuery('header.header .navbar').height();
      var alturaBanner = alturaTela - header;

      jQuery('.carousel-inner .item').css({height : 'alturaBanner'});*/
});


// - script das redes sociais -
$(document).ready(function($) {

  $('.share > a').on('click', function(e){ 
    e.preventDefault() // prevent default action - hash doesn't appear in url
      $(this).parent().find( 'div' ).toggleClass( 'social--active animated bounceIn' );
    $(this).toggleClass('icon-cancel animated rotateIn');
    });
  
});

// - script do texto banner -
var TxtRotate = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtRotate.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

  var that = this;
  var delta = 300 - Math.random() * 100;

  if (this.isDeleting) { delta /= 2; }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function() {
    that.tick();
  }, delta);
};

window.onload = function() {
  var elements = document.getElementsByClassName('txt-rotate');
  for (var i=0; i<elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-rotate');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid purple }";
  document.body.appendChild(css);
};

$(function() {
  $('a[href*=#]').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
  });
});
});

