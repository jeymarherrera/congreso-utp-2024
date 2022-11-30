jQuery(document).ready(function ($) {

  // Back to top button
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });
  $('.back-to-top').click(function () {
    $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
    return false;
  });


  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $('#header').addClass('header-scrolled');
    } else {
      $('#header').removeClass('header-scrolled');
    }
  });

  if ($(window).scrollTop() > 100) {
    $('#header').addClass('header-scrolled');
  }


  if (window.matchMedia("(max-width: 767px)").matches) {
    $('#intro').css({ height: $(window).height() });
  }


  new WOW().init();


  $('.venobox').venobox({
    bgcolor: '',
    overlayColor: 'rgba(6, 12, 34, 0.85)',
    closeBackground: '',
    closeColor: '#fff'
  });


  $('.nav-menu').superfish({
    animation: {
      opacity: 'show'
    },
    speed: 400
  });


  if ($('#nav-menu-container').length) {
    var $mobile_nav = $('#nav-menu-container').clone().prop({
      id: 'mobile-nav'
    });
    $mobile_nav.find('> ul').attr({
      'class': '',
      'id': ''
    });
    $('body').append($mobile_nav);
    $('body').prepend('<button type="button" id="mobile-nav-toggle"><i class="fa fa-bars"></i></button>');
    $('body').append('<div id="mobile-body-overly"></div>');
    $('#mobile-nav').find('.menu-has-children').prepend('<i class="fa fa-chevron-down"></i>');

    $(document).on('click', '.menu-has-children i', function (e) {
      $(this).next().toggleClass('menu-item-active');
      $(this).nextAll('ul').eq(0).slideToggle();
      $(this).toggleClass("fa-chevron-up fa-chevron-down");
    });

    $(document).on('click', '#mobile-nav-toggle', function (e) {
      $('body').toggleClass('mobile-nav-active');
      $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
      $('#mobile-body-overly').toggle();
    });

    $(document).click(function (e) {
      var container = $("#mobile-nav, #mobile-nav-toggle");
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
          $('#mobile-body-overly').fadeOut();
        }
      }
    });
  } else if ($("#mobile-nav, #mobile-nav-toggle").length) {
    $("#mobile-nav, #mobile-nav-toggle").hide();
  }


  $('.nav-menu a, #mobile-nav a, .scrollto').on('click', function () {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      if (target.length) {
        var top_space = 0;

        if ($('#header').length) {
          top_space = $('#header').outerHeight();

          if (!$('#header').hasClass('header-fixed')) {
            top_space = top_space - 20;
          }
        }

        $('html, body').animate({
          scrollTop: target.offset().top - top_space
        }, 1500, 'easeInOutExpo');

        if ($(this).parents('.nav-menu').length) {
          $('.nav-menu .menu-active').removeClass('menu-active');
          $(this).closest('li').addClass('menu-active');
        }

        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
          $('#mobile-body-overly').fadeOut();
        }
        return false;
      }
    }
  });


  $(".gallery-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    center: true,
    responsive: {
      0: { items: 1 }, 768: { items: 3 }, 992: { items: 4 }, 1200: { items: 5 }
    }
  });

});


function Pago() {

  var tipoPago = document.registro.opcionPago.value;

  var nombre = document.getElementById('nombreTarjeta')
  var numero = document.getElementById('numTarjeta')
  var cvv = document.getElementById('cvv')
  var fecha = document.getElementById('fecha')

  switch (tipoPago) {
    case "tarjeta":
      nombre.disabled = false
      numero.disabled = false
      cvv.disabled = false
      fecha.disabled = false
      break;

    case "efectivo":
      nombre.disabled = true
      numero.disabled = true
      cvv.disabled = true
      fecha.disabled = true
      break;

    default:
      break;
  }
}

