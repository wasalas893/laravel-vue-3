<template >


 <!--Slider section-->
 <div class="home-slider-section">
   <div class="container-fluid">
    <div class="row ">
        <div class="col-md-12 p-0">
            <swiper :navigation="true" :pagination="true" :modules="modules" class="mySwiper">
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







 


</template>





 <script>

import { Swiper, SwiperSlide } from "swiper/vue";


import "swiper/css";

import "swiper/css/navigation";
import "swiper/css/pagination";




import { Navigation , Pagination } from "swiper";

export default {
  components: {
    Swiper,
    SwiperSlide,
  },
  setup() {
    return {
      modules: [Navigation,Pagination],
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
h2{
    font-size: 44px !important;
    line-height: 45px !important;
    font-weight: normal !important;
    font-family: "EB Garamond", serif !important;
    letter-spacing: 0px;
    color:#FFFFFF;
    opacity: 1;
}
p{
    font-size: 17px !important;
    line-height: 28px !important;
    font-weight: normal !important;
    font-family: "EB Garamond", serif !important;
    letter-spacing: 0.06px;
    opacity: 1;
  color:#FFFFFF;

}

</style>
