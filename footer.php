<footer>
    <div class="container">
        <div class="_flex _space-between _center">
            <h3>
                    &#169;copyright 2018
            </h3>
            <h3>BR / STORE</h3>

        </div>
    </div>
</footer>
<!-- after scripts -->
<!-- scripts -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/fontawesome-all.min.js"></script>
<script src="js/jquery.mask.js"></script>
<script src="js/action.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


<script type="text/javascript">
    $(document).ready(function(){
        $('.responsive-slider').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
      });
    });
  </script>
    
