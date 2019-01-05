<section id="services" class="services-module">

<?php   

if( have_rows('marketing_module') ): 

  while( have_rows('marketing_module') ): the_row(); ?>
<section id="marketing" class="sm-item">
    <div class="inner-wrap-narrow">
      <figure class="sm-item-figure <?php if((get_sub_field('mm_video'))): ?>sm-item-video<?php endif; ?>">
        <?php if((get_sub_field('mm_video'))): ?> 
       <div class="mm-video">   <?php the_sub_field('mm_video'); ?> </div>
          <?php else: ?>
        <a href="#">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
            <g>
              <path d="M403.5,75.7h-64l-8.3-22.1c-2.4-6.4-8.5-10.6-15.3-10.6h-11.4C300.6,19.7,280.3,2,256,2c-24.3,0-44.6,17.7-48.5,41h-11.4   c-6.8,0-13,4.3-15.3,10.6l-8.3,22.1h-64c-13.6,0-24.6,11-24.6,24.6v385.1c0,13.6,11,24.6,24.6,24.6h295c13.6,0,24.6-11,24.6-24.6   V100.3C428.1,86.8,417,75.7,403.5,75.7z M196.1,59.4h27.1v-8.2c0-18.1,14.7-32.8,32.8-32.8c18.1,0,32.8,14.7,32.8,32.8v8.2h27.1   l18.4,49.2H177.7L196.1,59.4z M411.7,485.4c0,4.5-3.7,8.2-8.2,8.2h-295c-4.5,0-8.2-3.7-8.2-8.2V100.3c0-4.5,3.7-8.2,8.2-8.2h57.8   l-4,10.6c-1.9,5-1.2,10.7,1.9,15.1c3.1,4.4,8.1,7.1,13.5,7.1h156.6c5.4,0,10.4-2.6,13.5-7.1c3.1-4.4,3.8-10.1,1.9-15.1l-4-10.6   h57.8c4.5,0,8.2,3.7,8.2,8.2V485.4z"></path>
              <rect x="215" y="75.7" width="16.4" height="16.4"></rect>
              <rect x="247.8" y="75.7" width="16.4" height="16.4"></rect>
              <rect x="280.6" y="75.7" width="16.4" height="16.4"></rect>
              <polygon points="130.7,220.8 149.5,202 168.3,220.8 179.9,209.2 161.1,190.5 179.9,171.7 168.3,160.1 149.5,178.9 130.7,160.1    119.1,171.7 137.9,190.5 119.1,209.2  "></polygon>
              <polygon points="233.8,397.7 215,416.5 196.2,397.7 184.7,409.3 203.4,428.1 184.7,446.9 196.2,458.4 215,439.7 233.8,458.4    245.4,446.9 226.6,428.1 245.4,409.3  "></polygon>
              <polygon points="323.9,397.7 305.2,416.5 286.4,397.7 274.8,409.3 293.6,428.1 274.8,446.9 286.4,458.4 305.2,439.7 323.9,458.4    335.5,446.9 316.7,428.1 335.5,409.3  "></polygon>
              <path d="M215,321.5c-15.2,0-27.9,10.5-31.6,24.6h-25.7v-81.9h16.4v-16.4h-49.2v16.4h16.4v98.3h42.1c3.7,14.1,16.4,24.6,31.6,24.6   c18.1,0,32.8-14.7,32.8-32.8S233.1,321.5,215,321.5z M215,370.7c-9,0-16.4-7.3-16.4-16.4c0-9,7.3-16.4,16.4-16.4   c9,0,16.4,7.3,16.4,16.4C231.4,363.4,224.1,370.7,215,370.7z"></path>
              <path d="M305.2,321.5c-18.1,0-32.8,14.7-32.8,32.8s14.7,32.8,32.8,32.8c18.1,0,32.8-14.7,32.8-32.8S323.2,321.5,305.2,321.5z    M305.2,370.7c-9,0-16.4-7.3-16.4-16.4c0-9,7.3-16.4,16.4-16.4c9,0,16.4,7.3,16.4,16.4C321.5,363.4,314.2,370.7,305.2,370.7z"></path>
              <polygon points="286.4,155.3 274.8,143.7 228,190.5 274.8,237.2 286.4,225.6 259.4,198.6 370.7,198.6 370.7,354.3 387.1,354.3    387.1,182.3 259.4,182.3  "></polygon>
            </g>
          </svg>
        </a>
      <?php endif; ?>
      </figure>
      <div class="sm-item-container <?php if((get_sub_field('mm_video'))): ?>sm-item-container-video<?php endif; ?>">
        <header class="sm-item-header-wrap">
          <h2 class="sm-item-header"><?php the_sub_field('mm_section_header'); ?></h2>
          <h3 class="sm-item-subheader"><?php the_sub_field('mm_section_sub-text'); ?></h3>
        </header>
        <p class="sm-item-text"><?php the_sub_field('mm_content'); ?> </p>
        <!-- <ul>
          <li><a href="#">NYC Residential</a></li>
          <li><a href="#">NYC Commercial</a></li>
          <li><a href="#">Long Island Residential</a></li>
          <li><a href="#">Long Island Commerical</a></li>
        </ul> -->
        <?php if( have_rows('mm_ctas') ): 

        while ( have_rows('mm_ctas') ) : the_row(); ?>
        <a href="<?php the_sub_field('mm_cta_url'); ?>" class="btn-alt"><?php the_sub_field('mm_cta_text'); ?> </a>&nbsp;
        
        <?php endwhile; ?>


        <?php endif; ?>
        <a href="#areas-we-serve" class="sm-scroll smooth-scroll">
        Areas We Serve
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="32px" height="32px" viewBox="464 264 32 32" enable-background="new 464 264 32 32" xml:space="preserve">
                <path fill="#000000" d="M482.3,291.4v4.6h-4.6v-4.6H482.3z M473.1,286.9v4.6h4.6v-4.6H473.1z M468.6,282.3v4.6h4.6v-4.6H468.6z
