<!-- brand slider -->
<div class="rts-brand v_1 <?= htmlspecialchars($class ?? ''); ?>">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-12 col-md-11">
                <div class="rts-brand-slider swiper swiper-data" 
                data-swiper='{
                    "slidesPerView":6,
                    "loop": true,
                    "autoplay":{
                        "delay":"3000"
                    },
                    "breakpoints":{
                        "320":{
                            "slidesPerView": 3,
                            "centeredSlides": true
                        },
                        "575":{
                            "slidesPerView": 4,
                            "centeredSlides": true
                        },
                        "768":{
                            "slidesPerView": 5,
                            "centeredSlides": true
                        },
                        "991":{
                            "slidesPerView": 6,
                            "centeredSlides": true
                        },
                        "1201":{
                            "slidesPerView": 6
                        }
                    }
            }'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="single-brand-logo">
                                <a href="#">
                                    <img src="assets/images/brand/01.svg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-brand-logo">
                                <a href="#">
                                    <img src="assets/images/brand/02.svg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-brand-logo">
                                <a href="#">
                                    <img src="assets/images/brand/03.svg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-brand-logo">
                                <a href="#">
                                    <img src="assets/images/brand/04.svg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-brand-logo">
                                <a href="#">
                                    <img src="assets/images/brand/05.svg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-brand-logo">
                                <a href="#">
                                    <img src="assets/images/brand/06.svg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- brand slider end -->