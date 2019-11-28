<?php
defined('MYAAC') or die('Direct access not allowed!');
?>
<html>
<head>
<?php echo template_place_holder('head_start'); ?>
<!--ICON-->
<link rel="shortcut icon" href="<?PHP echo $template_path; ?>/images/general/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?PHP echo $template_path; ?>/images/general/favicon.ico" type="image/x-icon">
<!--CSS'S-->
<link href="<?PHP echo $template_path; ?>/css/basic_d.css" rel="stylesheet" type="text/css">
<link href="<?PHP echo $template_path; ?>/css/news.css" rel="stylesheet" type="text/css">
<!--JS--> 
<script id="twitter-wjs" src="<?PHP echo $template_path; ?>/js/widgets.js"></script>
<script id="facebook-jssdk" async src="<?PHP echo $template_path; ?>/js/all.js"></script>
<script type="text/javascript" src="<?PHP echo $template_path; ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?PHP echo $template_path; ?>/js/ajaxcip.js"></script>
<script type="text/javascript" src="<?PHP echo $template_path; ?>/js/generic.js"></script>
<script type="text/javascript" src="<?PHP echo $template_path; ?>/js/create_character.js"></script>
<script type="text/javascript">  
var loginStatus=0; 
loginStatus='<?PHP if($logged){ ?>true<?PHP }else{ ?>false<?PHP } ?>';  
var activeSubmenuItem='<?PHP echo PAGE; ?>';  
var JS_DIR_IMAGES=0; 
JS_DIR_IMAGES='<?PHP echo $template_path; ?>/images/';  
var JS_DIR_ACCOUNT=0; 
JS_DIR_ACCOUNT='';  
var g_FormName='';  
var g_FormField='';  
var g_Deactivated=false;
var FB_TryLogin = 0;
var FB_ForceReload = 0;
</script>
<script type="text/javascript">
  if(top.location != window.location) {
    top.location = self.location;
  }
</script>
<script type="text/javascript" src="<?PHP echo $template_path; ?>/initialize.js"></script>

<link href="<?PHP echo $template_path; ?>/css/facebook.css" rel="stylesheet" type="text/css">  
<?php echo template_place_holder('head_end'); ?>
</head>

<body onBeforeUnLoad="SaveMenu();" onUnload="SaveMenu();" data-twttr-rendered="true">
<?php echo template_place_holder('body_start'); ?>
<script type="text/javascript">
  window.fbAsyncInit = function() {
    FB.init({
      appId      : 497232093667125, // App ID
      status     : true,              // check login status
      cookie     : true,              // enable cookies to allow the server to access the session
      xfbml      : true               // parse XFBML
    });
    FB.Event.subscribe('auth.login', function() {
      var URLHelper = "?";
      if (window.location.search.replace("?", "").length > 0) {
        URLHelper = "&";
      }
      if (FB_TryLogin == 1) {
        window.location = window.location + URLHelper + "step=facebooktrylogin&wasreloaded=1";
      } else if (FB_TryLogin == 2) {
        window.location = window.location + URLHelper + "page=facebooktrylogin&wasreloaded=1";
      } else {
        window.location = window.location + URLHelper + "wasreloaded=1";
      }
    });
    FB.Event.subscribe('auth.logout', function(a_Response) {
      if (a_Response.status !== 'connected') {
        window.location.href=window.location.href;
      } else {
        /* nothing to do here*/
      }
    });
    FB.Event.subscribe('auth.statusChange', function(response) {
      if (FB_ForceReload == 1 && response.status == "connected") {
        var URLHelper = "?";
        if (window.location.search.replace("?", "").length > 0) {
          URLHelper = "&";
        }
        window.location = window.location + URLHelper + "step=facebooktrylogin&wasreloaded=1";
      }
    });
  };
  (function(d){
    var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
    if (d.getElementById(id)) {return;}
    js = d.createElement('script'); js.id = id; js.async = true;
    js.src = "//connect.facebook.net/en_US/all.js";
    ref.parentNode.insertBefore(js, ref);
  }(document));
