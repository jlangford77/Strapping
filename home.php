<?php get_header(); ?>

<div class="card-deck">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
    <div class="col-sm-12 col-md-6 col-lg-4">
    <div class="card">  
        <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url( $post_id, 'full' ); ?>" alt="Card image cap"
            style="<?php echo has_post_thumbnail( $post_id, 'full' ) ? '' : 'display:none;'; ?>">
        <div class="card-body">
            <h5 class="card-title"><?php the_title(); ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo get_the_date(); ?></h6>
            <p class="card-text"><?php the_excerpt(); ?></p>
            <a href="<?php echo get_permalink( $post_id ); ?>" class="btn btn-primary">View</a>
        </div>
    </div>
    </div>
        
    <?php endwhile;  endif;?>
</div>

<?php get_footer(); ?>