M464,277.7v4.6h4.6v-4.6H464z M482.3,286.9v4.6h4.6v-4.6H482.3z M486.9,282.3v4.6h4.6v-4.6H486.9z M491.4,277.7v4.6h4.6v-4.6H491.4
z M477.7,277.7v4.6h4.6v-4.6H477.7z M473.1,273.1v4.6h4.6v-4.6H473.1z M468.6,268.6v4.6h4.6v-4.6H468.6z M464,264v4.6h4.6V264H464z
M482.3,273.1v4.6h4.6v-4.6H482.3z M486.9,268.6v4.6h4.6v-4.6H486.9z M491.4,264v4.6h4.6V264H491.4z"></path>
            </svg>
        </a>
      </div>
    </div>
  </section>
  <?php endwhile; ?>
<?php endif; ?>


<?php   

if( have_rows('areas_we_serve_module') ): 

  while( have_rows('areas_we_serve_module') ): the_row(); ?>
<section id="areas-we-serve" class="sm-item sm-item-reverse">
    <div class="inner-wrap-narrow">
      
      <div class="sm-item-container sm-product-wrap">
        <header class="sm-item-header-wrap">
          <h2 class="sm-item-header"><?php the_sub_field('aws_section_header'); ?></h2>
          <h3 class="sm-item-subheader"><?php the_sub_field('aws_section_sub-text'); ?></h3>
        </header>
        <p class="sm-item-text"><?php the_sub_field('aws_content'); ?> </p>
        <!-- <ul>
          <li><a href="#">NYC Residential</a></li>
          <li><a href="#">NYC Commercial</a></li>
          <li><a href="#">Long Island Residential</a></li>
          <li><a href="#">Long Island Commerical</a></li>
        </ul> -->

        <div class="sm-product-module">
        <?php if( have_rows('aws_ctas') ): 

        while ( have_rows('aws_ctas') ) : the_row(); ?>
        <a href="<?php the_sub_field('aws_cta_url'); ?>" class="smpm-item">

			<img src="<?php the_sub_field('aws_image'); ?>" alt="">
        	<span><?php the_sub_field('aws_cta_text'); ?> </span>

        </a>
        
        <?php endwhile; ?>
        <?php endif; ?>

      </div>
    </div>
  </section>
  <?php endwhile; ?>
<?php endif; ?>
</div>
<?php   

