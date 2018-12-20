<!--Site Header-->
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/search-module' ) ); ?>




<div class="site-header-wrap-home 
<?php if(!is_front_page()):
echo 'site-header-wrap-dest';
endif; ?>
      ">
  <header class="site-header" role="banner">
    <div class="top-nav">
  <div class="inner-wrap-fullwidth">
    <div class="sh-utility-nav">
              <a href="#menu" class="sh-ico-info menu-link"><span>+</span></a>
              <a class="sh-ph" href="tel:2134211937">213.421.1937</a>
              <div class="social-wrap">

                <a href="https://www.facebook.com/focusreg/" target="_blank">
                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="17.914px" height="17.914px" viewBox="-39.968 0.94 17.914 17.914" enable-background="new -39.968 0.94 17.914 17.914" xml:space="preserve">
                    <path fill="#FFFFFF" d="M-26.862,6.723h-2.826V4.87c0-0.696,0.462-0.859,0.787-0.859c0.324,0,1.994,0,1.994,0v-3.06l-2.746-0.011
    c-3.049,0-3.742,2.282-3.742,3.742v2.04h-1.763v3.153h1.763c0,4.046,0,8.921,0,8.921h3.708c0,0,0-4.923,0-8.921h2.502L-26.862,6.723
    z"></path>
                    <rect x="-39.968" y="0.94" fill="none" width="17.914" height="17.914"></rect>
                  </svg>
                </a>
                <a href="https://twitter.com/focusreg" target="_blank">
                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="17.914px" height="17.914px" viewBox="0 0 17.914 17.914" enable-background="new 0 0 17.914 17.914" xml:space="preserve">
                    <path fill="#FFFFFF" d="M17.841,3.447c-0.653,0.29-1.356,0.486-2.093,0.574c0.753-0.451,1.33-1.165,1.603-2.017
    c-0.704,0.418-1.484,0.721-2.314,0.885c-0.665-0.708-1.613-1.152-2.66-1.152c-2.013,0-3.645,1.632-3.645,3.645
    c0,0.285,0.032,0.563,0.094,0.831C5.796,6.062,3.11,4.611,1.312,2.406C0.998,2.943,0.818,3.569,0.818,4.238
    c0,1.264,0.643,2.38,1.621,3.034C1.842,7.253,1.28,7.088,0.788,6.815c0,0.015,0,0.03,0,0.046c0,1.766,1.256,3.239,2.924,3.574
    c-0.306,0.083-0.628,0.127-0.96,0.127c-0.235,0-0.464-0.022-0.686-0.065C2.53,11.946,3.875,13,5.47,13.029
    c-1.247,0.978-2.819,1.56-4.527,1.56c-0.294,0-0.585-0.018-0.87-0.051c1.614,1.035,3.529,1.638,5.588,1.638
    c6.705,0,10.371-5.554,10.371-10.371c0-0.158-0.003-0.316-0.01-0.472C16.735,4.82,17.354,4.178,17.841,3.447z"></path>
                    <rect fill="none" width="17.914" height="17.914"></rect>
                  </svg>
                </a>
        <a href="https://www.instagram.com/focusreg/" target="_blank">
          <img src="<?php bloginfo('template_url'); ?>/img/instagram.png" alt="">
        </a>
        <a href="https://www.linkedin.com/company/focus-real-estate-group/" target="_blank">
          <img src="<?php bloginfo('template_url'); ?>/img/linkedin.png" alt="">
        </a>
        <a href="https://www.pinterest.com/focusreg_/" target="_blank">
          <img src="<?php bloginfo('template_url'); ?>/img/pinterest.png" alt="">
        </a>
        <a href="https://www.youtube.com/channel/UCKoLrOFyHWs6auKmYIqUDpQ/featured" target="_blank">
          <img src="<?php bloginfo('template_url'); ?>/img/youtube.png" alt="">
        </a>
               <!--  <a href="/contact" target="_blank">
                  <svg version="1.1" id="Livello_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="-0.5 -0.5 24 24" enable-background="new -0.5 -0.5 24 24" xml:space="preserve">
                    <g id="Livello_1_1_">
                    </g>
                    <rect x="-0.5" y="-0.5" fill="none" width="24" height="24" />
                    <g>
                      <polygon fill="#FFFFFF" points="23.5,19.5 23.5,4.3 15.3,10.6 19.5,15.4 19.4,15.6 14.4,11.2 11.5,13.5 8.5,11.2 3.6,15.6 
      3.4,15.4 7.6,10.6 -0.5,4.3 -0.5,19.5  " />
                      <polygon fill="#FFFFFF" points="23,3.5 -0.1,3.5 11.5,12.3   " />
                    </g>
                  </svg>
                </a> -->
              </div>
            </div>
            <!--Site Nav END-->
          </div>
  </div>
           <div class="inner-wrap-fullwidth">
           <a href="<?php bloginfo('url'); ?>" class="sh-logo"><img src="<?php bloginfo('template_url'); ?>/img/header-logo.png" alt="Site Logo"></a>
          
            <!--Site Nav-->
              <div class="site-nav-container">
              <div class="snc-header">
              <a href="#menu" class="sh-ico-info menu-link"><span>+</span></a>
              </div>
               <?php wp_nav_menu(array(
      'menu'            => 'Primary Nav',
      'container'       => 'nav',
      'container_class' => 'site-nav',
      'menu_class'      => 'sn-level-1',
      'walker'        => new themeslug_walker_nav_menu
      )); ?>
                </div>
              <a href="" class="site-nav-container-screen menu-link">&nbsp;</a>
              <!--Site Nav END-->
            
          <!--inner-wrap END-->
        </header>
        <?php if(is_front_page()): ?>
        <?php Starkers_Utilities::get_template_parts( array( 'parts/site-intro' ) ); ?>
       <?php else: ?>
        <?php Starkers_Utilities::get_template_parts( array( 'parts/page-intro' ) ); ?>
      <?php endif; ?>
        </div>