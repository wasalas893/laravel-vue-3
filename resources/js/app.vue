<template>
  
     <Header></Header>
            <router-view></router-view>
      <Footer></Footer>
    
</template>



<script>
    import Header from './common/header';
    import Footer from './common/footer';


export default {
      
  components: {
    Header,
    Footer
  }
}

</script>

<style>
    @import url("https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&display=swap");
@import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400&display=swap');
@font-face {
    font-family: "Calibri";
    src: url("/fonts/Calibri.woff2") format("woff2"), url("/fonts/Calibri.woff") format("woff");
    font-weight: normal;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: "Calibri";
    src: url("/fonts/Calibri-Bold.woff2") format("woff2"), url("/fonts/Calibri-Bold.woff") format("woff");
    font-weight: bold;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: "Calibri";
    src: url("/fonts/Calibri-Light.woff2") format("woff2"), url("/fonts/Calibri-Light.woff") format("woff");
    font-weight: 300;
    font-style: normal;
    font-display: swap;
}

h1,
.h1head {
    /* font: normal normal normal 60px/66px EB Garamond; */
    font-size: 60px !important;
    line-height: 55px !important;
    font-weight: normal !important;
    font-family: "EB Garamond", serif !important;
    letter-spacing: 0px;
    color: #292929 !important;
    opacity: 1;
}

h2,
.h2head {
    font-size: 42px !important;
    line-height: 50px !important;
    font-weight: normal !important;
    font-family: "EB Garamond", serif !important;
    letter-spacing: 0px;
    color: #0d0d0d !important;
    opacity: 1;
}

h3,
.h3head {
    font-size: 28px !important;
    line-height: 32px !important;
    font-weight: normal !important;
    font-family: "EB Garamond", serif !important;
    letter-spacing: 0.08px;
    color: #0d0d0d !important;
    opacity: 1;
}

.paraf1,
.home-journal-name-wrap p {
    font-size: 20px !important;
    line-height: 32px !important;
    font-weight: normal !important;
    font-family: "EB Garamond", serif !important;
    letter-spacing: 0.06px;
    color: #606060 !important;
    opacity: 1;
}

.paraf2,
.footer-first-row-wrap a,
.sidebar-main-wrap ul li,
.sidebar-main-wrap ul li a,
.shape-name-wrap p,
.Clarity-style-wrap .container-checkbox,
.container-checkbox {
    font-size: 16px !important;
    line-height: 30px !important;
    font-weight: normal !important;
    font-family: "EB Garamond", serif !important;
    letter-spacing: 0.05px;
    color: #0d0d0d !important;
    opacity: 1;
}

.paraf3 {
    font-size: 16px !important;
    line-height: 24px !important;
    font-weight: normal !important;
    font-family: "Calibri" !important;
    letter-spacing: 1.6px;
    color: #292929 !important;
    opacity: 1;
}

.paraf4,
.footer-left-colum-wrap span,
.footer-bottom-wrap span {
    font-size: 12px !important;
    line-height: 26px !important;
    font-weight: normal !important;
    font-family: "Calibri" !important;
    letter-spacing: 0px;
    color: #4a4a4a !important;
    opacity: 1;
}

.paraf5,
.home-journal-date-wrap p {
    font-size: 12px !important;
    line-height: 26px !important;
    font-weight: normal !important;
    font-family: "Calibri" !important;
    letter-spacing: 1.2px;
    color: #848484 !important;
    text-transform: uppercase;
}

.nav-link {
    text-align: right;
    font-size: 16px !important;
    line-height: 28px !important;
    font-weight: normal !important;
    font-family: "EB Garamond", serif !important;
    letter-spacing: 3.2px;
    color: #292929 !important;
    text-transform: uppercase !important;
    opacity: 1;
}

.sidebar-main-category-names,
.sidebar-title {
    font-size: 14px !important;
    line-height: 32px !important;
    font-family: "EB Garamond", serif !important;
    letter-spacing: 1.4px;
    color: #0D0D0D;
    text-transform: uppercase;
    opacity: 1;
}

.link-explore {
    font-size: 20px !important;
    line-height: 32px !important;
    font-weight: normal !important;
    font-family: "Caveat", cursive;
    letter-spacing: 0.06px;
    color: #724b8e !important;
}

