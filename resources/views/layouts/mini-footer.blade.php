
</section>

<footer id ="footerId">
        <div  class="logo">
            <img src="{{asset('assets/images/lg.png')}}"
                 alt="logoIcon" class="d-block mx-auto   mb-2">
        </div>
<div class="footer-color-mini ">

        <div class="footer-bottom d-flex flex-column vertical-align-center  align-items-center ">
            <div class="footer-middle col-12">
                <div class="social-mini">
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-telegram" aria-hidden="true"></i></a>
                 </div>
            </div>
        </div>
        <div class="footer-base d-flex flex-row justify-content-center align-items-center">

                     <a class="nav-link" href="/shop"><h3>{{ __('all.shop') }}</h3></a>

                    <a class="nav-link" href="/help"><h3>{{ __('all.help') }}</h3></a>

                    <a class="nav-link" href="/about"><h3>{{ __('all.about') }}</h3></a>

                </div>
        </div>
        <br>

</footer>


<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="{{asset('assets/slick/slick.min.js')}}"></script>
<script>
    (function($){
        $(document).ready(function(){
            $('.slider').slick({
                dots: true,
                infinite: false,
                speed: 300,
                slidesToShow: 3,
                slidesToScroll: 3,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
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
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });
        });
    })(jQuery)

</script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="{{asset('js/script.js')}}"></script>
@yield('js')
</div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>