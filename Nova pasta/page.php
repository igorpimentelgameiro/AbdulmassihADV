<?php  get_header(); include 'menu.php'; if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="spacer"></div>
<div class="conteudo">
<section>
<div class="postSingle">
<?php the_title('<h2>','</h2>'); the_content();?>
</div>
</section>
</div>
<?php endwhile; else : endif;  wp_reset_query();  get_footer(); ?>