.info-head-txt-prpl {
    font-size: 20px !important;
    line-height: 32px !important;
    font-weight: normal !important;
    font-family: "EB Garamond", serif !important;
    letter-spacing: 0.06px;
    color: #724b8e !important;
}

.info-head-txt {
    font-size: 20px !important;
    line-height: 32px !important;
    font-weight: normal !important;
    font-family: "EB Garamond", serif !important;
    letter-spacing: 0.06px;
    color: #606060 !important;
}


/* color codes  */

.txt-darkblack,
.sidebar-main-wrap ul li,
.sidebar-main-wrap ul li a,
.shape-name-wrap p,
.Clarity-style-wrap .container-checkbox,
.container-checkbox {
    color: #606060 !important;
}

.txt-white {
    color: #ffffff !important;
}

.txt-purple {
    color: #724B8E !important;
}

.txt-dark-gray {
    color: #848484 !important;
}

.txt-light-gray {
    color: #C4C4C4 !important;
}


/* txt hover  */

.link-explore:hover {
    color: #BD98BB !important;
    text-decoration: none !important;
}

.footer-first-row-wrap a:hover {
    color: #927190 !important;
}

.custom-padding-12 {
    padding-left: 12vw;
    padding-right: 12vw;
}

.stone-info-slider .carousel-inner {
    max-height: 800px;
}


/* Short Codes */

.margin-center {
    margin: 0px auto;
}

.sectionpa-85,
.home-logo-mainwrap,
.mailchimp-ful-wrap,
.home-journal-main-wrap,
.home-instagram-feed-wrap {
    padding: 80px 0px;
}

.sectionpa-120 {
    padding: 120px 0px;
}

.txt-center,
.home-middle-logo-main-wrap,
.mailchimp-heading,
.mailchimp-description,
.footer-first-row-wrap,
.footer-second-row-wrap,
.footer-third-row-wrap,
.home-map-section-head,
.home-map-image-wrap,
.home-journal-head-wrap,
.home-journal-name-wrap p,
.home-journal-date-wrap p {
    text-align: center;
}

.txt-decor-non,
.footer-first-row-wrap a {
    text-decoration: none !important;
}

.txt-right,
.footer-left-colum-wrap {
    text-align: right;
}

.border-bt,
.home-typesetting-ful-wrap,
.home-custom-map-section,
.footer-main-wrap {
    border-bottom: 1px solid #E5E5E5;
}

.border-tp,
.home-journal-main-wrap,
.footer-main-wrap {
    border-top: 1px solid #E5E5E5;
}

.purple-btn {
    background: #724B8E;
    border-radius: 28px;
    font-size: 16px !important;
    line-height: 22px !important;
    font-weight: normal !important;
    font-family: 'Open Sans', sans-serif !important;
    padding: 15px 30px;
    letter-spacing: 1.28px;
    color: #FFFFFF;
    text-transform: uppercase;
    text-align: center;
    transition: 0.3s;
}

.purple-btn:hover {
    background: #BD98BB !important;
    color: #FFFFFF !important;
    text-decoration: none !important;
}


/* slider style  */

.home-slider-wrap img.d-block {
    height: 100vh !important;
}

.carousel-caption {
    top: 20% !important;
}

.ourstone-wrap {
    height: 500px;
    background: #ffffff 0% 0% no-repeat padding-box;
    text-align: center;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-content: space-around;
    justify-content: center;
}

div#carouselExampleControls1 .carousel-item img,
#carouselExampleControls2 .carousel-item img,
#carouselExampleControls3 .carousel-item img,
#carouselExampleControls4 .carousel-item img {
    min-height: 500px;
    object-fit: cover;
    object-position: center center;
}

.home-slider-bottom-wrap {
    position: absolute;
    width: 100%;
    bottom: 0;
    background: #ffffff;
    opacity: 0;
    transition: 0.3s;
    padding: 15px;
    text-align: center;
}

.home-stones-slider-wrap:hover .home-slider-bottom-wrap {
    opacity: 0.5;
}

.home-slider-bottom-wrap-txt p {
    margin-bottom: 0px;
}

.home-slider-wrap ol.carousel-indicators li {
    width: 8px;
    height: 8px;
    border-radius: 20px;
}

.home-slider-wrap ol.carousel-indicators {
    bottom: 25%;
}

.slider-heading {
    padding-bottom: 0px;
}

.slider-paraf {
    margin: 0px auto;
    width: 35%;
}

