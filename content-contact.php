<?php
/*
Template Name: Contact Page
*/
get_header(); ?>

<section class="imageBackground container u-height1of2" style="background-image: url('<?php the_field('image_background_new'); ?>')">
    <div class="row u-verticalAlign--middle">
        <h1 class="lede font--white font--script h0 column u-centerAlign"><?php the_title(); ?></h1>
    </div>
    <a class="directionalAnchor column size1of1"><i class="fa fa-chevron-down"></i></a>
</section>

<div class="barSep"></div>

<section class="container">
    <div class="row content">
        <a href="<?php the_field('google_maps_link'); ?>" target="_blank"><div class="contactMap imageBackground column" style="background-image: url('<?php the_field('map_image'); ?>');"></div></a>  

        <div class="column align--top size1of1 med_size1of2">
            <h3>Find Us!</h3>
            <p><?php the_field('address'); ?></p>
        </div>
        <div class="column align--top size1of1 med_size1of2">
            <h3>Hours</h3>
            <p><?php the_field('hours'); ?></p>
        </div>
    </div>
    <div class="row content">
        <div class="column"><?php the_field('content'); ?></div>
    </div> 
</section>

<?php get_footer(); ?>