</script>
  <a name="top"></a>
  <div id="MainHelper1">
  	<div id="MainHelper2">
    	<div id="ArtworkHelper1">
        	<div id="ArtworkHelper2">
          		<div id="HeaderArtworkDiv" style="background-image:url(<?PHP echo $template_path; ?>/images/header/background-artwork.jpg);"></div>
        	</div>
      	</div>
      	<div id="DeactivationContainer" onclick="DisableDeactivationContainer();"></div>

      	<div id="Bodycontainer">
      	<div id="ContentRow">
          	<div id="MenuColumn">
            	<div id="LeftArtwork">
              		<a href="#">
						<img id="TibiaLogoArtworkTop" src="<?PHP echo $template_path; ?>/images/header/tibia-logo-artwork-top.gif" alt="logoartwork">
					</a>
              		<img id="LogoLink" src="<?PHP echo $template_path; ?>/images/monteiro-logo.png" onclick="window.location = &#39;http://www.monteirosoft.com&#39;;" alt="MonteiroSoft">
            	</div>
  				<?PHP include "loginbox.php"; ?>
				<div id="Menu">
					<div id="MenuTop" style="background-image:url(<?PHP echo $template_path; ?>/images/general/box-top.gif);"></div>
						<div id="news" class="menuitem">
							<span onclick="MenuItemAction('news')">
  								<div class="MenuButton" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/button-background.gif);">
    								<div onmouseover="MouseOverMenuItem(this);" onmouseout="MouseOutMenuItem(this);"><div class="Button" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/button-background-over.gif);"></div>
      								<span id="news_Lights" class="Lights">
        								<div class="light_lu" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/green-light.gif);"></div>
										<div class="light_ld" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/green-light.gif);"></div>
										<div class="light_ru" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/green-light.gif);"></div>
      								</span>
									<div id="news_Icon" class="Icon" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/icon-news.gif);"></div>
									<div id="news_Label" class="Label" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/label-news.gif);"></div>
									<div id="news_Extend" class="Extend" style="background-image: url(<?PHP echo $template_path; ?>/images/general/minus.gif);"></div>
    							</div>
  							</div>
						</span>
						<div id="news_Submenu" class="Submenu">
							<a href="<?php echo $template['link_news']; ?>">
  								<div id="submenu_news" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
    								<div class="LeftChain" style="background-image:url(<?PHP echo $template_path; ?>/images/general/chain.gif);"></div>
    								<div id="ActiveSubmenuItemIcon_news" class="ActiveSubmenuItemIcon" style="background-image: url(<?PHP echo $template_path; ?>/images/menu/icon-activesubmenu.gif);"></div>
    								<div id="ActiveSubmenuItemLabel_latestnews" class="SubmenuitemLabel">Latest News</div>
    								<div class="RightChain" style="background-image:url(<?PHP echo $template_path; ?>/images/general/chain.gif);"></div>
  								</div>
							</a>
							<a href="<?php echo $template['link_news_archive']; ?>">
  								<div id="submenu_newsarchive" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
    								<div class="LeftChain" style="background-image:url(<?PHP echo $template_path; ?>/images/general/chain.gif);"></div>
									<div id="ActiveSubmenuItemIcon_newsarchive" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/icon-activesubmenu.gif);"></div>
									<div id="ActiveSubmenuItemLabel_newsarchive" class="SubmenuitemLabel">News Archive</div>
									<div class="RightChain" style="background-image:url(<?PHP echo $template_path; ?>/images/general/chain.gif);"></div>
  								</div>
							</a>
						</div>
					</div>
				<div id="library" class="menuitem">
					<span onclick="MenuItemAction('library')">
						<div class="MenuButton" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/button-background.gif);">
							<div onmouseover="MouseOverMenuItem(this);" onmouseout="MouseOutMenuItem(this);"><div class="Button" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/button-background-over.gif);"></div>
							<span id="library_Lights" class="Lights">
								<div class="light_lu" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/green-light.gif);"></div>
								<div class="light_ld" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/green-light.gif);"></div>
								<div class="light_ru" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/green-light.gif);"></div>
							</span>
							<div id="library_Icon" class="Icon" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/icon-library.gif);"></div>
							<div id="library_Label" class="Label" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/label-library.gif);"></div>
							<div id="library_Extend" class="Extend" style="background-image: url(<?PHP echo $template_path; ?>/images/general/plus.gif);"></div>
						</div>
					</div>
				</span>
				<div id="library_Submenu" class="Submenu">
					<a href="<?php echo $template['link_serverInfo']; ?>">
						<div id="submenu_serverinfo" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
							<div class="LeftChain" style="background-image:url(<?PHP echo $template_path; ?>/images/general/chain.gif);"></div>
							<div id="ActiveSubmenuItemIcon_serverinfo" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/icon-activesubmenu.gif);"></div>
							<div id="ActiveSubmenuItemLabel_serverinfo" class="SubmenuitemLabel">Server Info</div>
							<div class="RightChain" style="background-image:url(<?PHP echo $template_path; ?>/images/general/chain.gif);"></div>
						</div>
					</a>
					<a href="<?php echo $template['link_experienceTable']; ?>">
						<div id="submenu_experiencetable" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
							<div class="LeftChain" style="background-image:url(<?PHP echo $template_path; ?>/images/general/chain.gif);"></div>
							<div id="ActiveSubmenuItemIcon_experiencetable" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/icon-activesubmenu.gif);"></div>
							<div id="ActiveSubmenuItemLabel_experiencetable" class="SubmenuitemLabel">Experience Table</div>
							<div class="RightChain" style="background-image:url(<?PHP echo $template_path; ?>/images/general/chain.gif);"></div>
						</div>
					</a>
					<a href="<?php echo $template['link_movies']; ?>">
						<div id="submenu_movies" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
							<div class="LeftChain" style="background-image:url(<?PHP echo $template_path; ?>/images/general/chain.gif);"></div>
							<div id="ActiveSubmenuItemIcon_movies" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/icon-activesubmenu.gif);"></div>
							<div id="ActiveSubmenuItemLabel_movies" class="SubmenuitemLabel">Movies</div>
							<div class="RightChain" style="background-image:url(<?PHP echo $template_path; ?>/images/general/chain.gif);"></div>
						</div>
					</a>
				</div>
			</div>
			<div id="community" class="menuitem">
				<span onclick="MenuItemAction('community')">
					<div class="MenuButton" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/button-background.gif);">
						<div onmouseover="MouseOverMenuItem(this);" onmouseout="MouseOutMenuItem(this);"><div class="Button" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/button-background-over.gif);"></div>
						<span id="community_Lights" class="Lights">
							<div class="light_lu" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/green-light.gif);"></div>
							<div class="light_ld" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/green-light.gif);"></div>
							<div class="light_ru" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/green-light.gif);"></div>
						</span>
						<div id="community_Icon" class="Icon" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/icon-community.gif);"></div>
						<div id="community_Label" class="Label" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/label-community.gif);"></div>
						<div id="community_Extend" class="Extend" style="background-image: url(<?PHP echo $template_path; ?>/images/general/plus.gif);"></div>
					</div>
				</div>
			</span>
			<div id="community_Submenu" class="Submenu">
				<a href="<?php echo $template['link_characters']; ?>">
					<div id="submenu_characters" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $template_path; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_characters" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_characters" class="SubmenuitemLabel">Characters</div>
						<div class="RightChain" style="background-image:url(<?PHP echo $template_path; ?>/images/general/chain.gif);"></div>
					</div>
				</a>
				<a href="<?php echo $template['link_online']; ?>">
					<div id="submenu_online" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $template_path; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_online" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_online" class="SubmenuitemLabel">Who is online</div>
						<div class="RightChain" style="background-image:url(<?PHP echo $template_path; ?>/images/general/chain.gif);"></div>
					</div>
				</a>
				<a href="<?php echo $template['link_highscores']; ?>">
					<div id="submenu_highscores" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $template_path; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_highscores" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_highscores" class="SubmenuitemLabel">Highscores</div>
						<div class="RightChain" style="background-image:url(<?PHP echo $template_path; ?>/images/general/chain.gif);"></div>
					</div>
				</a>
				<a href="<?php echo $template['link_lastkills']; ?>">
					<div id="submenu_lastkills" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $template_path; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_lastkills" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_lastkills" class="SubmenuitemLabel">Last Kills</div>
						<div class="RightChain" style="background-image:url(<?PHP echo $template_path; ?>/images/general/chain.gif);"></div>
					</div>
				</a>
				<a href="<?php echo $template['link_houses']; ?>">
					<div id="submenu_houses" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $template_path; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_houses" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_houses" class="SubmenuitemLabel">Houses</div>
						<div class="RightChain" style="background-image:url(<?PHP echo $template_path; ?>/images/general/chain.gif);"></div>
					</div>
				</a>
				<a href="<?php echo $template['link_guilds']; ?>">
					<div id="submenu_guilds" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $template_path; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_guilds" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_guilds" class="SubmenuitemLabel">Guilds</div>
						<div class="RightChain" style="background-image:url(<?PHP echo $template_path; ?>/images/general/chain.gif);"></div>
					</div>
				</a>
				<a href="<?php echo $template['link_polls']; ?>">
					<div id="submenu_polls" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $template_path; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_polls" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_polls" class="SubmenuitemLabel">Polls</div>
						<div class="RightChain" style="background-image:url(<?PHP echo $template_path; ?>/images/general/chain.gif);"></div>
					</div>
				</a>
			</div>
		</div>
			<div id="forum" class="menuitem">
				<span onclick="MenuItemAction('forum')">
					<div class="MenuButton" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/button-background.gif);">
						<div onmouseover="MouseOverMenuItem(this);" onmouseout="MouseOutMenuItem(this);"><div class="Button" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/button-background-over.gif);"></div>
						<span id="forum_Lights" class="Lights">
							<div class="light_lu" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/green-light.gif);"></div>
							<div class="light_ld" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/green-light.gif);"></div>
							<div class="light_ru" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/green-light.gif);"></div>
						</span>
						<div id="forum_Icon" class="Icon" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/icon-forum.gif);"></div>
						<div id="forum_Label" class="Label" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/label-forum.gif);"></div>
						<div id="forum_Extend" class="Extend" style="background-image: url(<?PHP echo $template_path; ?>/images/general/plus.gif);"></div>
					</div>
				</div>
			</span>
			<div id="forum_Submenu" class="Submenu">
				<?php echo $template['link_forum']; ?>
					<div id="submenu_forum" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $template_path; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_forum" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_forum" class="SubmenuitemLabel">Server Forum</div>
						<div class="RightChain" style="background-image:url(<?PHP echo $template_path; ?>/images/general/chain.gif);"></div>
					</div>
				</a>
			</div>
		</div>
			<div id="account" class="menuitem">
				<span onclick="MenuItemAction('account')">
  					<div class="MenuButton" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/button-background.gif);">
    					<div onmouseover="MouseOverMenuItem(this);" onmouseout="MouseOutMenuItem(this);"><div class="Button" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/button-background-over.gif);"></div>
      					<span id="account_Lights" class="Lights">
        					<div class="light_lu" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/green-light.gif);"></div>
							<div class="light_ld" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/green-light.gif);"></div>
							<div class="light_ru" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/green-light.gif);"></div>
      					</span>
					  	<div id="account_Icon" class="Icon" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/icon-account.gif);"></div>
					  	<div id="account_Label" class="Label" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/label-account.gif);"></div>
					  	<div id="account_Extend" class="Extend" style="background-image: url(<?PHP echo $template_path; ?>/images/general/plus.gif);"></div>
    				</div>
  				</div>
			</span>
			<div id="account_Submenu" class="Submenu">
			<?PHP
			if(admin()){
			?>
				<a href="?subtopic=cpanel">
  					<div id="submenu_cpanel" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $template_path; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_cpanel" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_cpanel" class="SubmenuitemLabel">Admin Panel</div>
						<div class="RightChain" style="background-image:url(<?PHP echo $template_path; ?>/images/general/chain.gif);"></div>
  					</div>
				</a>
			<?PHP } ?>
				<a href="<?php echo $template['link_account_manage']; ?>">
  					<div id="submenu_accountmanagement" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $template_path; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_accountmanagement" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_accountmanagement" class="SubmenuitemLabel">Account Management</div>
						<div class="RightChain" style="background-image:url(<?PHP echo $template_path; ?>/images/general/chain.gif);"></div>
  					</div>
				</a>
				<a href="<?php echo $template['link_account_create']; ?>">
  					<div id="submenu_createaccount" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
    					<div class="LeftChain" style="background-image:url(<?PHP echo $template_path; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_createaccount" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_createaccount" class="SubmenuitemLabel">Create Account</div>
						<div class="RightChain" style="background-image:url(<?PHP echo $template_path; ?>/images/general/chain.gif);"></div>
  					</div>
				</a>
				<?PHP
				if($config['site']['download_page']){
				?>
				<a href="<?php echo $template['link_downloads']; ?>">
  					<div id="submenu_download" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $template_path; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_download" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_download" class="SubmenuitemLabel">Download Client</div>
						<div class="RightChain" style="background-image:url(<?PHP echo $template_path; ?>/images/general/chain.gif);"></div>
  					</div>
				</a>
				<?PHP } ?>
				<a href="<?php echo $template['link_account_lost']; ?>">
  					<div id="submenu_lostaccount" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $template_path; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_lostaccount" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_lostaccount" class="SubmenuitemLabel">Lost Account?</div>
						<div class="RightChain" style="background-image:url(<?PHP echo $template_path; ?>/images/general/chain.gif);"></div>
  					</div>
				</a>
			</div>
		</div>
			<div id="team" class="menuitem">
				<span onclick="MenuItemAction('team')">
  					<div class="MenuButton" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/button-background.gif);">
    					<div onmouseover="MouseOverMenuItem(this);" onmouseout="MouseOutMenuItem(this);"><div class="Button" style="background-image: url(<?PHP echo $template_path; ?>/images/menu/button-background-over.gif);"></div>
      					<span id="team_Lights" class="Lights">
							<div class="light_lu" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/green-light.gif);"></div>
							<div class="light_ld" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/green-light.gif);"></div>
							<div class="light_ru" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/green-light.gif);"></div>
      					</span>
						<div id="team_Icon" class="Icon" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/icon-support.gif);"></div>
						<div id="team_Label" class="Label" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/label-support.gif);"></div>
						<div id="team_Extend" class="Extend" style="background-image: url(<?PHP echo $template_path; ?>/images/general/plus.gif);"></div>
    				</div>
  				</div>
			</span>
			<div id="team_Submenu" class="Submenu">
				<a href="<?php echo $template['link_rules']; ?>">
  					<div id="submenu_rules" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $template_path; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_rules" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_rules" class="SubmenuitemLabel">Tibia Rules</div>
						<div class="RightChain" style="background-image:url(<?PHP echo $template_path; ?>/images/general/chain.gif);"></div>
  					</div>
				</a>
				<a href="<?php echo $template['link_team']; ?>">
  					<div id="submenu_team" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $template_path; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_team" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_team" class="SubmenuitemLabel">Support List</div>
						<div class="RightChain" style="background-image:url(<?PHP echo $template_path; ?>/images/general/chain.gif);"></div>
  					</div>
				</a>
			</div>
		</div>
		<?PHP
			if($config['gifts_system']){
		?>
			<div id="shops" class="menuitem">
				<span onclick="MenuItemAction('shops')">
  					<div class="MenuButton" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/button-background.gif);">
    					<div onmouseover="MouseOverMenuItem(this);" onmouseout="MouseOutMenuItem(this);"><div class="Button" style="background-image: url(<?PHP echo $template_path; ?>/images/menu/button-background-over.gif);"></div>
      					<span id="shops_Lights" class="Lights">
							<div class="light_lu" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/green-light.gif);"></div>
							<div class="light_ld" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/green-light.gif);"></div>
							<div class="light_ru" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/green-light.gif);"></div>
      					</span>
					  	<div id="shops_Icon" class="Icon" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/icon-shops.gif);"></div>
					  	<div id="shops_Label" class="Label" style="background-image:url(<?PHP echo $template_path; ?>/images/menu/label-shops.gif);"></div>
					  	<div id="shops_Extend" class="Extend" style="background-image: url(<?PHP echo $template_path; ?>/images/general/plus.gif);"></div>
    				</div>
  				</div>
			</span>
			<div id="shops_Submenu" class="Submenu">
				<a href='<?php echo $template['link_points']; ?>'>
  					<div id='submenu_points' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    					<div class='LeftChain' style='background-image:url(<?PHP echo $template_path; ?>/images/general/chain.gif);'></div>
						<div id='ActiveSubmenuItemIcon_points' class='ActiveSubmenuItemIcon' style='background-image:url(<?PHP echo $template_path; ?>/images/menu/icon-activesubmenu.gif);'></div>
						<div class='SubmenuitemLabel'>Buy Points</div>
						<div class='RightChain' style='background-image:url(<?PHP echo $template_path; ?>/images/general/chain.gif);'></div>
  					</div>
				</a>
				<a href='<?php echo $template['link_gifts']; ?>'>
  					<div id='submenu_gifts' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
						<div class='LeftChain' style='background-image:url(<?PHP echo $template_path; ?>/images/general/chain.gif);'></div>
						<div id='ActiveSubmenuItemIcon_gifts' class='ActiveSubmenuItemIcon' style='background-image:url(<?PHP echo $template_path; ?>/images/menu/icon-activesubmenu.gif);'></div>
						<div class='SubmenuitemLabel'>Shop Offer</div>
						<div class='RightChain' style='background-image:url(<?PHP echo $template_path; ?>/images/general/chain.gif);'></div>
  					</div>
				</a>
				<?PHP
				if($logged){
				?>
				<a href='<?php echo $template['link_gifts_history']; ?>'>
  					<div id='submenu_show_history' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
						<div class='LeftChain' style='background-image:url(<?PHP echo $template_path; ?>/images/general/chain.gif);'></div>
						<div id='ActiveSubmenuItemIcon_show_history' class='ActiveSubmenuItemIcon' style='background-image:url(<?PHP echo $template_path; ?>/images/menu/icon-activesubmenu.gif);'></div>
						<div class='SubmenuitemLabel'>History</div>
						<div class='RightChain' style='background-image:url(<?PHP echo $template_path; ?>/images/general/chain.gif);'></div>
  					</div>
				</a>
				<?PHP } ?>
				<?PHP
				if(admin()){
				?>
				<a href='?subtopic=shopadmin'>
  					<div id='submenu_shopadmin' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
						<div class='LeftChain' style='background-image:url(<?PHP echo $template_path; ?>/images/general/chain.gif);'></div>
						<div id='ActiveSubmenuItemIcon_shopadmin' class='ActiveSubmenuItemIcon' style='background-image:url(<?PHP echo $template_path; ?>/images/menu/icon-activesubmenu.gif);'></div>
						<div class='SubmenuitemLabel'>Shop Admin</div>
						<div class='RightChain' style='background-image:url(<?PHP echo $template_path; ?>/images/general/chain.gif);'></div>
  					</div>
				</a>
				<?PHP } ?>
			</div>
		</div>
		<?PHP } ?>
		<div id="MenuBottom" style="background-image:url(<?PHP echo $template_path; ?>/images/general/box-bottom.gif);"></div>
	</div>
	<script type="text/javascript">InitializePage();</script></div>
    	<div id="ContentColumn">
        	<div id="Content" class="Content">
            	<div id="ContentHelper">
				<script type="text/javascript" src="<?PHP echo $template_path; ?>/newsticker.js"></script>
				<?PHP echo $news_content; ?>
				<?php $hooks->trigger(HOOK_TIBIACOM_ARTICLE); ?>
  				<div id="news" class="Box">
    				<div class="Corner-tl" style="background-image:url(<?PHP echo $template_path; ?>/images/content/corner-tl.gif);"></div>
					<div class="Corner-tr" style="background-image:url(<?PHP echo $template_path; ?>/images/content/corner-tr.gif);"></div>
					<div class="Border_1" style="background-image:url(<?PHP echo $template_path; ?>/images/content/border-1.gif);"></div>
					<div class="BorderTitleText" style="background-image:url(<?PHP echo $template_path; ?>/images/content/title-background-green.gif);"></div>
					<?php
						if($config['site_closed'])
							$tmp_page = $config['site_closed_title'];
						else
							$tmp_page = (isset($_404) ? '404' : PAGE);

						$headline = $template_path.'/images/header/headline-' . $tmp_page . '.gif';
						if(!file_exists($headline))
							$headline = $template_path . '/headline.php?t=' . ucwords(str_replace('_', ' ', $tmp_page));
					?>
    				<img id="ContentBoxHeadline" class="Title" src="<?PHP echo $headline; ?>" alt="Contentbox headline">
    				<div class="Border_2">
      					<div class="Border_3">
							<?php $hooks->trigger(HOOK_TIBIACOM_BORDER_3); ?>
        					<div class="BoxContent" style="background-image:url(<?PHP echo $template_path; ?>/images/content/scroll.gif);">
								<?PHP echo $content; ?>
        					</div>
      					</div>
    				</div>
					<div class="Border_1" style="background-image:url(<?PHP echo $template_path; ?>/images/content/border-1.gif);"></div>
					<div class="CornerWrapper-b"><div class="Corner-bl" style="background-image:url(<?PHP echo $template_path; ?>/images/content/corner-bl.gif);"></div></div>
					<div class="CornerWrapper-b"><div class="Corner-br" style="background-image:url(<?PHP echo $template_path; ?>/images/content/corner-br.gif);"></div></div>
  				</div>
              	<div id="ThemeboxesColumn">
                	<div id="DeactivationContainerThemebox" onclick="DisableDeactivationContainer();"></div>
                	<div id="RightArtwork">
                  		<img id="Monster" src="images/monsters/<?php echo logo_monster() ?>.gif" onclick="window.location = #" alt="Monster of the Week">
                  		<img id="PedestalAndOnline" src="<?PHP echo $template_path; ?>/images/header/pedestal-and-online.gif" alt="Monster Pedestal and Players Online Box">
                  		<div id="PlayersOnline" onClick="window.location='<?php echo $template['link_online']; ?>'">
		  				<?PHP
							if($status['online'])
								echo $status['players'].'<br />Players Online';
							else
								echo '0<br /> Players Online';
		  				?>
		  				</div>
        			</div>
                	<div id="Themeboxes">
                  		<!-- premium theme box -->
						<div id="PremiumBox" class="Themebox" style="background-image:url(<?PHP echo $template_path; ?>/images/themeboxes/premium/premiumbox.gif);">
    						<div class="ThemeboxButton">
    							<form action="#" method="post" style="padding:0px;margin:0px;">
									<div class="BigButton" style="background-image:url(<?PHP echo $template_path; ?>/images/buttons/sbutton.gif)">
										<div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image:url(<?PHP echo $template_path; ?>/images/buttons/sbutton_over.gif);"></div>
											<input class="ButtonText" type="image" name="Get Premium" alt="Get Premium" src="<?PHP echo $template_path; ?>/images/buttons/_sbutton_getpremium.gif">
										</div>
									</div>
								</form>  
							</div>
  							<div class="Bottom" style="background-image:url(<?PHP echo $template_path; ?>/images/general/box-bottom.gif);"></div>
						</div>

						<!-- networks theme box -->
						<?PHP
						$nF = $db->query("SELECT " .$db->fieldName('network_link'). " FROM " .$db->tableName('z_network_box'). " WHERE " .$db->fieldName('network_name'). " = 'facebook'")->fetch();
						$nT = $db->query("SELECT " .$db->fieldName('network_link'). " FROM " .$db->tableName('z_network_box'). " WHERE " .$db->fieldName('network_name'). " = 'twitter'")->fetch();
						?>
						<?PHP if(!empty($nF)){ ?>
						<div id="NetworksBox" class="Themebox" style="background-image:url(<?PHP echo $template_path; ?>/images/themeboxes/networks/networksbox.png);">
  							<div id="FacebookBlock">
    							<div id="FacebookLikeBox">
      								<div class="fb-like-box fb_iframe_widget" data-href="https://www.facebook.com/<?PHP echo $nF['network_link']; ?>" data-width="175" data-height="180" data-show-faces="true" data-stream="false" data-border-color="none" data-header="false" fb-xfbml-state="rendered">
										<span style="vertical-align: bottom; width: 181px; height: 180px;">
										</span>
									</div>
    							</div>
    							<div id="FacebookSendBox">
      								<div class="fb-send fb_iframe_widget" data-href="https://www.facebook.com/<?PHP echo $nF['network_link']; ?>" data-width="50" data-height="20" fb-xfbml-state="rendered">
										<span style="vertical-align: bottom; width: 50px; height: 20px;">
										</span>
									</div>
    							</div>
    							<div id="FacebookLikes">
      								<div class="fb-like fb_edge_widget_with_comment fb_iframe_widget" data-href="https://www.facebook.com/<?PHP echo $nF['network_link']; ?>" data-send="false" data-width="225" data-show-faces="false" fb-xfbml-state="rendered">
										<span style="height: 28px; width: 225px;">
										</span>
									</div>
    							</div>
  							</div>
							<?PHP if(!empty($nT)){ ?>
  							<div id="TwitterBlock">
    							<a href="https://twitter.com/<?PHP echo $nT['network_link']; ?>" class="twitter-follow-button" data-show-count="false">Follow @<?PHP echo $nT['network_link']; ?></a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
  							</div>
							<?PHP } ?>
  							<div class="Bottom" style="background-image:url(<?PHP echo $template_path; ?>/images/general/box-bottom.gif);"></div>
						</div>
						<?PHP } ?>
						<?PHP if($config['site']['screenshot_page']){ ?>
  						<!-- screenshot theme box -->
  						<div id="ScreenshotBox" class="Themebox" style="background-image:url(<?PHP echo $template_path; ?>/images/themeboxes/screenshot/screenshotbox.gif);">
    						<a href="#">
      							<img id="ScreenshotContent" class="ThemeboxContent" src="images/screenshots/witch_thumb.gif" alt="Screenshot of the Day">
    						</a>
  							<div class="Bottom" style="background-image:url(<?PHP echo $template_path; ?>/images/general/box-bottom.gif);"></div>
  						</div>
						<?PHP } ?>
    					<!-- current poll theme box -->
						<?PHP
    						$time = time();
							$viewpoll = $db->query("SELECT * FROM `z_polls` where end > '$time' ORDER BY id DESC LIMIT 1");
							$polls = '';
							foreach($viewpoll as $p){
							$polls .= '<center>'.$p['question'].'</center>';
								if(isset($p['id'])){
								 echo '<div id="CurrentPollBox" class="Themebox" style="background-image:url('.$template_path.'/images/themeboxes/current-poll/currentpollbox.gif);">
								  <div id="CurrentPollText">'.$polls.'</div>
								  <a class="ThemeboxButton" href="' . internalLayoutLink('polls') . ($config['friendly_urls'] ? '/' : '&id=') . $p['id'] . '" onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" style="background-image:url('.$template_path.'/images/buttons/sbutton.gif);"><div class="BigButtonOver" style="background-image:url('.$template_path.'/images/buttons/sbutton_over.gif);"></div>
									<div class="ButtonText" style="background-image:url('.$template_path.'/images/buttons/_sbutton_votenow.gif);"></div>
								  </a>
								<div class="Bottom" style="background-image:url('.$template_path.'/images/general/box-bottom.gif);"></div>
								</div>';
								}
							}
							?>
						
						 <?php
							if($config['template_allow_change'])
								 echo '<br/><br/><br/><br/><br/><br/><br/><br/>
							 <font color="white">Template:</font><br/>' . template_form();
						 ?>
                	</div>
              	</div>
            </div>
		</div>
        <div id="Footer"><?php echo template_footer(); ?>
        	Copyright by CipSoft GmbH. All rights reserved.<br>
            <a href="#">About CipSoft</a> | 
			<a href="#">Service Agreement</a> | 
			<a href="#">Privacy Policy</a>
        </div>
	</div>
