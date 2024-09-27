<?php
get_header();
$args = array(
    "posts_per_page" => "12",
    "post_type" => "realisatie",
    "order" => "ASC",
);

$categories = get_terms(array(
    'taxonomy' => 'categorie',
    'hide_empty' => true,
));

$the_query = new WP_Query($args);

?>
<div class="realisatie-container-gray">
</div>

<div class="realisatie-page-container">
    <h1 class="realisatie-page-title">Realisaties</h1>
    <p class="realisatie-page-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit.</p>
    <div class="realisatie-filter-container">
        <button class="realisatie-filter-btn" data-category="all">Alle</button> <!-- Button to show all posts -->
        <?php foreach ($categories as $category): ?>
            <button class="realisatie-filter-btn" data-category="<?php echo esc_attr($category->slug); ?>">
                <?php echo esc_html($category->name); ?>
            </button>
        <?php endforeach; ?>
    </div>
    <div class="realisatie-page-cards-container">
        <?php
        if ($the_query->have_posts()):
            while ($the_query->have_posts()) : $the_query->the_post();
                $img = get_field('foto');
                $title = get_field('naam');
                $locatie = get_field('locatie');
                $categories = get_field('categorie');
                $post_categories = wp_get_post_terms(get_the_ID(), 'categorie'); // Get categories for the current post
                $post_classes = array_map(function ($cat) {
                    return 'category-' . $cat->slug;
                }, $post_categories);
                $post_class = implode(' ', $post_classes);
        ?>
                <a href="<?php esc_html(the_permalink()) ?>" class="realisatie-page-card-link">
                    <div class="realisatie-page-card <?php echo esc_attr($post_class); ?>" style="background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)),url('<?php echo esc_url($img['url']); ?>');">
                        <div>
                            <h3 class="realisatie-page-card-title"><?php echo $locatie ? $title . " - " . $locatie : $title ?></h3>
                            <div class="realisatie-tag-container">
                                <?php foreach ($categories as $category) : ?>
                                    <p class="realisatie-page-card-btn"><?php echo esc_html($category->name) ?></p>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </a>
        <?php

            endwhile;
        endif;
        wp_reset_query();
        ?>
    </div>
</div>



<?php
get_footer();
?>