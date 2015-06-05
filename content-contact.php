<?php
/*
Template Name: Contact Page
*/
?>

<section class="imageBackground container u-height1of2" style="background-image: url('<?php the_field('image_background'); ?>')">
    <div class="row u-verticalAlign--middle">
        <h1 class="lede font--white font--script h0 column u-centerAlign"><?php the_title(); ?></h1>
    </div>
    <a class="directionalAnchor column size1of1"><i class="fa fa-chevron-down"></i></a>
</section>

<div class="barSep"></div>

<section class="container">
    <div class="row content">
        <?php the_content(); ?>
    </div>
</section>
