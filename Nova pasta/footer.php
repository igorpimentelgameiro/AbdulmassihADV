<footer>
<section>
<div class="boxRodape">© <?php the_time('Y'); ?> - Todos os direitos reservados.</div>
<div class="boxRodape"><a href="<?php bloginfo('url'); ?>/politica-de-privacidad">Política de Privacidade</a></div>
<?php query_posts("page_id=23"); the_post(); if(get_field('rodape')) { echo '<div class="boxRodape">'.get_field('rodape').'</div>'; } wp_reset_query(); ?>
<div id="unitri"><a href="https://www.unitri.com.br/" target="_blank"><img src="<?php bloginfo('stylesheet_directory');?>/images/unitri.png" width="" height="" alt="Unitri"/></a></div>
</section>
</footer>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/js/aos.js"></script>
<script>
      AOS.init({
        easing: 'ease-in-out-sine',
		disable: 'mobile'
      });
    </script>
<?php wp_footer(); ?>
</div>
</body>
</html>