if( have_rows('meet_our_team_module') ): 

  while( have_rows('meet_our_team_module') ): the_row(); ?>
  <section id="meet-our-team" class="sm-item">
    <div class="inner-wrap-narrow">
      <figure class="sm-item-figure">
        <a href="#">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100 100"><svg xmlns="http://www.w3.org/2000/svg" transform="matrix(.69 0 0 .69 15.5 15.5)" viewBox="0 0 24 24"><path d="M21.231 17.223a.399.399 0 0 0-.375.7c.252.176.397.354.397.489 0 .821-3.604 2.014-9.254 2.014s-9.254-1.193-9.254-2.014c0-.134.145-.312.398-.489a.4.4 0 0 0-.376-.7C1 17.918.066 18.805.066 19.786c0 2.569 6.147 3.956 11.932 3.956s11.935-1.386 11.935-3.956c0-.979-.934-1.866-2.702-2.563zm-9.232 5.718c-6.56 0-11.131-1.663-11.131-3.156 0-.42.383-.867 1.081-1.285.16 1.79 5.135 2.725 10.051 2.725 4.914 0 9.887-.935 10.05-2.724.7.418 1.083.865 1.083 1.284-.001 1.493-4.573 3.156-11.134 3.156z"/><path d="M3.759 13.042v5.317c0 .221.18.4.4.4h1.458a.402.402 0 0 0 .396-.34l.14-.918.141.919a.4.4 0 0 0 .396.339h1.339a.4.4 0 0 0 .4-.4l-.002-5.312c.09-.06.169-.133.249-.205.164.196.347.377.568.52v6.43c0 .221.18.4.4.4h1.751a.402.402 0 0 0 .396-.339l.248-1.625.248 1.625a.4.4 0 0 0 .396.339h1.607a.4.4 0 0 0 .4-.4l-.001-6.424c.235-.151.428-.345.599-.557.09.085.183.167.286.236l-.002 5.312a.4.4 0 0 0 .4.4h1.339a.402.402 0 0 0 .396-.34l.14-.918.141.919a.4.4 0 0 0 .396.339h1.458a.4.4 0 0 0 .4-.4v-5.317a2.199 2.199 0 0 0 .976-1.828V8.377a2.199 2.199 0 0 0-2.029-2.185c.58-.418.961-1.095.961-1.862 0-1.268-1.032-2.299-2.3-2.299s-2.3 1.031-2.3 2.299c0 .774.387 1.456.975 1.873a2.186 2.186 0 0 0-.98.369 2.559 2.559 0 0 0-2.126-1.334 2.684 2.684 0 0 0 1.3-2.297c0-1.479-1.203-2.682-2.682-2.682S9.352 1.462 9.352 2.941c0 .972.52 1.824 1.296 2.295h-.011a2.56 2.56 0 0 0-2.225 1.311 2.18 2.18 0 0 0-.936-.344 2.296 2.296 0 0 0 .975-1.873 2.302 2.302 0 0 0-2.3-2.299A2.302 2.302 0 0 0 3.85 4.33c0 .767.382 1.444.961 1.862a2.199 2.199 0 0 0-2.027 2.185v2.837c0 .74.368 1.42.975 1.828zM17.848 2.831a1.501 1.501 0 0 1 0 3 1.501 1.501 0 0 1 0-3zm-1.056 4.143h2.219c.774 0 1.403.629 1.403 1.403v2.837c0 .524-.291 1.002-.76 1.247a.4.4 0 0 0-.216.354v5.144h-.714l-.484-3.17c-.061-.391-.73-.391-.791 0l-.483 3.169h-.595l.002-5.14a.4.4 0 0 0-.218-.356c-.18-.092-.33-.23-.456-.389.1-.275.17-.562.17-.865V7.802c0-.147-.018-.29-.042-.43a1.4 1.4 0 0 1 .965-.398zm-6.639-4.033c0-1.038.844-1.882 1.882-1.882 1.037 0 1.881.844 1.881 1.882a1.884 1.884 0 0 1-1.881 1.882 1.884 1.884 0 0 1-1.882-1.882zm.484 3.095h2.666c.974 0 1.766.792 1.766 1.767v3.407c0 .663-.369 1.266-.965 1.573a.4.4 0 0 0-.217.355l.001 6.254h-.863l-.592-3.875c-.061-.391-.73-.391-.791 0l-.592 3.875h-1.007v-6.259a.397.397 0 0 0-.216-.354 1.767 1.767 0 0 1-.956-1.569V7.802a1.769 1.769 0 0 1 1.766-1.766zM6.151 2.831a1.501 1.501 0 0 1 0 3 1.501 1.501 0 0 1 0-3zM3.584 8.377c0-.774.629-1.403 1.402-1.403h2.22c.338 0 .659.129.913.35a2.59 2.59 0 0 0-.048.478v3.407c0 .32.077.623.188.912a1.414 1.414 0 0 1-.416.342.4.4 0 0 0-.218.356l.002 5.14h-.594l-.484-3.17c-.061-.391-.73-.391-.791 0l-.483 3.169H4.56v-5.144a.397.397 0 0 0-.216-.354 1.404 1.404 0 0 1-.76-1.247V8.377z"/></svg></svg>
        </a>
      </figure>
      <div class="sm-item-container">
        <header class="sm-item-header-wrap">
          <h2 class="sm-item-header"><?php the_sub_field('mot_section_header'); ?></h2>
          <h3 class="sm-item-subheader"><?php the_sub_field('mot_section_sub-text'); ?></h3>
        </header>
        <p class="sm-item-text"><?php the_sub_field('mot_content'); ?> </p>
        <!-- <ul>
          <li><a href="#">NYC Residential</a></li>
          <li><a href="#">NYC Commercial</a></li>
          <li><a href="#">Long Island Residential</a></li>
          <li><a href="#">Long Island Commerical</a></li>
        </ul> -->
        <?php if( have_rows('mot_ctas') ): 

        while ( have_rows('mot_ctas') ) : the_row(); ?>
        <a href="<?php the_sub_field('mot_cta_url'); ?>" class="btn-alt"><?php the_sub_field('mot_cta_text'); ?> </a>&nbsp;
        
        <?php endwhile; ?>


        <?php endif; ?>
      </div>
    </div>
  </section>
<?php endwhile; ?>
<?php endif; ?>
</section>