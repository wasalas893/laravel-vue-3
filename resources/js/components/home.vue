<template >

 <!--Slider section-->
 <div class="home-slider-section">
   <div class="container-fluid">
    <div class="row ">
        <div class="col-md-12 p-0">
            <swiper :navigation="true" :pagination="{clickable: true}" :autoplay='{"delay": 4000,"disableOnInteraction": false }' :loop="true"  :modules="modules" class="mySwiper">
                <swiper-slide>
                    <img class="d-block w-60" src="/images/banner/home-slider-1.jpg" alt="First slide">
                    <div class="inner-section-slider">
                        <h2>Fine, Exquisitely Faceted Gems</h2>
                        <img class="inner-gem-slider" src="images/banner/gem-slider-1.png" alt="First slide"/>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <img class="d-block w-60" src="/images/banner/home-slider-2.jpg" alt="First slide">
                    <div class="inner-section-slider">
                        <h2>Fine, Exquisitely Faceted Gems</h2>
                        <img class="inner-gem-slider" src="images/banner/gem-slider-1.png" alt="First slide"/>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <img class="d-block w-60" src="/images/banner/home-slider-3.jpg" alt="First slide">
                    <div class="inner-section-slider">
                        <h2>Fine, Exquisitely Faceted Gems</h2>
                        <img class="inner-gem-slider" src="images/banner/gem-slider-1.png" alt="First slide"/>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </swiper-slide>

              </swiper>



        </div>

    </div>

   </div>
 </div>

<div class="home-two">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 home-two-text">
                <div class="section-body-text">
                    <div class="header-text">
                        <h2>Our Stones</h2>
                    </div>
                    <div class="header-description">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="home-three-main-section">
    <div class="container-fluid">
        <div class="row">
          <div class="slider-section-box">
            <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-4 p-0">
                        <swiper :navigation="true"  :modules="modules" :loop="true" :autoplay='{"delay": 4000,"disableOnInteraction": false }' class="mySwiper">
                            <swiper-slide>
                                <img class="slider-box" src="/images/stones/1728068422540019.jpg" alt="First slide">
                            </swiper-slide>
                            <swiper-slide>
                                <img class="slider-box" src="/images/stones/1728169734362779.jpg" alt="First slide">
                            </swiper-slide>
                           </swiper>
                    </div>
                    <div class="col-md-4 p-0">
                        <swiper :navigation="true" :loop="true" :autoplay='{"delay": 4000,"disableOnInteraction": false }'  :modules="modules" class="mySwiper">
                            <swiper-slide>
                                <img class="slider-box" src="/images/stones/1732360140751262.jpg" alt="First slide">
                            </swiper-slide>
                            <swiper-slide>
                                <img class="slider-box" src="/images/stones/1733792940262558.jpg" alt="First slide">
                            </swiper-slide>
                           </swiper>
                    </div>
                    <div class="col-md-4 p-0">
                        <swiper :navigation="true" :loop="true" :autoplay='{"delay": 4000,"disableOnInteraction": false }'  :modules="modules" class="mySwiper">
                            <swiper-slide>
                                <img class="slider-box" src="/images/stones/1733796926504780.jpg" alt="First slide">
                            </swiper-slide>
                            <swiper-slide>
                                <img class="slider-box" src="/images/stones/1733797921481280.jpg" alt="First slide">
                            </swiper-slide>
                           </swiper>
                    </div>
                    <div class="col-md-4 p-0">
                        <swiper :navigation="true" :loop="true" :autoplay='{"delay": 4000,"disableOnInteraction": false }'  :modules="modules" class="mySwiper">
                            <swiper-slide>
                                <img class="slider-box" src="/images/stones/1733797921481280.jpg" alt="First slide">
                            </swiper-slide>
                            <swiper-slide>
                                <img class="slider-box" src="/images/stones/1733796926504780.jpg" alt="First slide">
                            </swiper-slide>
                           </swiper>
                    </div>
                    <div class="col-md-4 p-0">
                        <swiper :navigation="true" :loop="true" :autoplay='{"delay": 4000,"disableOnInteraction": false }'  :modules="modules" class="mySwiper">
                            <swiper-slide>
                                <img class="slider-box" src="/images/stones/1733799917172629.jpg" alt="First slide">
                            </swiper-slide>
                            <swiper-slide>
                                <img class="slider-box" src="/images/stones/sapphire-cate-img4.jpg" alt="First slide">
                            </swiper-slide>
                           </swiper>
                    </div>
                    <div class="col-md-4 p-0">
                        <swiper :navigation="true" :loop="true" :autoplay='{"delay": 4000,"disableOnInteraction": false }'  :modules="modules" class="mySwiper">
                            <swiper-slide>
                                <img class="slider-box" src="/images/stones/sapphire-cate-img4.jpg" alt="First slide">
                            </swiper-slide>
                            <swiper-slide>
                                <img class="slider-box" src="/images/stones/1733799917172629.jpg" alt="First slide">
                            </swiper-slide>
                           </swiper>
                    </div>
                   
                    
                  </div>
            </div>



          </div>
        </div>

    </div>
