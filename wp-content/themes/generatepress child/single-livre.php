<?php
/**
 * Template Name: Livre
 */

get_header();
$data = get_fields();
?>

<main id="primary" class="site-main" style="width: 100%;">

    <div id="page-livre">
        <section id="entry">
            <div class="container-fluid">
                <div class="row banniere">
                    <div class="col-8 offset-2 title">
                        <h1><?php echo get_the_title();?></h1>
                    </div>
                </div>
            </div>
        </section>
        <section id="content">
            <div class="container-fluid">
                <div class="row page-content">
                    <div class="col-xl-10 offset-xl-1">
                            <?php 
                                $postid = get_queried_object()->ID;
                                $count = 0;
                                $args = array(
                                    'post_type' => 'livres',
                                    'posts_per_page' => -1,
                                );

                                $my_query = new WP_Query( $args );
                                if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post();

                            ?>
                                <div>
                                    <div class="bouteille item">
                                        <h3><?php echo the_title(); ?></h3>
                                        <p>par <?php echo get_field('_auteur'); ?></p>
                                    </div>
                                </div>
                            <?php


                                    $count = $count + 1;
                                    endwhile;
                                    endif;
wp_reset_postdata();
                            ?>
                    </div>
                </div>
            </div>
        </section>
    </div>

</main><!-- #main -->

<?php
get_footer();