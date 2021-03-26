<?php get_header(); ?>

<style>
    body { margin-top: 70px; }
    #single { padding: 40px 0; }
    #single img {
        width: 100%; 
        height: 350px; 
        object-fit: cover; 
        border-radius: 7px;
        box-shadow: 0 4px 7px -8px black;
    }
    #single p {
        line-height: 1.5;
        text-align: justify;
    }
    h2 {
        text-align: center;
    }
</style>
<?php
$args = array(
    'post_type' => 'post',
);
$_posts = new WP_Query($args);
?>
<section id="actualites">
    <div class="container">
        <h2 class="section-title">Touts les actualités</h2>
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

<?php get_footer(); ?>