</div>



<div class="home-five-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-0 gems-section-image">
                <img src="/images/Home/home-img-1.jpg" alt="">
            </div>
            <div class="col-md-12">
                <div class="image-text-gems">
                    <h2>Lorem Ipsum is simply dummy text of the printing and</h2>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="home-six-section">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="six-header-text">
                            <h2>typesetting industry.</h2>
                        </div>
                        <div class="six-header-description">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, unknown printer took a galley of type and scrambled it to make a type. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <p> Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, unknown printer took a galley of type and scrambled it to make a type.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>








</template>





 <script>

import { Swiper, SwiperSlide } from "swiper/vue";


import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";




import { Navigation , Pagination, Autoplay } from "swiper";

export default {
  components: {
    Swiper,
    SwiperSlide,
  },
  setup() {
    return {
      modules: [Navigation,Pagination,Autoplay],
    };
  },





};
</script>



<style>


.swiper {
  width: 100%;
  height: 100%;
}


.swiper-slide {
  text-align: center;
  width: 100% !important;
  font-size: 18px;
  background: #fff;

  /* Center slide text vertically */
  display: -webkit-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  -webkit-justify-content: center;
  justify-content: center;
  -webkit-box-align: center;
  -ms-flex-align: center;
  -webkit-align-items: center;
  align-items: center;
}


.swiper-slide img {
  display: block;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.inner-section-slider {
    position: absolute;
}
img.inner-gem-slider {
    display: flex;
    height: auto;
    align-items: center;
    padding: 0px 140px 0px 140px;
}
.home-slider-section h2{
    font-size: 44px !important;
    line-height: 45px !important;
    font-weight: normal !important;
    font-family: "EB Garamond", serif !important;
    letter-spacing: 0px;
    color:#FFFFFF;
    opacity: 1;
}
.home-five-section {
    padding-top: 80px;
}
.image-text-gems {

    position: absolute;
    bottom: 87%;
    left: 20%;
    width: 50%;
}
.six-header-text h2{
    font-size: 60px !important;
    line-height: 66px !important;
    font-weight: normal !important;
    font-family: "EB Garamond", serif !important;
    letter-spacing: 0px;
    color:#606060;
    opacity: 1;

}
.image-text-gems h2{
    font-size: 60px !important;
    line-height: 66px !important;
    font-weight: normal !important;
    font-family: "EB Garamond", serif !important;
    letter-spacing: 0px;
    color:#FFFFFF;
    opacity: 1;
}

.header-text h2{
    font-size: 44px !important;
    line-height: 45px !important;
    font-weight: normal !important;
    font-family: "EB Garamond", serif !important;
    letter-spacing: 0px;
    color:#606060;
    opacity: 1;
}

.home-slider-section p{
    font-size: 17px !important;
    line-height: 28px !important;
    font-weight: normal !important;
    font-family: "EB Garamond", serif !important;
    letter-spacing: 0.06px;
    opacity: 1;
  color:#FFFFFF;

}

.header-description p{
    font-size: 17px !important;
    line-height: 28px !important;
    font-weight: normal !important;
    font-family: "EB Garamond", serif !important;
    letter-spacing: 0.06px;
    opacity: 1;
  color:#606060;

}
.home-two-text {
    display: flex;
    justify-content: center;
    text-align: center;
}
.home-two {
    padding-top: 80px;
    padding-bottom: 80px;
}
.header-description {
    padding-top: 20px;
    padding-bottom: 20px;
}
.gems-section-image img{
    width: 100%;
}

</style>
