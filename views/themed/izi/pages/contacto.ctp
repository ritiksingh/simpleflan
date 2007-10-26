<div id="contact">
	<h2>Contactanos</h2>
	<form action="http://formmail.dreamhost.com/cgi-bin/formmail.cgi" method="post">
		<input name="subject" value="Contacto desde Izi-Solutions.com" type="hidden"/>		
		<input name="redirect" value="<?php echo APP_ROOT.$html->url(array('/pagina/gracias')) ?>" type="hidden"/>		
		<input name="recipient" value="contacto@izisolutions.com" type="hidden"/>
		<label for="author">Nombre:<input tabindex="1" id="author" name="realname"/></label>
		<label for="email">e-mail:<input tabindex="2" id="email" name="email"/></label>        
		<label for="text">Diganos:
		<textarea tabindex="4" id="text" name="text" rows="10" cols="50"></textarea>
		</label>
		<input name="post" class="submit" type="submit" value="send" id="submit_btn"/>   
	</form>			
</div>
