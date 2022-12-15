<template>

  <nav class="navbar navbar-expand-md navbar-fixed-top main-nav">
    <div class="container desktop-navbar-container">
        <div class="navbar-collapse collapse nav-content order-2 desktop-left-navbar">
            <ul class="nav navbar-nav">
                <li class="nav-item ">
                    <router-link to="/" class="nav-link" >Explore</router-link>
                </li>

                <li class="nav-item ">
                    <router-link class="nav-link" to="/company" >Company</router-link>
                </li>
                <li class="nav-item ">
                    <router-link class="nav-link" to="/gems" >Gems</router-link>
                </li>

            </ul>
        </div>
        <ul class="nav navbar-nav text-nowrap flex-row mx-md-auto order-1 order-md-2 mobile-toggler-ul">
            <li class="nav-item nav-not-fixed" ><router-link class="nav-link" to="/"><img style="width: 180px;" src="/images/adamant-logo.png" class="web-logo"
                        alt="adamant-gem"></router-link></li>


        </ul>
        <div class="ml-auto navbar-collapse collapse nav-content order-3 order-md-3 desktop-right-navbar">
            <ul class="ml-auto nav navbar-nav">
                <li class="nav-item ">
                    <router-link class="nav-link"  to="/review">Reviews</router-link>
                </li>
                <li class="nav-item ">
                    <router-link class="nav-link"  to="/journal">Journal</router-link>
                </li>
                <li class="nav-item ">
                    <router-link class="nav-link"  to="/faq">FAQ</router-link>
                </li>
                <li class="nav-item ">
                    <router-link class="nav-link"  to="/contact">Contact</router-link>
                </li>
            </ul>
        </div>
    </div>
</nav>














</template>

<style>
    .nav-link.active {
        color: red !important;

      }
      .nav-item {
        padding: 6px !important;
      }

      .nav-item a {
     font-size: 20px !important;
    line-height: 28px !important;
    font-weight: normal !important;
    font-family: "EB Garamond", serif !important;
    letter-spacing: 0.06px;
    opacity: 1;
     color:#292929;
    }
    .main-nav {
        box-shadow: 0 1px 4px #0000000f;
    }

</style>
