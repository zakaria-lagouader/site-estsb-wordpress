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
</style>

<section id="single">
    <div class="container">
        <?php if(have_posts()): while(have_posts()): the_post();?>
        <?php the_post_thumbnail(); ?>
        <h2 class="section-title"><?php the_title(); ?></h2>
        <p>
        <?php the_content(); ?>
        </p>
        <?php endwhile;endif;?>
    </div>
</section>

<?php get_footer(); ?>