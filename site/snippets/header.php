<!DOCTYPE html>
<html lang="en" >

<!--
 *
 *                                          
 *       ,--.   ,--.,--.   ,--.,------. ,------. 
 *       |   `.'   | \  `.'  / |  .--. '|  .---' 
 *       |  |'.'|  |  '.    /  |  '--'.'|  `--,  
 *       |  |   |  |    |  |   |  |\  \ |  `---. 
 *       `--'   `--'    `--'   `--' '--'`------' 
 *                                        
 *       h a n d c r a f t e d  -  w e b s i t e
 *       ---------------------------------------
 *       M Y R E : Messerli Yannik  Réalisations
 *
 * 
 * Date: 07/25/06 21:22:31
 * Author: <?php echo $site->author()->html() ?>
 *
 -->

<head>
<title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>

<base href="<?php echo $site->url() ?>" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
<meta name="viewport" content="width=1000"/>
<meta name= "<?php echo $site->description()->html() ?>">
<meta http-equiv="Content-Language" content="en">
<meta name="Author" content="<?php echo $site->author()->html() ?>">
<meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
<meta name="Copyright" content=" <?php echo $site->copyright()->kirbytext() ?>" />
<meta name="robots" content="index, follow" />


<!-- SCRIPTS -->
<!--[if lt IE 9]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
<![endif]-->
<?php echo js('assets/scripts/modernizr.js') ?>
<?php echo js('assets/scripts/mootools.js') ?>
<?php echo js('assets/scripts/Tourniquet.js') ?>


<!-- STYLE -->
<link rel="stylesheet" href="http://yui.yahooapis.com/2.8.1/build/reset/reset-min.css">
<?php echo css('assets/css/base.css') ?>



</head><body>

<?php snippet('menu') ?>
