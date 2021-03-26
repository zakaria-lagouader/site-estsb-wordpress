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
    a {
        color: blue;
        text-decoration: underline;
    }
</style>

<section id="single">
    <div class="container">
        <h2 class="section-title">404 Page Not Found !</h2>
        <p>retour à la <a href="<?php bloginfo('url'); ?>">page d'accueil ></a> </p>
    </div>
</section>

<?php get_footer(); ?>