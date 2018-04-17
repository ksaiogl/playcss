$(document).ready(function(){
    "use strict"; // Start of use strict

    // jQuery for page scrolling feature - requires jQuery Easing plugin


    /* Navigation bar JS Starts  */
        console.log( "ready!" );
        $('.mmm').on("click", function(){
          $(this).toggleClass("clicked");
        });
        window.onscroll=function(){
          if(window.scrollY>0){
            $(".nav").css("background", "#161616");
          }else if(window.scrollY==0){
            $(".nav").css("background", "");
          }
        };
        $('.collapseSpan').on("click", function(){
            $(".newNav").slideToggle("slow");
        });
    /* Navigation bar JS ends  */


    /* Page Scroll JS starts  */
        $('a.page-scroll').bind('click', function(event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: ($($anchor.attr('href')).offset().top - 50)
            }, 1250, 'easeInOutExpo');
            event.preventDefault();
        });
    /* Navigation bar JS ends  */



    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 100
    });



      /* Navigation bar JS ends  */
        var canvas = document.getElementById("myCanvas");
        var ctx = canvas.getContext("2d");
        ctx.fillStyle = "rgb(209, 219, 233)";
        ctx.fillRect(0,50,400,200);
        var canvas = document.getElementById("myCanvas1");
        var ctx = canvas.getContext("2d");
      /* Navigation bar JS ends  */
        

        /* Navigation bar JS ends  */
            $('.navbar-collapse ul li a').click(function() {
                $('.navbar-toggle:visible').click();
            });

            // Offset for Main Navigation
            $('#mainNav').affix({
                offset: {
                    top: 50
                }
            })

            $('.nav li').click(function(){
                $(this).addClass('is-active').siblings().removeClass('is-active');
            });
    /* Navigation bar JS ends  */


    /* grid item JS ends  */
        $('.grid .item').click(function(){
            $('.website .alert-element').toggleClass('is-active');
        });
    /* grid item JS ends  */


    /* pop1  JS starts  */
        $('.box2 .pop1').click(function(){
            $('.overlay').addClass('is-active');
                setTimeout(function(){
                $('.overlay').removeClass('is-active');
                }, 5000);
            });
    /* pop1 JS ends  */


    /* click faces JS starts  */
      $('.section-modal .profile').click(function(){
          $('.overlay').addClass('is-active');
              setTimeout(function(){
              $('.overlay').removeClass('is-active');
              }, 5000);
          });
    /* click faces JS ends  */


    /* form JS starts  */
        $('.button').click(function(){
            var $btn = $(this),
                $step = $btn.parents('.modal-body1'),
                stepIndex = $step.index(),
                $pag = $('.modal-header span').eq(stepIndex);

                if(stepIndex === 0 || stepIndex === 1) { step1($step, $pag); }
                else { step3($step, $pag); }
              
        });
    /* form JS ends  */


    /* form  JS starts  */
          $('.rerun-button').click(function(){
                  $('.modal-wrap').removeClass('animate-up')
                                .find('.modal-body1')
                                .first().addClass('is-showing')
                                .siblings().removeClass('is-showing');

                  $('.modal-header span').first().addClass('is-active')
                                        .siblings().removeClass('is-active');
                  $(this).hide();
          });
      /* form JS ends  */  


      /* Monstray grid JS starts  */
          $('.grid1').masonry({itemSelector: '.item1', columnWidth: 160, gutter: 10});

          $('.item1').each(function(i){
                    setTimeout(function(){
                        $('.item1').eq(i).addClass('is-visible');
                    }, 200 * i);
          });

          $('.section-modal .profile').click(function(){
                    $('.overlay').addClass('is-active');
                        setTimeout(function(){
                    $('.overlay').removeClass('is-active');
                  }, 5000);
          });
    /* Monstray grid JS ends  */

    /* Monstray grid JS ends  */
          $(".myIcons").click(function (event, ui) {
              $(".blocker").css("display", "block");
          getImage(event);
          });
        $(".blackScreen").click(function () {
              $(".blocker").css("display", "none");
          });
    /* Monstray grid JS ends  */
           pop1();
}) // End of use strict


function step1($step, $pag){
console.log('step1');
  // animate the step out
  $step.addClass('animate-out');
  
  // animate the step in
  setTimeout(function(){
    $step.removeClass('animate-out is-showing')
         .next().addClass('animate-in');
    $pag.removeClass('is-active')
          .next().addClass('is-active');
  }, 600);
  
  // after the animation, adjust the classes
  setTimeout(function(){
    $step.next().removeClass('animate-in')
          .addClass('is-showing');
    
  }, 1200);
}


function step3($step, $pag){
console.log('3');

  // animate the step out
  $step.parents('.modal-wrap').addClass('animate-up');

  setTimeout(function(){
    $('.rerun-button').css('display', 'inline-block');
  }, 300);
}

function pop1(){
  $(".pop12").click(function () {
        $(".pop1").css("display", "block");
    getImage(event);
    });
  $(".blackScreen").click(function () {
        $(".pop1").css("display", "none");
    });
}


