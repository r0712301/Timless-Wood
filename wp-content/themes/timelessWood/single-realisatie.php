<?php
get_header();
$img = get_field('foto');
$categories = get_field('categorie');
$houtsoorten = get_field('houtsoort');
$locatie = get_field('locatie');
$name = get_field('naam');
$content = get_field('uitleg');
?>
<div class="single-realisatie-container">
    <a href="/realisaties" class="single-realisatie-goback-link"><i class="fa-solid fa-arrow-left-long"></i> Terug naar overzicht</a>
    <div class="single-realisatie-content-conainer">
        <div class="single-realisatie-title-container">
            <h1 class="single-realisatie-title"><?php echo esc_html($name); ?></h1>
            <?php echo $content; ?>
            <a href="" class="single-realisatie-link">Contacteer ons</a>
        </div>

        <div class="single-realisatie-foto-container">
            <img src="<?php echo esc_url($img['url']); ?>" alt="" class="single-realisatie-img">
            <div class="single-realisatie-additional-container">
                <div class="single-realisatie-taxonomy-container">
                    <h3 class="single-realisatie-taxonomy-title">Categorie</h3>
                    <?php if ($categories) :
                        foreach ($categories as $category) :
                    ?>
                            <p class="single-realisatie-taxonomy-content"><?php echo esc_html($category->name) ?></p>
                    <?php endforeach;
                    endif; ?>
                </div>
                <div class="single-realisatie-taxonomy-container">
                    <h3 class="single-realisatie-taxonomy-title">Houtsoort</h3>
                    <?php if ($categories) :
                        foreach ($houtsoorten as $houtsoort) :
                    ?>
                            <p class="single-realisatie-taxonomy-content"><?php echo esc_html($houtsoort->name) ?></p>
                    <?php endforeach;
                    endif; ?>
                </div>
                <div class="single-realisatie-taxonomy-container">
                    <h3 class="single-realisatie-taxonomy-title">Locatie</h3>
                    <p class="single-realisatie-taxonomy-content"><?php echo $locatie ?: "Er is geen locatie meegegeven." ?></p>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="single-realisatie-contact-container">
    <h2 class="single-realisatie-contact-title">Contact</h2>
    <p class="single-realisatie-contact-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata.</p>
    <a href="" class="single-realisatie-contact-btn">Contacteer ons</a>
</div>
<?php
get_footer();
?>