</div>
</div>
</div>
</div>
  
  <script type="text/javascript">
    // disable all control elements which are not part of the content container element
    if (g_Deactivated == true) {
      document.getElementById('LoginButtonContainer').style.zIndex = "1";
      document.getElementById('DeactivationContainer').style.display = "block";
      document.getElementById('DeactivationContainer').style.zIndex = "50";
      document.getElementById('DeactivationContainerThemebox').style.display = "block";
      document.getElementById('Monster').style.cursor = "auto";
      document.getElementById('PlayersOnline').style.cursor = "auto";
      document.getElementById('ThemeboxesColumn').style.opacity = "0.30";
      document.getElementById('ThemeboxesColumn').style.MozOpacity = "0.30";
      document.getElementById('ThemeboxesColumn').filters.alpha.opacity = "0.75";
      document.getElementById('ThemeboxesColumn').style.filter = "alpha(opacity=50); opacity: 0.30";
      document.getElementById('Monster').setAttribute("onclick", "")
      document.getElementById('PlayersOnline').setAttribute("onclick", "")
    }
  </script>
  	<div id="HelperDivContainer" style="background-image: url(<?PHP echo $template_path; ?>/images/content/scroll.gif);">
  		<div class="HelperDivArrow" style="background-image: url(<?PHP echo $template_path; ?>/images/content/helper-div-arrow.png);"></div>
  		<div id="HelperDivHeadline"></div>
  		<div id="HelperDivText"></div>
 		<center>
  			<img class="Ornament" src="<?PHP echo $template_path; ?>/images/content/ornament.gif">
  		</center>
  	<br>
	</div>
	<?php echo template_place_holder('body_end'); ?>
</body>
</html>
<?php
function logo_monster()
{
	global $config;
	return str_replace(" ", "", trim(mb_strtolower($config['logo_monster'])));
}
?>