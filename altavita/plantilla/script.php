<!--<script src="assets/js/olw-carousel/app.js"> </script>-->
<script src="assets/js/jquery-3.2.1.min.js"> </script>

<script src="assets/js/olw-carousel/highlight.js"> </script>
<script src="assets/js/olw-carousel/jquery.min.js"> </script>
<script src="assets/js/olw-carousel/owl.carousel.js"> </script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/api.js"></script>
<script type="text/javascript" src="assets/js/cliente.js"></script>

<script>   
        $(document).ready(function() {
              $('.owl-carousel').owlCarousel({
                loop: true,
                dots: false,
                margin: 10,
                  autoplay: true,
                responsiveClass: true,
                responsive: {
                  0: {
                    items: 1,
                    nav: true
                  },
                  600: {
                    items: 3,
                      center:true,
                    nav: true
                      
                  },
                  1000: {
                    items: 4,
                      
                    nav: true,
                    loop: true,
                    margin: 10,
                      
                  }
                }
              })
            })

    /*$(document).ready(function(){
        console.log(window.location);
      $('li').click(function(){
        $('li').removeClass("active");
        $(this).addClass("active");
    });
    });

          */


    /*    
    jQuery(document).ready(function($){
      // Get current path and find target link
      var path = window.location.pathname.split("/").pop();
      
      // Account for home page with empty path
      if ( path == '' ) {
        path = 'index.php';
      }
          
      var target = $('ul li[href="'+path+'"]');
      // Add active class to target link
      target.addClass('active');
    });
        */



    var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}

</script>

