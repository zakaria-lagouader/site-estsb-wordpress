<?php get_header(); ?>
<!-- Showcase Section -->
<?php
$_annonces = new WP_Query([
    'post_type' => 'post',
    'posts_per_page' => 3
]);
?>
<section id="showcase">
        <div class="annonces">
        <?php if($_annonces->have_posts()): while($_annonces->have_posts()): $_annonces->the_post();?>
            <a href="<?php the_permalink(); ?>">
                <div class="annonce">
                    <?php the_post_thumbnail(); ?>
                    <div class="over">
                        <p><?php the_title(); ?></p>
                    </div>
                </div>
            </a>
        <?php endwhile;endif;?>
        </div>
    </section>
    <!-- Departemant section -->
    <section id="departements">
        <div class="container">
            <h2 class="section-title">Nos departements</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6 mx-auto mb-3">
                    <div class="depart">
                        <img src="<?php bloginfo('template_url') ?>/img/gi.jpg" alt="">
                        <div class="over">
                            Génie informatique
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mx-auto mb-3">
                    <div class="depart">
                        <img src="<?php bloginfo('template_url') ?>/img/ga.jpg" alt="">
                        <div class="over">
                            Génie agricole
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mx-auto mb-3">
                    <div class="depart">
                        <img src="<?php bloginfo('template_url') ?>/img/tm.jpg" alt="">
                        <div class="over">
                            Technique de management
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 7
);
$_posts = new WP_Query($args);
?>

    <!-- Actualités section -->
    <section id="actualites">
        <div class="container">
            <h2 class="section-title">Actualités</h2>
            <?php if($_posts->have_posts()): while($_posts->have_posts()): $_posts->the_post();?>
                <a href="<?php the_permalink(); ?>">
                    <div class="act">
                        <p><?php the_title();?></p>
                        <img src="<?php bloginfo('template_url') ?>/img/right.svg" alt="">
                    </div>
                </a>
            <?php endwhile;endif;?>
            
        </div>
    </section>

    <!-- About section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="section-title">A propos de nous</h2>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio recusandae ea sed. Id autem nisi ipsa nemo! Eos, excepturi! Hic vero itaque facilis impedit libero nemo architecto adipisci ullam culpa animi? Aperiam neque, expedita impedit omnis in natus itaque. Explicabo. <br><br>
                        
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio recusandae ea sed. Id autem nisi ipsa nemo! Eos, excepturi! Hic vero itaque facilis impedit libero nemo architecto adipisci ullam culpa animi? Aperiam neque, expedita impedit omnis in natus itaque. Explicabo. <br>

                    </p>
                </div>
                <div class="col-lg-6">
                    <img src="<?php bloginfo('template_url') ?>/img/about.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>