.ourstone-wrap p {
    width: 55%;
    margin: 0px auto;
}

.home-middle-logo-head {
    width: 65%;
    margin: 20px auto;
}

.home-middle-logo-descript {
    width: 85%;
    margin: 0px auto;
}

.mailchimp-description {
    width: 20%;
    margin: 20px auto 0px;
}

.mailchimp-section-wrap {
    background-image: url('/images/stones/subscribe-bg.jpg');
    background-size: cover;
}

.mailchimp-form-wrap .form-control {
    border: 1px solid #707070;
    border-radius: 33px 33px;
}

.mailchimp-form-wrap .input-group-append {
    margin-left: -52px;
}

.mailchimp-form-wrap .input-group-append .btn {
    background: #724B8E;
    border-radius: 33px;
    border-top-left-radius: 33px !important;
    border-bottom-left-radius: 33px !important;
    padding: 15px 65px !important;
    z-index: 9 !important;
    text-align: center;
    font-size: 16px !important;
    line-height: 22px !important;
    font-weight: normal !important;
    font-family: 'Open Sans', sans-serif !important;
    letter-spacing: 1.28px;
    color: #FFFFFF;
    text-transform: uppercase;
}

.mailchimp-form-wrap .input-group.mb-3.col-4 {
    margin: 30px auto;
}

.btn-outline-secondary.focus,
.btn-outline-secondary:focus {
    box-shadow: 0 0 0 0.2rem rgb(108 117 125 / 0%) !important;
}

.form-control:focus {
    box-shadow: 0 0 0 0.2rem rgb(0 123 255 / 0%) !important;
    border: 1px solid #707070 !important;
}

.home-middle-background-section {
    margin-top: 80px;
    background-image: url('/images/Home/home-img-1.jpg');
    background-position: center center;
    background-size: cover;
    min-height: 450px;
    position: relative;
}

.home-middle-background-section .col-md-12 {
    position: inherit !important;
}

.home-middle-banner-bottom-txt-wrap {
    position: absolute;
    bottom: 3%;
}

.typesetting-description-wrap {
    margin-top: 30px;
}


/* stone slider  */

.stone-slider-wrap,
.stone-slider-wrap .carousel-item {
    height: calc(100vh - 300px);
}

p.stone-slider-paraf {
    width: 60%;
    margin: 0px auto;
}

h2.stone-head-txt {
    width: 40%;
    margin: 15px auto;
}

.stone-slider-caption {
    top: 20% !important;
}

.home-map-section-head p {
    width: 40%;
    margin: 0px auto;
}

.home-journal-name-wrap p {
    margin: 0px auto;
    width: 65%;
}

.home-journal-date-wrap {
    padding-top: 15px;
}

.home-journal-explore-btn-wrap {
    text-align: center;
    width: 100%;
    padding: 40px 0px 0px 0px;
}

.home-typesetting-ful-wrap {
    padding-bottom: 40px;
}

.home-colord-logo-mainwrap {
    background: #FAFAFA;
}

