<?php
//Hero
$hero_background_desktop = get_field('hero_background_desktop');
$hero_background_mobile = get_field('hero_background_mobile');
$hero_cnt = get_field('hero_cnt');
?>

<!-- Top hero -->
<section class="top-hero">
    <div class="top-hero__cnt d-flex align-items-center justify-content-center">
        <?php echo $hero_cnt; ?>
    </div>
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