function SelectChanged() {
  var tipoUsuario = document.registro.tipoUsuario.value;
  var tipoPago = document.registro.opcionPago.value;
  var cena = document.getElementById("cena").value;
  //cena = 0.00
  var span = document.getElementById("subtotal");
  var span2 = document.getElementById("porcentaje");
  var span3 = document.getElementById("procesamiento");
  var span4 = document.getElementById("total");
  document.getElementById('TipoEstudiante').innerHTML = tipoUsuario;


  switch (tipoUsuario) {
    case 'Estudiante UTP':
      /*  var input = document.getElementById('paper1');
      input.parentNode.removeChild(input); 
      var input2 = document.getElementById('paper2');
      input2.parentNode.removeChild(input2);
      var input = document.getElementById('paper3');
      input.parentNode.removeChild(input); */

      /* document.getElementById('paper1').required = false
      document.getElementById('paper2_').required = false
      document.getElementById('paper3_').required = false
      document.getElementById('idEst').required = false
      document.getElementById('ocupacion').required = false       */
      document.getElementById('paper1').style.display = 'none'
      document.getElementById('paper2').style.display = 'none'
      document.getElementById('paper3').style.display = 'none'
      document.getElementById('idEst').style.display = 'none'
      document.getElementById('ocupacion').style.display = 'block'
      document.getElementById('wpa').style.display = 'none'
      document.getElementById('institucion').disabled = true
      document.getElementById('institucion').value = 1

      var monto = 75.00
      span.textContent = 'USD ' + monto
      var comision = 3.75
      span2.textContent = 'USD ' + comision
      var comision_pago = 0.50
      span3.textContent = 'USD ' + comision_pago
      var total = monto + comision + comision_pago
      span4.textContent = 'USD ' + total
      break;
    case 'Autor':
      document.getElementById('paper1').style.display = 'block'
      document.getElementById('paper2').style.display = 'block'
      document.getElementById('paper3').style.display = 'block'
      document.getElementById('provincia').style.display = 'none'
      document.getElementById('wpa').style.display = 'none'
      document.getElementById('ocupacion').style.display = 'block'
      document.getElementById('institucion').disabled = false
      document.getElementById('idEst').style.display = 'none'
      //document.getElementById('institucion').value = ""


      var monto = 325.00
      span.textContent = 'USD ' + monto
      var comision = 16.25
      span2.textContent = 'USD ' + comision
      var comision_pago = 0.50
      span3.textContent = 'USD ' + comision_pago
      var total = monto + comision + comision_pago
      span4.textContent = 'USD ' + total

      break;
    case 'Estudiante nacional':
      document.getElementById('paper1').style.display = 'none'
      document.getElementById('paper2').style.display = 'none'
      document.getElementById('paper3').style.display = 'none'
      document.getElementById('pais').value = 170

      document.getElementById('idEst').style.display = 'none'
      document.getElementById('ocupacion').style.display = 'none'
      document.getElementById('wpa').style.display = 'block'
      document.getElementById('institucion').disabled = false

      var monto = 75.00
      span.textContent = 'USD ' + monto
      var comision = 3.75
      span2.textContent = 'USD ' + comision
      var comision_pago = 0.50
      span3.textContent = 'USD ' + comision_pago
      var total = monto + comision + comision_pago
      span4.textContent = 'USD ' + total
      break;
    case 'Estudiante internacional':
      document.getElementById('paper1').style.display = 'none'
      document.getElementById('paper2').style.display = 'none'
      document.getElementById('paper3').style.display = 'none'
      document.getElementById('provincia').style.display = 'none'
      document.getElementById('idEst').style.display = 'block'
      document.getElementById('ocupacion').style.display = 'none'
      document.getElementById('wpa').style.display = 'block'
      document.getElementById('institucion').disabled = false

      var monto = 150.00
      span.textContent = 'USD ' + monto
      var comision = 7.50
      span2.textContent = 'USD ' + comision
      var comision_pago = 0.50
      span3.textContent = 'USD ' + comision_pago
      var total = monto + comision + comision_pago
      span4.textContent = 'USD ' + total
      break;
    case 'Funcionario UTP':
      document.getElementById('paper1').style.display = 'none'
      document.getElementById('paper2').style.display = 'none'
      document.getElementById('paper3').style.display = 'none'
      document.getElementById('pais').value = 170
      document.getElementById('idEst').style.display = 'none'
      document.getElementById('wpa').style.display = 'none'
      document.getElementById('ocupacion').style.display = 'block'
      document.getElementById('institucion').disabled = true
      document.getElementById('institucion').value = 1

      var monto = 225.00
      span.textContent = 'USD ' + monto
      var comision = 11.25
      span2.textContent = 'USD ' + comision
      var comision_pago = 0.50
      span3.textContent = 'USD ' + comision_pago
      var total = monto + comision + comision_pago
      span4.textContent = 'USD ' + total
      break;
    case 'Profesional nacional':
      document.getElementById('paper1').style.display = 'none'
      document.getElementById('paper2').style.display = 'none'
      document.getElementById('paper3').style.display = 'none'
      document.getElementById('idEst').style.display = 'none'
      document.getElementById('ocupacion').style.display = 'block'
      document.getElementById('wpa').style.display = 'block'
      document.getElementById('institucion').disabled = false

      var monto = 225.00
      span.textContent = 'USD ' + monto
      var comision = 11.25
      span2.textContent = 'USD ' + comision
      var comision_pago = 0.50
      span3.textContent = 'USD ' + comision_pago
      var total = monto + comision + comision_pago
      span4.textContent = 'USD ' + total
      break;
    case 'Profesional internacional':
      document.getElementById('paper1').style.display = 'none'
      document.getElementById('paper2').style.display = 'none'
      document.getElementById('paper3').style.display = 'none'
      document.getElementById('provincia').style.display = 'none'
      document.getElementById('idEst').style.display = 'none'
      document.getElementById('ocupacion').style.display = 'none'
      document.getElementById('wpa').style.display = 'block'
      document.getElementById('institucion').disabled = false
      document.getElementById('institucion').value = ""

      var monto = 300.00
      span.textContent = 'USD ' + monto
      var comision = 15.00
      span2.textContent = 'USD ' + comision
      var comision_pago = 0.50
      span3.textContent = 'USD ' + comision_pago
      var total = monto + comision + comision_pago
      span4.textContent = 'USD ' + total
      break;
    default:
      span.textContent = "USD 0.00";
      span2.textContent = "USD 0.00";
      span3.textContent = "USD 0.00";
      span4.textContent = "USD 0.00";
  }



  /*   if (tipoUsuario == "Estudiante UTP") {
      document.getElementById('paper1').style.display = 'none'
      document.getElementById('paper2').style.display = 'none'
      document.getElementById('paper3').style.display = 'none'
    } if (tipoUsuario == '') {
  
    } if (condition) {
  
    } if (condition) {
  
    } */



  /*   const MiembIEEE = document.registro.IEEE.value;
    if (MiembIEEE == 'Si') {
  
    } */

}

