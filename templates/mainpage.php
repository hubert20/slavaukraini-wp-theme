<?php
if (!defined('ABSPATH')) exit;

/* Template Name: Mainpage */

get_header();

// Box Łączymy
$box_laczymy_cnt = get_field('box_laczymy_cnt');

// Organizacje
$organizacje_cnt = get_field('organizacje_cnt');

// Zgłaszam problem
$zglaszam_problem_cnt = get_field('zglaszam_problem_cnt');

// Firmy
$firmy_cnt = get_field('firmy_cnt');

// Wolontariusze
$wolontariusze_cnt = get_field('wolontariusze_cnt');

// Baner rządowy
$banner_rzadowy_cnt = get_field('banner_rzadowy_cnt');

// Kontakt
$kontakt_cnt = get_field('kontakt_cnt');

?>

<!-- Main hero -->
<?php get_template_part('template-parts/main-hero'); ?>

<!-- <section data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0"> -->
<section>
    <!-- Łączymy tych, którzy chcą pomóc z tymi, którzy pomoc organizują -->
    <div class="pb-4 pb-lg-5 container box-laczymy second-screen" class="box-laczymy">
        <?php echo $box_laczymy_cnt; ?>
    </div>

    <?php /*
    <!-- Organizacje -->
    <div class="organizacje bg-gray-light py-4 py-lg-5" id="organizacje">
        <div class="container">
            <?php echo $organizacje_cnt; ?>
        </div>
    </div>
    */ ?>

    <?php /*
    <!-- Firmy -->
    <div id="firmy" class="bg-gray-light py-4 py-lg-5 firmy">
        <div class="container">
            <?php echo $firmy_cnt; ?>
        </div>
    </div>
    */ ?>

    <!-- Zgłaszam problem -->
    <div id="zglaszam-problem" class="container">
        <?php echo $zglaszam_problem_cnt; ?>
    </div>

    <!-- baner rządowy -->
    <div class="baner-rzadowy bg-gray-light py-4 py-lg-5" id="sekcja-rzadowa">
        <div class="container">
            <?php echo $banner_rzadowy_cnt; ?>
        </div>
    </div>

    <!-- Kontakt - pomagamy -->
    <div id="kontakt" class="pb-4 py-lg-5 container">
        <?php echo $kontakt_cnt; ?>
    </div>

    <!-- Wolontariusze -->
    <div id="wolontariusze" class="wolontariusze py-4 py-lg-5 bg-gray-light">
        <div class="container">
            <?php echo $wolontariusze_cnt; ?>
        </div>
    </div>

    <!-- FAQ -->
    <div id="faq" class="faq container py-4 py-lg-5">
        <h2 class="text-center fw-bold mb-4">Najczęściej zadawane pytania (FAQ)</h2>
        <?php if (have_rows('faq_kategorie_pytan')) : ?>
            <?php $counter_faq_row = 0; ?>
            <?php while (have_rows('faq_kategorie_pytan')) : the_row();
                $kategoria_tytul = get_sub_field('kategoria_tytul');
            ?>
                <div class="cats mb-3 mb-lg-5">
                    <h5 class="text-center text-blue fw-bold mb-3"><?php echo $kategoria_tytul; ?></h5>
                    <div class="row justify-content-center mb-3 mb-lg-5">
                        <?php if (have_rows('pytania')) : ?>
                            <?php while (have_rows('pytania')) : the_row();
                                $pytanie = get_sub_field('pytanie');
                                $odpowiedz = get_sub_field('odpowiedz');
                            ?>
                                <div class="mb-3 col-lg-12">
                                    <div class="pit-faq-box__item p-3">
                                        <p class="pit-faq-box__p mb-0 d-flex justify-content-between font-weight-bold" id="heading-<?php echo $counter_faq_row; ?>-<?php echo get_row_index(); ?>" data-bs-toggle="collapse" role="button" data-bs-target="#collapse-<?php echo $counter_faq_row; ?>-<?php echo get_row_index(); ?>" aria-expanded="false" aria-controls="collapse-<?php echo $counter_faq_row; ?>-<?php echo get_row_index(); ?>">
                                            <?php echo $pytanie; ?> <i class="fa fa-angle-down text-red" aria-hidden="true"></i>
                                        </p>
                                        <div id="collapse-<?php echo $counter_faq_row; ?>-<?php echo get_row_index(); ?>" class="collapse mt-3">
                                            <?php echo $odpowiedz; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <?php $counter_faq_row++; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>

<?php
while (have_posts()) : the_post();
    the_content(__('Continue reading <span class="meta-nav">&rarr;</span>', 'wp-bootstrap-starter'));
endwhile;
?>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-yellow">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modal-form">
                <div class="modal-form-cnt" data-category-type="pomoc-organizacji">
                    <?php echo apply_shortcodes('[contact-form-7 id="49" title="Pomoc organizacji – formularz zgłoszenia"]'); ?>
                </div>
                <div class="modal-form-cnt" data-category-type="pomoc-jako-wolontariusz">
                    <?php echo apply_shortcodes('[contact-form-7 id="127" title="Pomoc jako wolontariusz – formularz zgłoszenia"]'); ?>
                </div>
                <div class="modal-form-cnt" data-category-type="pomoc-firmy">
                    <?php echo apply_shortcodes('[contact-form-7 id="128" title="Pomoc firmy – formularz zgłoszenia"]'); ?>
                </div>
                <div class="modal-form-cnt" data-category-type="zglaszam-potrzebe">
                    <?php echo apply_shortcodes('[contact-form-7 id="129" title="Zgłaszam potrzebę / problem – formularz zgłoszenia"]'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>