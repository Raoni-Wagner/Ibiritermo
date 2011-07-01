<a href="#"><img src="images/logo_ibiritermo.png" width="444" height="126" style="margin-top: 250px; margin-left: 260px;" /></a>
<!--top dock -->
<div class="dock" id="dock" style="margin-top: 50px;">
  <div class="dock-container">
  <a class="dock-item" href="?pag=qualidade-port"><img src="images/qualidade.png" alt="home"  /><span>Qualidade de vida</span></a> 
  <a class="dock-item" href="?pag=acao-port"><img src="images/qualidade.png" alt="contact" /><span>Ações Sociais</span></a> 
  <a class="dock-item" href="?pag=responsa-port"><img src="images/qualidade.png" alt="portfolio" /><span>Responsabilidade Social</span></a> 
</div>
</div>
<script type="text/javascript">
	
	$(document).ready(
		function()
		{
			$('#dock').Fisheye(
				{
					maxWidth: 80,
					items: 'a',
					itemsText: 'span',
					container: '.dock-container',
					itemWidth: 60,
					proximity: 120,
					halign : 'center'
				}
			)
		}
	);

</script>
<div class="footer">
 	<ul>
    	<li><a href="?pag=home">Home</a>   |</li>
        <li><a href="?pag=home-port">Home Português</a>   |</li>
        <li><a href="?pag=qualidade-port">Qualidade de Vida</a>   |</li>
        <li><a href="?pag=acao-port">Ações Sociais</a>   |</li>
        <li><a href="?pag=responsa-port">Responsabilidade Social</a></li>
    </ul>
 </div>