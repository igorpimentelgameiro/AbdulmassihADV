<?php  get_header(); include 'menu.php'; ?>
<div class="spacer"></div>
<div class="conteudo">
<section>
<div class="postSingle">
<h2>Erro 404</h2>
<h3>Página não encontrada</h3>
<p>O conteúdo que você tentou acessar não existe ou foi removido.</p>
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
<?php if(get_field('mapa')) { echo '<div class="mapa">'.get_field('mapa').'</div>'; } wp_reset_query(); ?>
</div>
<?php get_footer(); ?>