jQuery(document).ready(function( $ ) {

  // Back to top button
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });
  $('.back-to-top').click(function(){
    $('html, body').animate({scrollTop : 0},1500, 'easeInOutExpo');
    return false;
  });


  $(window).scroll(function() {
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

    $(document).on('click', '.menu-has-children i', function(e) {
      $(this).next().toggleClass('menu-item-active');
      $(this).nextAll('ul').eq(0).slideToggle();
      $(this).toggleClass("fa-chevron-up fa-chevron-down");
    });

    $(document).on('click', '#mobile-nav-toggle', function(e) {
      $('body').toggleClass('mobile-nav-active');
      $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
      $('#mobile-body-overly').toggle();
    });

    $(document).click(function(e) {
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


  $('.nav-menu a, #mobile-nav a, .scrollto').on('click', function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      if (target.length) {
        var top_space = 0;

        if ($('#header').length) {
          top_space = $('#header').outerHeight();

          if( ! $('#header').hasClass('header-fixed') ) {
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
    center:true,
    responsive: { 0: { items: 1 }, 768: { items: 3 }, 992: { items: 4 }, 1200: {items: 5}
    }
  });

});



function SelectChanged() {
  const tipoUsuario = document.registro.tipoUsuario.value;
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

      document.getElementById('paper1').style.display = 'none'
      document.getElementById('paper2').style.display = 'none'
      document.getElementById('paper3').style.display = 'none'
      document.getElementById('pais').style.display = 'none'
      document.getElementById('pais').style.display = 'none'
      document.getElementById('idEst').style.display = 'none'
      document.getElementById('ocupacion').style.display = 'none'
      document.getElementById('wpa').style.display = 'none'
      document.getElementById('institucion').disabled = true
      document.getElementById('institucion').value = "Universidad Tecnológica de Panamá"

      span.textContent = "USD 75";
      span2.textContent = "USD 3.75";
      span3.textContent = "USD 0.50";
      span4.textContent = "USD 79.25";
      break;
    case 'Autor':
      document.getElementById('paper1').style.display = 'block'
      document.getElementById('paper2').style.display = 'block'
      document.getElementById('paper3').style.display = 'block'
      document.getElementById('pais').style.display = 'block'
      document.getElementById('idEst').style.display = 'none'
      document.getElementById('provincia').style.display = 'none'
      document.getElementById('wpa').style.display = 'none'
      document.getElementById('ocupacion').style.display = 'block'
      document.getElementById('institucion').disabled = false
      document.getElementById('institucion').value = ""

      span.textContent = "USD 325";
      span2.textContent = "USD 16.25";
      span3.textContent = "USD 0.50";
      span4.textContent = "USD 341.75";
      break;
    case 'Estudiante nacional':
      document.getElementById('paper1').style.display = 'none'
      document.getElementById('paper2').style.display = 'none'
      document.getElementById('paper3').style.display = 'none'
      document.getElementById('pais').style.display = 'none'
      document.getElementById('pais').style.display = 'block'
      document.getElementById('idEst').style.display = 'none'
      document.getElementById('ocupacion').style.display = 'none'
      document.getElementById('wpa').style.display = 'block'
      document.getElementById('institucion').disabled = false
      document.getElementById('institucion').value = ""

      span.textContent = "USD 75";
      span2.textContent = "USD 3.75";
      span3.textContent = "USD 0.50";
      span4.textContent = "USD 79.25";
      break;
    case 'Estudiante internacional':
      document.getElementById('paper1').style.display = 'none'
      document.getElementById('paper2').style.display = 'none'
      document.getElementById('paper3').style.display = 'none'
      document.getElementById('pais').style.display = 'block'
      document.getElementById('provincia').style.display = 'none'
      document.getElementById('idEst').style.display = 'block'
      document.getElementById('ocupacion').style.display = 'none'
      document.getElementById('wpa').style.display = 'block'
      document.getElementById('institucion').disabled = false
      document.getElementById('institucion').value = ""

      span.textContent = "USD 150";
      span2.textContent = "USD 7.50";
      span3.textContent = "USD 0.50";
      span4.textContent = "USD 158.00";
      break;
    case 'Funcionario UTP':
      document.getElementById('paper1').style.display = 'none'
      document.getElementById('paper2').style.display = 'none'
      document.getElementById('paper3').style.display = 'none'
      document.getElementById('pais').style.display = 'none'
      document.getElementById('idEst').style.display = 'none'
      document.getElementById('wpa').style.display = 'none'
      document.getElementById('ocupacion').style.display = 'block'
      document.getElementById('institucion').disabled = true
      document.getElementById('institucion').value = "Universidad Tecnológica de Panamá"

      span.textContent = "USD 225";
      span2.textContent = "USD 11.25";
      span3.textContent = "USD 0.50";
      span4.textContent = "USD 236.75";
      break;
    case 'Profesional nacional':
      document.getElementById('paper1').style.display = 'none'
      document.getElementById('paper2').style.display = 'none'
      document.getElementById('paper3').style.display = 'none'
      document.getElementById('pais').style.display = 'none'
      document.getElementById('idEst').style.display = 'none'
      document.getElementById('ocupacion').style.display = 'block'
      document.getElementById('wpa').style.display = 'block'
      document.getElementById('institucion').disabled = false
      document.getElementById('institucion').value = ""

      span.textContent = "USD 225";
      span2.textContent = "USD 11.25";
      span3.textContent = "USD 0.50";
      span4.textContent = "USD 236.75";
      break;
    case 'Profesional internacional':
      document.getElementById('paper1').style.display = 'none'
      document.getElementById('paper2').style.display = 'none'
      document.getElementById('paper3').style.display = 'none'
      document.getElementById('pais').style.display = 'block'
      document.getElementById('provincia').style.display = 'none'
      document.getElementById('idEst').style.display = 'block'
      document.getElementById('ocupacion').style.display = 'none'
      document.getElementById('wpa').style.display = 'block'
      document.getElementById('institucion').disabled = false
      document.getElementById('institucion').value = ""

      span.textContent = "USD 300";
      span2.textContent = "USD 15.00";
      span3.textContent = "USD 0.50";
      span4.textContent = "USD 315.50";
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
      $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
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
  }, {offset: '80%'});


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
      nav : false
  });


  // Worldwide Sales Chart
  var ctx1 = $("#worldwide-sales").get(0).getContext("2d");
  var myChart1 = new Chart(ctx1, {
      type: "bar",
      data: {
          labels: ["2016", "2017", "2018", "2019", "2020", "2021", "2022"],
          datasets: [{
                  label: "USA",
                  data: [15, 30, 55, 65, 60, 80, 95],
                  backgroundColor: "rgba(0, 156, 255, .7)"
              },
              {
                  label: "UK",
                  data: [8, 35, 40, 60, 70, 55, 75],
                  backgroundColor: "rgba(0, 156, 255, .5)"
              },
              {
                  label: "AU",
                  data: [12, 25, 45, 55, 65, 70, 60],
                  backgroundColor: "rgba(0, 156, 255, .3)"
              }
          ]
          },
      options: {
          responsive: true
      }
  });


  // Salse & Revenue Chart
  var ctx2 = $("#salse-revenue").get(0).getContext("2d");
  var myChart2 = new Chart(ctx2, {
      type: "line",
      data: {
          labels: ["2016", "2017", "2018", "2019", "2020", "2021", "2022"],
          datasets: [{
                  label: "Salse",
                  data: [15, 30, 55, 45, 70, 65, 85],
                  backgroundColor: "rgba(0, 156, 255, .5)",
                  fill: true
              },
              {
                  label: "Revenue",
                  data: [99, 135, 170, 130, 190, 180, 270],
                  backgroundColor: "rgba(0, 156, 255, .3)",
                  fill: true
              }
          ]
          },
      options: {
          responsive: true
      }
  });
  


  // Single Line Chart
  var ctx3 = $("#line-chart").get(0).getContext("2d");
  var myChart3 = new Chart(ctx3, {
      type: "line",
      data: {
          labels: [50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150],
          datasets: [{
              label: "Salse",
              fill: false,
              backgroundColor: "rgba(0, 156, 255, .3)",
              data: [7, 8, 8, 9, 9, 9, 10, 11, 14, 14, 15]
          }]
      },
      options: {
          responsive: true
      }
  });


  // Single Bar Chart
  var ctx4 = $("#bar-chart").get(0).getContext("2d");
  var myChart4 = new Chart(ctx4, {
      type: "bar",
      data: {
          labels: ["Italy", "France", "Spain", "USA", "Argentina"],
          datasets: [{
              backgroundColor: [
                  "rgba(0, 156, 255, .7)",
                  "rgba(0, 156, 255, .6)",
                  "rgba(0, 156, 255, .5)",
                  "rgba(0, 156, 255, .4)",
                  "rgba(0, 156, 255, .3)"
              ],
              data: [55, 49, 44, 24, 15]
          }]
      },
      options: {
          responsive: true
      }
  });


  // Pie Chart
  var ctx5 = $("#pie-chart").get(0).getContext("2d");
  var myChart5 = new Chart(ctx5, {
      type: "pie",
      data: {
          labels: ["Italy", "France", "Spain", "USA", "Argentina"],
          datasets: [{
              backgroundColor: [
                  "rgba(0, 156, 255, .7)",
                  "rgba(0, 156, 255, .6)",
                  "rgba(0, 156, 255, .5)",
                  "rgba(0, 156, 255, .4)",
                  "rgba(0, 156, 255, .3)"
              ],
              data: [55, 49, 44, 24, 15]
          }]
      },
      options: {
          responsive: true
      }
  });


  // Doughnut Chart
  var ctx6 = $("#doughnut-chart").get(0).getContext("2d");
  var myChart6 = new Chart(ctx6, {
      type: "doughnut",
      data: {
          labels: ["Italy", "France", "Spain", "USA", "Argentina"],
          datasets: [{
              backgroundColor: [
                  "rgba(0, 156, 255, .7)",
                  "rgba(0, 156, 255, .6)",
                  "rgba(0, 156, 255, .5)",
                  "rgba(0, 156, 255, .4)",
                  "rgba(0, 156, 255, .3)"
              ],
              data: [55, 49, 44, 24, 15]
          }]
      },
      options: {
          responsive: true
      }
  });

  
})(jQuery);

