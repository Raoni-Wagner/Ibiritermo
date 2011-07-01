<a href="#"><img src="images/logo_ibiritermo.png" width="444" height="126" style="margin-top: 250px; margin-left: 260px;" /></a>
<!--top dock -->
<div class="dock" id="dock" style="margin-top: 50px;">
  <div class="dock-container">
  <a class="dock-item" href="?pag=qualidade-ing"><img src="images/qualidade.png" alt="home"  /><span>Quality of Life</span></a> 
  <a class="dock-item" href="?pag=acao-ing"><img src="images/qualidade.png" alt="contact" /><span>Social Actions</span></a> 
  <a class="dock-item" href="?pag=responsa-ing"><img src="images/qualidade.png" alt="portfolio" /><span>Social Responsibility</span></a> 
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
        <li><a href="?pag=home-ing">Home English</a>   |</li>
        <li><a href="?pag=qualidade-ing">Quality of Life</a>   |</li>
        <li><a href="?pag=acao-ing">Social Actions</a>   |</li>
        <li><a href="?pag=responsa-ing">Social Responsibility</a></li>
    </ul>
 </div>