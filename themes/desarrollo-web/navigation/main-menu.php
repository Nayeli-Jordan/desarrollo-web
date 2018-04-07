<li>
	<a class="item-menu" id="servicios" <?php if ( !is_front_page() ) {  ?> href="<?php echo SITEURL ?>#section-servicios" <?php } ?> itemprop="actionOption">Servicios</a>		
</li>
<li>
	<a class="item-menu" id="paquetes" <?php if ( !is_front_page() ) {  ?> href="http://localhost:8888/desarrollo-web#section-paquetes" <?php } ?> itemprop="actionOption">Paquetes</a>
</li>
<li>
	<a class="item-menu" id="beneficios" <?php if ( !is_front_page() ) {  ?> href="<?php echo SITEURL ?>#section-beneficios" <?php } ?> itemprop="actionOption">Beneficios</a>
</li>
<li>
	<a class="item-menu" id="contacto" <?php if ( !is_front_page() ) {  ?> href="<?php echo SITEURL ?>#section-contacto" <?php } ?> itemprop="actionOption">Contacto</a>
</li>
<li>
	<a href="<?php echo SITEURL ?>/faqs" itemprop="actionOption">Faq´s</a>
</li>
<?php
// $custom_menu = array(
// 	'location'	=>	'top_menu',
// );
// wp_nav_menu($custom_menu);
?>

<?php 
// wp_nav_menu( array(
//     'menu'   => 'Something custom walker',
//     'walker' => new WPDocs_Walker_Nav_Menu()
// ) );
 ?>