<template>
<div>
    
<!-- Start Preloader Area -->
<div class="preloader">
    <div class="spinner"></div>
</div>
<!-- End Preloader Area -->

<!-- Start Header Area -->
<header class="header-area">
    <!-- Start Navbar Area -->
    <div class="navbar-area">
        <div class="main-responsive-nav">
            <div class="container">
                <div class="main-responsive-menu">
                    <div class="logo">
                        <a href="#">
                            <img src="assets/img/Logo/qmLogo.png" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-navbar">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar">
                    <a class="navbar-brand" href="#">
                        <img src="assets/img/Logo/qmLogo.png" alt="logo">
                    </a>

                    <div class="collapse navbar-collapse mean-menu col-md-8" id="navbarSupportedContent">
                        <nav id="primary-menu">
                            <ul class="navbar-nav" data-easing="easeInOutExpo" data-speed="1500">
                                <li class="nav-item">
                                    <a href="#section-pharma" class="nav-link"><div>Pharmacy</div></a>
                                </li>
                                <li class="nav-item">
                                    <a href="#section-corporate" class="nav-link"><div>Corporate</div></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                        <div class="collapse navbar-collapse mean-menu col-md-3">
                            <div class="others-options">
                                <a href="https://wa.me/60327022316?text=I%27m%20interested%20with%20Be%20Ethical%27s%20Telehealth%20Solution" class="default-btn-two">
                                     Contact Us
                                 <span></span>
                                </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->
</header>
<!-- End Header Area -->

  <router-view></router-view>
<bottom-nav></bottom-nav>


<!-- Start Go Top Area -->
<div class="go-top">
    <i class="fa fa-chevron-up"></i>
    <i class="fa fa-chevron-up"></i>
</div>
</div>
</template>
<script>
import BottomNav from './BottomNav.vue'
export default {
  components: { BottomNav },
   


}
         



</script>
