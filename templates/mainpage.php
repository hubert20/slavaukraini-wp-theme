<?php
if (!defined('ABSPATH')) exit;

/* Template Name: Mainpage */

get_header();

//Hero
// $hero_cnt = get_field('hero_cnt');
// $hero_background_desktop = get_field('hero_background_desktop');
// $hero_background_mobile = get_field('hero_background_mobile');
// $hero_widget = get_field('hero_widget');

//Main About us

?>

<!-- Main hero -->
<?php get_template_part('template-parts/main-hero'); ?>


<section id="organizacje" data-bs-spy="scroll" data-bs-target="#organizacje" data-bs-offset="0" class="scrollspy-example" tabindex="0">

    dcxsdcdcdfev
    ververve
    ververveverv
    ervs
    erv
    erver
    version_compareverv
    erv
    erve
    rver
    version_comparev

</section>

<section data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">

    <div id="organizacje" style="height: 900px;">
        csdcsdcsd
        csdcsdcsdcsdc
        sdc
        sdcsd
        cal_days_in_monthcsd
        cal_days_in_monthcsdcsd
        csd
        csdcsdcsd
        csdcsdcsdcsdc
        sdc
        sdcsd
        cal_days_in_monthcsd
        cal_days_in_monthcsdcsd
        csd
    </div>

    <div id="wolontariusze" style="height: 900px;">
        csdcsdcsd
        csdcsdcsdcsdc
        sdc
        sdcsd
        cal_days_in_monthcsd
        cal_days_in_monthcsdcsd
        csd
    </div>

</section>

<?php
while (have_posts()) : the_post();
    the_content(__('Continue reading <span class="meta-nav">&rarr;</span>', 'wp-bootstrap-starter'));
endwhile;
?>

<?php get_footer(); ?>