function TipoPago() {
  var tipoPago = document.registro.tipoPago.value;

  switch (tipoPago) {
    case "tarjeta":
      document.getElementById('nombreTarjeta').disabled = false
      document.getElementById('NumTarjeta').disabled = false
      document.getElementById('cvv').disabled = false
      document.getElementById('fecha').disabled = false
      break;

    case "efectivo":
      document.getElementById('nombreTarjeta').disabled = true
      document.getElementById('NumTarjeta').disabled = true
      document.getElementById('cvv').disabled = true
      document.getElementById('fecha').disabled = true
      break;

    default:
      break;
  }
}

function codigos() {
  const ieee = document.registro.IEEE.value;
  const paper2 = document.registro.paper2.value;
  const paper3 = document.registro.paper3.value;

  if (ieee == 'no') {
    document.getElementById('MEM').style.display = 'none'
  } else {
    document.getElementById('MEM').style.display = 'block'
  }

  if (paper2 == 'no') {
    document.getElementById('paper2_').style.display = 'none'
  } else {
    document.getElementById('paper2_').style.display = 'block'
  }
  if (paper3 == 'no') {
    document.getElementById('paper3_').style.display = 'none'
  } else {
    document.getElementById('paper3_').style.display = 'block'
  }
}

(function ($) {
  "use strict";

  // Spinner
  var spinner = function () {
    setTimeout(function () {
      if ($('#spinner').length > 0) {
        $('#spinner').removeClass('show');
      }
    }, 1);
  };
  spinner();


  // Back to top button
  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });
  $('.back-to-top').click(function () {
    $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
    return false;
  });


  // Sidebar Toggler
  $('.sidebar-toggler').click(function () {
    $('.sidebar, .content').toggleClass("open");
    return false;
  });


  // Progress Bar
  $('.pg-bar').waypoint(function () {
    $('.progress .progress-bar').each(function () {
      $(this).css("width", $(this).attr("aria-valuenow") + '%');
    });
  }, { offset: '80%' });


  // Calender
  $('#calender').datetimepicker({
    inline: true,
    format: 'L'
  });


  // Testimonials carousel
  $(".testimonial-carousel").owlCarousel({
    autoplay: true,
    smartSpeed: 1000,
    items: 1,
    dots: true,
    loop: true,
    nav: false
  });




})(jQuery);

