<?php
//Hero
$hero_background_desktop = get_field('hero_background_desktop');
$hero_background_mobile = get_field('hero_background_mobile');
$hero_cnt = get_field('hero_cnt');
?>

<!-- Top hero -->
<section class="top-hero" id="top-hero">
    <a href="https://www.szlachetnapaczka.pl/" title="Szlachetna Paczka" class="top-hero__logo-szp" target="_blank">
        <img src="/wp-content/uploads/2022/03/logo-szp.png" class="img-fluid">
    </a>
    <a href="https://akademiaprzyszlosci.org.pl/" title="Akademia Przyszłości" class="top-hero__logo-ap" target="_blank">
        <img src="/wp-content/uploads/2022/03/logo-ap.png" class="img-fluid">
    </a>
    <?php echo $hero_cnt; ?>
</section>

<!-- Style hero -->
<style>
    .top-hero {
        background-image: url('<?php echo $hero_background_desktop; ?>');
    }

    @media screen and (min-width: 992px) {
        .top-hero {
            background-image: url('<?php echo $hero_background_desktop; ?>');
        }
    }
</style>