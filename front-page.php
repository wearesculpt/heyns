<?php get_header(); ?>

<section class="imageBackground container u-height1of1" style="background-image: url('<?php the_field('image_background_new'); ?>')">
    <div class="row u-verticalAlign--middle">
        <h1 class="lede font--white font--script h0 column u-centerAlign"><?php the_field('lede'); ?></h1>
    </div>
    <a class="directionalAnchor column size1of1"><i class="fa fa-chevron-down"></i></a>
</section>

<div class="barSep"></div>

<section class="container container--padded">
    <div class="row u-centerAlign">
        <div class="column u-leftAlign med_u-centerAlign">
            <?php the_field('content'); ?>
        </div> 
    </div>
    <div class="row u-centerAlign">
        
        <form class="row column size1of1 med_size3of4 sm_u-leftAlign med_u-centerAlign u-verticalAlign-top" action="http://heynsicecream.us9.list-manage.com/subscribe/post" method="POST">
            <input type="hidden" name="u" value="a3262b06555210605ace5e4ad">
            <input type="hidden" name="id" value="b2e862d57a ">

            <p><?php the_field('form_cta'); ?></p>
            
            <input class="column med_size1of3" type="name" autocapitalize="off" autocorrect="off" name="MERGE1" id="MERGE1" size="25" value="" placeholder="name">
            <input class="column med_size1of3" type="email" autocapitalize="off" autocorrect="off" name="MERGE0" id="MERGE0" size="25" value="" placeholder="email">

            <!-- real people should not fill this in and expect good things -->
            <div style="position: absolute; left: -5000px;"><input type="text" name="b_ec9104a4f127ba2d0a65d1c30_688dfaef4d" tabindex="-1" value=""></div>

            <input class="column size1of2 med_size1of6" type="submit" class="button" name="submit" value="<?php the_field('form_submit_button'); ?>">
        </form>
    </div>
</section>

<?php if (get_field('show_flavors') == true): ?>

    <section class="sectionHead container">
        <div class="row sm_u-centerAlign font--white">
            <h2>• Our Flavors •</h2>
            <p><?php the_field('flavors_copy'); ?></p>
            <p class="italic"><?php the_field('featured_deal'); ?></p>
            <div class="button button--lg button--alt"><?php the_field('featured_flavor'); ?></div>
        </div>
    </section>
    <section class="container">
        <div class="row">
            <div class="flavors column med_threeCol med_u-centerAlign">
                <?php

                    // check if the flexible content field has rows of data
                    if( have_rows('flavors') ):

                         // loop through the rows of data
                        while ( have_rows('flavors') ) : the_row(); ?>

                                <div class="flavor">
                                    <h4><?php the_sub_field('flavor_title'); ?></h4>
                                    <p class="p0"><?php the_sub_field('flavor_description'); ?></p>
                                </div>
                                <br/>

                        <? endwhile;

                    else :

                        // no layouts found

                    endif;

                    ?>

            </div>
        </div>
    </section>
<? endif; ?>

<section class="quoteSection container">
    <div class="row u-centerAlign">
        <div class="column size1of1 med_size2of3 lg_size1of3 u-centerAlign">
            <span class="font--script h0">"</span>
            <h1 class="font--script"><?php the_field('quote'); ?></h1>
        </div>
    </div>
</section>

<?php get_footer(); ?>