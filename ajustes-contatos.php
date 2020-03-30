//Captura telefone e formata para tel:
<?php
	$telephone = get_field('telefone');
	$telephone = str_replace(array( '(', ')','-'), '', $telephone);
	$telephone = preg_replace('/\s/','', $telephone);
	?>
  
//Padrão para Whatsapp
<a href="https://api.whatsapp.com/send?phone=55<?php the_field('link_para_whatsapp'); ?>&text=Ol%C3%A1,%20vim%20pelo%20[SITE AQUI]" class="telefone" target="_blank"><?php the_field('whatsapp'); ?></a>
