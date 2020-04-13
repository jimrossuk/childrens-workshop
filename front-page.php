<?php
get_header();

?>


    <img src= " <?php the_field('main_image') ; ?> ">
    <div class="fp-graph">
        <p class="fst-graph">  <?php  the_field('front_page_into1'); ?>  </p>
        <p>  <?php  the_field('front_page_info2'); ?>  </p>
        <p>  <?php  the_field('front_page_info3'); ?>  </p>
        <h2>  <?php  the_field('front_page_info4'); ?>  </h2>
        <p>  <?php  the_field('front_page_info5'); ?>  </p>
    </div>

<div class=" lightgreen">

    <h2 class=" h1 fp-graph mb-n2">Location</h2>
    <div class="flexbox flexy">
        
        <div class="fp-box">

            <div class="mb-3 ">
                <p class="mx-auto h2">Email:</p>
                <a  href="<?php the_field('email_address', 'option'); ?>" > <?php the_field('email_address', 'option'); ?></a> 
            </div>

            <div class="mb-3">
                <p class="mx-auto h2">Mobile:</p>
                <a  href="tel:<?php the_field('mobile_number', 'option'); ?>"> <?php the_field('mobile_number', 'option');  ?></a>
            </div>

                <p class=" h2">Landline:</p>
                <div class="btm-margin">
                <a href="tel:<?php the_field('landline_number', 'option'); ?>"> <?php the_field('landline_number', 'option');  ?></a>
            </div>

        </div>
    <a class="justify-content-center mx-auto" href="https://www.google.com/maps/place/Totterdown+Children's+Community+Workshop/@51.4399464,-2.5764452,16z/data=!4m5!3m4!1s0x0:0xbe48b80e98e3d84c!8m2!3d51.4404747!4d-2.5740419">
    <img class="img-fluid container-sm btm-margin " style= min-width:100%; src = " <?php the_field('map'); ?> ">        </a>
    </div>   

</div>


    <div class="flexbox container">
            <h1 class="h1 fp-graph">Clubs</h1>
            <div class="row flexy block">
                <div class="col">

                    <h2 class="">Afterschool</h2>
                    
                    <p > <?php the_field('after_school_description'); ?> </p>
                </div>
                
                <div class="col">

                    <h2>Holiday</h2>
                    <p>  <?php the_field('holiday_club_description'); ?> </p>
                </div>
                
            </div>       
          
        <?php
            $link = get_field('after_school_booking_link');
        if( $link ): ?>
            <button class="btn btn-outline-secondary " href="<?php echo esc_url( $link ); ?>">Book For After School Club</button>
        <?php endif; ?>
        <?php
        // MUST CHANGE THE LINK
            $link = get_field('ipal_link');
        if( $link ): ?>
            <button class="btn btn-outline-primary " href="<?php echo esc_url( $link ); ?>">Book For Holiday Club</button>
        <?php endif; ?>
    </div>  
            <!-- end of Flexbox -->

        <?php 
$link = get_field('ofsted');
if( $link ): ?>
    <a class="btn btn-color btn-lg btn-block " href="<?php echo esc_url( $link ); ?>">Ofsted report</a>
<?php endif; ?>

<div>
    <?php 
    $link = get_field('charity_link');
    if( $link ): ?>
        <a class="btn btn-lg btn-color btn-block" href="<?php echo esc_url( $link ); ?>">Charity information</a>
    <?php endif; ?>
</div>

<?php

get_footer();

?>