.home-insta-right-wrap {
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.insta-description-wrap p {
    text-align: center;
    width: 60%;
    margin: 10px auto;
}

.insta-head-wrap {
    margin-top: 10px;
}

.insta-btn-wrap {
    margin-top: 30px;
}


/* product category page */

.top-banner-main-wrap {
    background-image: url('/images/stone_category/category_banner.jpg');
    min-height: 350px;
    position: relative;
}

.banner-main-txt-wrap {
    position: absolute;
    top: 20%;
    text-align: center;
}

.banner-descript-wrap {
    width: 40%;
    margin: 20px auto;
}

.sidebar-section-1 {
    position: relative;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.color-codes-wrap {
    background: #F73737;
    height: 18px;
    width: 18px;
    border-radius: 50%;
}

.sidebar-main-wrap ul {
    list-style: none !important;
}

.category-head-txt-wrap {
    border-bottom: 1px solid #EDEDED;
}

.category-head-txt-wrap p {
    margin-bottom: 0px;
}

.category-head-txt-wrap {
    padding-bottom: 15px;
}

.main-category-list-wrap {
    padding-top: 15px;
}

.shape-style-wrap {
    display: flex;
}

.shape-style-wrap .container-checkbox .checkmark {
    top: 8px;
}

.Clarity-style-wrap .container-checkbox .checkmark,
.enhancement-list-wrap .container-checkbox .checkmark,
.caratweight-style-wrap .container-checkbox .checkmark {
    top: 5px !important;
}

.shape-name-wrap {
    padding-left: 10px;
    padding-top: 3px;
}

.shape-list-wrap li {
    margin-top: 10px;
}

.shape-img-wrap img {
    height: 28px;
    width: auto;
}

.category-prod-name-wrap {
    padding-top: 20px;
}

.products_listing-wrap {
    padding-top: 30px;
}

.stone-info-left-sidebox-wrap:nth-child(odd) {
    background: #FAFAFA !important;
}

.stone-info-left-sidebox-wrap:nth-child(even) {
    background: #fafafa00 !important;
}

.stone-info-left-sidebox-wrap {
    background: #FAFAFA 0% 0% no-repeat padding-box;
    padding: 16px 16px 16px 16px;
}

.stone-left-full-wrap,
.info-right-side-full-wrap {
    margin-top: 50px;
    padding-bottom: 50px;
}

.info-form-fields {
    border-top: 0px solid #E5E5E5 !important;
    border-left: 0px solid #E5E5E5 !important;
    border-right: 0px solid #E5E5E5 !important;
    border-bottom: 1px solid #E5E5E5 !important;
    width: 65% !important;
}

.product-infor-form .form-submit-btn {
    width: 65%;
}

.product-infor-form .form-control:focus {
    border-top: 0px solid #E5E5E5 !important;
    border-left: 0px solid #E5E5E5 !important;
    border-right: 0px solid #E5E5E5 !important;
    border-bottom: 1px solid #E5E5E5 !important;
}

.inqury-form-head {
    padding-top: 15px;
}

.our-company-full-wrap {
    background-image: url('/images/genesis/our-company-map-bg.jpg');
    position: relative;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: bottom;
}

.adipiscing-fullsection {
    background-image: url('/images/genesis/gem-bg.jpg');
    position: relative;
    background-size: cover;
    background-position: center;
}

.our-company-wrap {
    padding-top: 200px;
    padding-bottom: 140px;
}

.being-based-right-wrap {
    padding-bottom: 200px;
}

.our-company-head-wrap p {
    width: 60%;
    text-align: center;
    margin: 25px auto;
}

.adipiscing-icon-wrap img {
    height: 130px;
    width: auto;
}

.adipiscing-heading-wrap {
    padding-top: 30px;
}

.adipiscing-descript-wrap {
    padding-top: 20px;
}

.adipiscing-descript-wrap {
    width: 85%;
    margin: 0px auto;
}

.gemstone-on-request-head-fullwrap {
    background: #F6F6F6;
}

.gemstone-on-request-contents {
    background: #FFFFFF;
}

.gemstone-on-request-contents h3 {
    width: 80%;
    margin: 20px auto;
    line-height: 40px !important;
}

.gemstone-on-request-contents h1 {
    margin-top: 50px;
}

.gemstone-on-request-contents p.info-head-txt,
.gemstone-on-request-contents p.info-head-txt-prpl {
    width: 70%;
    margin: 25px auto;
}

.genesis-purple-ful-wrap {
    background: #724B8E;
}

.genesis-purple-txt-wrap {
    width: 55%;
    text-align: center;
    margin: 0px auto;
}

.popularised-content-wrap h2 {
    text-align: center;
    width: 85%;
    margin: 0px auto;
}

.popularised-bottom-wrap {
    margin-top: 112px;
}

.popularised-bottom-wrap .adipiscing-descript-wrap {
    width: 60%;
    margin: 0px auto;
}

.popularised-bottom-wrap .adipiscing-descript-wrap {
    padding-top: 15px;
}

.popularised-ful-wrap {
    background: #F8F4FA;
}

.journal-info-img-wrap img {
    max-height: 600px;
}

.journal-info-name-wrap {
    padding-top: 60px;
}

.client-name-btm-brder-wrap {
    border: 3px solid #BD98BB;
    width: 40px;
}

.review-head-wrap {
    width: 70%;
}

.review-content-full-wrap {
    padding: 60px 0px;
}


/* The container */

.container-checkbox {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}


/* Hide the browser's default checkbox */

.container-checkbox input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}


/* Create a custom checkbox */

.container-checkbox .checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 20px;
    width: 20px;
    background-color: #eee;
}


/* On mouse-over, add a grey background color */

.container-checkbox:hover input~.checkmark {
    background-color: #ccc;
}


