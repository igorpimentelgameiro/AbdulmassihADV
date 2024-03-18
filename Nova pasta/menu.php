<header id="headerMobile">
<section> 
<a href="<?php bloginfo('url'); ?>/"><img src="<?php bloginfo('stylesheet_directory');?>/images/logoAbdulmassih.png" width="" height="" alt="<?php bloginfo('name'); ?>" class="logo"/></a>
<i class="fas fa-bars"></i>
</section>
</header>
<div id="menuWrapper">
<div class="menu">
<a href="<?php bloginfo('url'); ?>/"><img src="<?php bloginfo('stylesheet_directory');?>/images/logoAbdulmassih.png" width="" height="" alt="<?php bloginfo('name'); ?>" class="logo" data-aos="zoom-in" data-aos-duration="800"/></a>
<i class="fas fa-times"></i>
<?php if(is_home() || is_front_page()): // home   ?>
<ul id="nav" data-aos="fade-right" data-aos-duration="1000">
        <li id="mHome" class="current"><a href="#home">Home</a></li>
        <li class=""><a href="#escritorio">O escritório</a></li>
        <li class=""><a href="#equipe">Equipe</a></li>
        <li class=""><a href="#areas-de-atuacao">Áreas de atuação</a></li>
        <li class=""><a href="#contato">Contato</a></li>
      </ul>
<?php else: // internas   ?>
<ul id="nav" data-aos="fade-right" data-aos-duration="1000">
        <li id="mHome" class="current"><a href="<?php bloginfo('url'); ?>">Home</a></li>
        <li class=""><a href="<?php bloginfo('url'); ?>/#escritorio">O escritório</a></li>
        <li class=""><a href="<?php bloginfo('url'); ?>/#equipe">Equipe</a></li>
        <li class=""><a href="<?php bloginfo('url'); ?>/#areas-de-atuacao">Áreas de atuação</a></li>
        <li class=""><a href="<?php bloginfo('url'); ?>/#contato">Contato</a></li>
      </ul>
<?php endif; ?>    
</div>
</div>