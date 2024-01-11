<?php snippet('header') ?>

<script type="text/javascript" language="Javascript" src="/assets/scripts/audio.js"></script>

<div id="title" class="tm">
		<h1 class="big_title"><?php echo $page->title()->html() ?></h1>
	</div>


<div id="site"  class="tm">
<div class="clear"></div>
<div id="subtitle"><h2><?php echo $page->subtitle()->html() ?></h2>
<div class="clear"></div>

<h3><?php echo $page->subtitle_2()->html() ?></h3></div>
<div class="clear"></div>
<div id="content">

<div class="left col3"><?php echo $page->column_1()->kirbytext() ?></div>
<div class="left col3"><?php echo $page->column_2()->kirbytext() ?></div>
<div class="left col3"><?php echo $page->column_3()->kirbytext() ?></div>
<div class="clear" style="height: 50px;"></div>

</div>





<div class="clear"></div>
</div>


<?php snippet('footer') ?>