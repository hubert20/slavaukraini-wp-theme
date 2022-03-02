<?php
//Hero
$hero_background_desktop = get_field('hero_background_desktop');
$hero_background_mobile = get_field('hero_background_mobile');
$hero_cnt = get_field('hero_cnt');
?>

<!-- Top hero -->
<section class="top-hero">
    <?php echo $hero_cnt; ?>
</section>

<!-- Style hero -->
<style>
    .top-hero {
        background-image: url('<?php echo $hero_background_mobile; ?>');
    }
    @media screen and (min-width: 992px) {
        .top-hero {
            background-image: url('<?php echo $hero_background_desktop; ?>');
        }
    }
</style>