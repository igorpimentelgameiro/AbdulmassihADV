<?php /*
Template Name: Home
*/
get_header(); include 'menu.php'; query_posts("page_id=7"); the_post(); $src =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
<div id="home" style="background-image: url(<?php echo $src[0]; ?> );">
    <section>
        <?php the_title('<div class="blocoHome"><h1 data-aos="fade-up" data-aos-duration="1000">','</h1></div>'); wp_reset_query(); ?>
        <?php query_posts("page_id=23"); the_post(); ?><div class="blocoHome"><div class="blocoContato" data-aos="zoom-in" data-aos-duration="1000">
        <?php if(get_field('telefone')) { echo '<div class="boxContato boxTel"><i class="fas fa-phone"></i><a href="tel:' . get_field('telefone') . '">' . get_field('telefone') . '</a></div>'; }?>
        <?php if(get_field('email')) { echo '<div class="boxContato boxEmail"><i class="fas fa-envelope"></i><a href="mailto:' . get_field('email') . '">' . get_field('email') . '</a></div>'; }?>

        <?php if( get_field('link_mapa') ): ?>
        <div class="boxContato boxEndereco"><i class="fas fa-map-marker-alt"></i>
            <a href="<?php the_field('link_mapa'); ?>" target="_blank"><?php the_field('endereco'); ?></a></div>
        <?php else:  ?>
        <div class="boxContato boxEndereco"><i class="fas fa-map-marker-alt"></i><?php the_field('endereco'); ?></div>
        <?php endif; ?>
    </div></div><?php wp_reset_query(); ?>
    </section>
</div>

<div id="escritorio" class="conteudo">
    <section>
        <?php query_posts("page_id=9"); the_post(); the_title('<h2 data-aos="fade-left" data-aos-duration="800">','</h2>');?>
        <div class="textoEscritorio" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400"><?php the_content(); ?></div>
        <?php if(get_field('certificados')) { echo '<div id="certificados" data-aos="fade" data-aos-duration="800">'.get_field('certificados').'</div>'; } ?>
        <?php wp_reset_query(); ?>
    </section>
</div>

<?php query_posts("page_id=64"); the_post(); $src =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
<div id="equipe" class="conteudo" style="background-image: url(<?php echo $src[0]; ?> );">
    <section>
        <?php the_title('<h2 data-aos="fade-up" data-aos-duration="800">','</h2>'); wp_reset_query(); ?>
        <div id="equipeLista" class="three-images-per-row">
            <?php $counter = 0; $is_second_row = false; ?>
            <?php query_posts("post_type=perfil&posts_per_page=-1&order=ASC&orderby=menu_order");  while ( have_posts() ) : the_post(); $src =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );?>
            <div class="equipe <?php if ( has_post_thumbnail() ) : echo "equipeDestaque"; endif; ?><?php if ($is_second_row) echo ' smaller'; ?>" data-aos="zoom-in" data-aos-duration="700">
                <?php if ( has_post_thumbnail() ) : ?>
                <div class="equipeFoto">
                    <div class="postFoto" style="background-image: url(<?php echo $src[0]; ?> );"></div>
                </div>
                <?php endif; ?>
                <div class="equipeInfo">
                    <?php the_title('<h3>','</h3>');  if ( has_excerpt() ) :  echo '<small>'.get_the_excerpt().'</small>'; endif; ?>
                    <?php if(get_field('pemail')) { echo '<div class="equipeEmail"><a href="mailto:' . get_field('pemail') . '">' . get_field('pemail') . '</a></div>'; }?>
                    <?php if ( has_post_thumbnail() ) : ?><?php the_content(); ?><?php endif;  ?>
                </div>
            </div>
            <?php $counter++; ?>
            <?php if ($counter % 3 == 0) : ?>
                <?php $is_second_row = true; ?>
                </div><div class="three-images-per-row">
            <?php endif; ?>
            <?php endwhile; wp_reset_query(); ?>
        </div>
    </section>
    <?php query_posts("page_id=67"); the_post();  $src =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); if ( has_post_thumbnail() ) : ?>
    <div class="fotoParallax" style="background-image: url(<?php echo $src[0]; ?> );"></div>
    <?php endif; ?>
</div>

<div id="areas-de-atuacao" class="conteudo">
    <section>
        <?php the_title('<h2 data-aos="fade-left" data-aos-duration="800">','</h2>'); wp_reset_query();  ?>
        <div id="accordion">
            <?php query_posts("post_type=area&posts_per_page=-1&order=ASC&orderby=menu_order"); if (have_posts()) : while (have_posts()) : the_post(); ?>  
            <?php the_title('<h3 class="accordion-toggle">','</h3>'); ?>
            <div class="accordion-content">
                <?php if ( has_post_thumbnail() ) : the_post_thumbnail('large', array('class' => 'responsive')); endif; ?>
                <div class="areaInfo"><?php the_content(); ?></div>
            </div>
            <?php endwhile; endif; wp_reset_query(); ?>
        </div>


        <div id="tabs">


            <ul class="tabs" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                <?php query_posts("post_type=area&posts_per_page=-1&order=ASC&orderby=menu_order"); if (have_posts()) : while (have_posts()) : the_post(); ?>  
                <li><a href="#t<?php the_ID(); ?>"><?php the_title(); ?></a></li>
                <?php endwhile; endif; wp_reset_query(); ?>
            </ul>
            <div class="tab_container">
                <?php query_posts("post_type=area&posts_per_page=-1&order=ASC&orderby=menu_order"); if (have_posts()) : while (have_posts()) : the_post(); ?>  
                <div class="tab_content" id="t<?php the_ID(); ?>">
                    <?php if ( has_post_thumbnail() ) : the_post_thumbnail('large', array('class' => 'responsive')); endif; the_content(); ?></div>
                <?php endwhile; endif; wp_reset_query(); ?>
            </div>

        </div>


    </section>
</div>

<div id="contato" class="conteudo">
    <section>
        <div class="blocos">
            <div class="bloco"><img src="<?php bloginfo('stylesheet_directory');?>/images/logoAbdulmassihBranco.png" width="" height="" alt="<?php bloginfo('name'); ?>" class="responsive"/ data-aos="zoom-in" data-aos-duration="800"></div>
            <?php query_posts("page_id=23"); the_post(); ?><div class="bloco" data-aos="fade-up" data-aos-duration="800">
            <?php if(get_field('telefone')) { echo '<div class="boxContato boxTel"><i class="fas fa-phone"></i><a href="tel:' . get_field('telefone') . '">' . get_field('telefone') . '</a></div>'; }?>
            <?php if(get_field('email')) { echo '<div class="boxContato boxEmail"><i class="fas fa-envelope"></i><a href="mailto:' . get_field('email') . '">' . get_field('email') . '</a></div>'; }?>
            <?php if( get_field('link_mapa') ): ?>
            <div class="boxContato boxEndereco"><i class="fas fa-map-marker-alt"></i>
                <a href="<?php the_field('link_mapa'); ?>" target="_blank"><?php the_field('endereco'); ?></a></div>
            <?php else:  ?>
            <div class="boxContato boxEndereco"><i class="fas fa-map-marker-alt"></i><?php the_field('endereco'); ?></div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php if ( has_post_thumbnail() ) : ?><div id="mapa">
    <?php if(get_field('link_mapa')) { echo '<a href="' . get_field('link_mapa') . '" target="_blank"></a>'; }?>
    <?php the_post_thumbnail('full', array('class' => 'responsive')); ?></div><?php endif; wp_reset_query(); ?>
</div>

<?php get_footer(); ?>