/* When the checkbox is checked, add a blue background */

.container-checkbox input:checked~.checkmark {
    background-color: #333333;
}


/* Create the checkmark/indicator (hidden when not checked) */

.container-checkbox .checkmark:after {
    content: "";
    position: absolute;
    display: none;
}


/* Show the checkmark when checked */

.container-checkbox input:checked~.checkmark:after {
    display: block;
}


/* Style the checkmark/indicator */

.container-checkbox .checkmark:after {
    left: 7px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}


/* footer section  */

.footer-bottom-description {
    width: 60%;
    margin: 0px auto;
}

.footer-second-row-wrap {
    padding: 40px 0px;
}

.footer-main-wrap {
    padding: 50px 0px;
}

.footer-bottom-wrap {
    background: #fafafa !important;
}


/* @media screen and (min-width: 900px) and (max-width: 1540px) {
    div#carouselExampleControls1 .carousel-item img,
    #carouselExampleControls2 .carousel-item img,
    #carouselExampleControls3 .carousel-item img,
    #carouselExampleControls4 .carousel-item img {
        min-height: 350px !important;
    }
} */

#pinBoot {
    position: relative;
    max-width: 100%;
    width: 100%;
}

#pinBoot img {
    width: 100%;
    max-width: 100%;
    height: auto;
}

.white-panel {
    position: absolute;
    background: white;
    padding: 0px;
}

.home-journal-head-wrap {
    padding-bottom: 40px;
}


/*
  stylize any heading tags withing white-panel below
  */


/* .white-panel:hover {
    box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.5);
    margin-top: -5px;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
} */

@media screen and (min-device-width: 901px) and (max-device-width: 1600px) and (-webkit-min-device-pixel-ratio: 1) {
    div#carouselExampleControls1 .carousel-item img,
    #carouselExampleControls2 .carousel-item img,
    #carouselExampleControls3 .carousel-item img,
    #carouselExampleControls4 .carousel-item img {
        min-height: 350px;
    }
    .ourstone-wrap {
        height: 350px;
    }
    .stone-slider-caption {
        top: 4% !important;
    }
}

@media only screen and (min-device-width: 320px) and (max-device-width: 568px) {
    .home-map-image-wrap img {
        width: 100%;
        max-width: 100%;
    }
}

#faq .card {
    margin-bottom: 10px;
    border: 0;
}

#faq .card .card-header {
    border: 0;
    border-radius: 2px;
    padding: 0;
}

#faq .card .card-header .btn-header-link {
    color: #724B8E;
    display: block;
    text-align: left;
    padding: 10px 0px;
    border-bottom: 1px solid #E3E3E3;
}

#faq .card .card-header .btn-header-link:after {
    content: "\f106";
    font-family: FontAwesome;
    font-weight: 900;
    float: right;
}

#faq .card .card-header .btn-header-link.collapsed {
    color: #0D0D0D !important;
}

#faq .card .card-header .btn-header-link.collapsed:after {
    content: "\f107";
}

#faq .card .collapsing {
    line-height: 30px;
}

#faq .card .collapse {
    border: 0;
}

#faq .card .collapse.show {
    line-height: 30px;
    color: #222;
}

.card-header {
    background-color: transparent !important;
}

.btn.focus,
.btn:focus {
    outline: 0 !important;
    box-shadow: 0 0 0 0.2rem rgb(0 123 255 / 0%) !important;
}

#faq .card-body {
    padding-left: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
}

.faq-accord-full-section:nth-child(even) {
    background: #ffffff !important;
}

.faq-accord-full-section:nth-child(odd) {
    background: #FAFAFA !important;
}

.faq-accord-full-section {
    margin-top: 30px;
    background: #FAFAFA;
    padding: 60px 0px;
}

.card {
    background-color: transparent !important;
}


/* contact page */

.contact-page-separator {
    margin-top: 85px;
    padding-bottom: 85px;
    border-top: 1px solid #E5E5E5;
    width: 78%;
}

.contact-page-full-wrap {
    background-image: url('/images/stones/subscribe-bg.jpg');
    background-size: cover;
    background-position: left;
}

.contact-right-wrap8,
.contact-right-wrap82 {
    background-color: #FFFFFF;
}

.contact-right-wrap8 {
    padding-top: 85px;
}

.contact-right-wrap82 {
    padding-bottom: 85px;
}
</style>