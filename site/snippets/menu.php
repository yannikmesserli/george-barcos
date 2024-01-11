<nav role="navigation">

  

</nav>




<div class="clear"></div>


<header id="top">

<div class="clear"></div>
<div id="menu"  class="tm">

 

<ul>
    <?php foreach($pages->visible() as $p): ?>
    <li>
      <a <?php e($p->isOpen(), ' class="menuactive"') ?> href="<?php echo $p->url() ?>"><span><?php echo $p->title()->html() ?></span></a>
    </li>
    <?php endforeach ?>
  </ul>

</ul>

<div class="clear"></div>
</div>

<div class="clear"></div>
</header>