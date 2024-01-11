<?php snippet('header') ?>



<script type="text/javascript">

  window.addEvent('domready', function(){
  
    var carousel = new Tourniquet({container: $('carousel'), previous: $('carouse_w').getElement('.carousel_left'), next: $('carouse_w').getElement('.carousel_right')});
    
  
  });

</script>

<div id="carouse_w">
<div class="clear"></div>
<div id="carousel">
<div class="clear"></div>



			
		<div class="item" style="background: transparent url(http://george-barcos.ch/assets/images/background/george9.png) no-repeat;height: 421px; width: 1043px; margin-left: 128.5px;"></div>
						
			<div class="item" style="background: transparent url(http://george-barcos.ch/assets/images/background/home2.png) no-repeat;height: 390px; width: 820px; margin-left: 240px;"></div>
				
</div>
<a href="javascript:stop();" onclick="stop();" class="arrow carousel_left"><div></div></a>
<a href="javascript:stop();" onclick="stop();" class="arrow carousel_right"><div></div></a>

</div>


<div id="site"  class="tm">
<div class="clear"></div>
<div id="subtitle"><h2><?php echo $page->subtitle()->html() ?></h2>
<div class="clear"></div>
<?php echo $page->text()->html() ?>

<div class="clear"></div>
</div>


<?php snippet('footer') ?>