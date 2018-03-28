		<section id="section-contacto" class="[ relative ][ bg-image ]" style="background-image: url(<?php echo THEMEPATH ?>images/contacto.png);">
			<div class="[ bg-dark-opacity ][ absolute top-0 bottom-0 left-0 right-0 ]"></div>
			<div class="[ container ][ relative ][ color-light ][ padding-top-bottom-section ]">
				<h2 class="[ text-center ]">Contacto</h2>
				<div class="[ row ]">
					<div class="[ col s12 l9 ]">
						<p class="large">Gracias por ponerte en contacto!</p>
						<p class="[ margin-bottom ]">No te preocupes si aún no estás seguro de lo que tu proyecto requiere, podemos ayudarte a encontrar la mejor opción. Completa los campos para que nos sea más fácil ayudarte.</p>
						<div class="[ row ]">
							<?php echo do_shortcode('[contact-form-7 id="4" title="Contacto"]'); ?>
						</div>					
					</div>
					<div class="[ col s12 l3 ][ text-center ][ margin-top-large-sm-and-down ][ wow lightSpeedIn ]">
						<p>Ciudad de México</p>
						<p class="[ margin-bottom ]">Horario de asistencia<br/>10:00 a 19:00 hrs.</p>
						<i class="medium material-icons">phone_iphone</i><br>
						<!-- <p><a class="[ color-light ]" href="tel:+52559391351">tel. 55 55 55 55</a></p> -->
						<p><a class="[ color-light ]" href="tel:+52559391351">cel. 55 59 39 13 51</a></p>
						<i class="medium material-icons">mail_outline</i><br>
						<p><a class="[ color-light ]" href="mailto:nayeli.jordan16@gmail.com">nayeli.jordan16@gmail.com</a></p>
					</div>
				</div>			
			</div>
		</section>
		
		<footer class="[ padding-top-bottom ]">
			<div class="triangulo-bottom-right-footer absolute right-0 bottom-0"></div>
			<div class="[ container ][ text-center ][ color-light ]">
				<p class="font-alegreya">Copyright © <span id="date"></span> nombre de la empresa</p>
			</div>
		</footer>
		<div id="intro" class="return-top [ wow bouceIn ]">
			<i class="material-icons">expand_less</i>
		</div>
	</div> <!-- end main body -->
	<?php wp_footer(); ?>
</body>
</html>