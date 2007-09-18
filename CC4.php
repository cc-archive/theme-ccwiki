<?php
/**
 * Creative Commons Skin
 *
 * @todo document
 * @package MediaWiki
 * @subpackage Skins
 */

if( !defined( 'MEDIAWIKI' ) )
	die();

/** */
require_once('includes/SkinTemplate.php');

/**
 * Inherit main code from SkinTemplate, set the CSS and template filter.
 * @todo document
 * @package MediaWiki
 * @subpackage Skins
 */
class SkinCC4 extends SkinTemplate {
	function initPage( &$out ) {
		SkinTemplate::initPage( $out );
		$this->skinname  = 'cc4';
		$this->stylename = 'cc4';
		$this->template  = 'CC4Template';
	}
}
	
class CC4Template extends QuickTemplate {
	/**
	 * Template filter callback for Springboard skin.
	 * Takes an associative array of data set from a SkinTemplate-based
	 * class, and a wrapper for MediaWiki's localization database, and
	 * outputs a formatted page.
	 *
	 * @access private
	 */
	function execute() {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php $this->text('lang') ?>" lang="<?php $this->text('lang') ?>" dir="<?php $this->text('dir') ?>">
  <head>
    <meta http-equiv="Content-Type" content="<?php $this->text('mimetype') ?>; charset=<?php $this->text('charset') ?>" />
    <?php $this->html('headlinks') ?>
    <title><?php $this->text('pagetitle') ?></title>
    <link rel="shortcut icon"
          href="<?php $this->text('stylepath') ?>/<?php $this->text('stylename') ?>/favicon.ico"
	  type="image/x-icon" />
    <style type="text/css" media="screen,projection">/*<![CDATA[*/ @import "<?php $this->text('stylepath') ?>/<?php $this->text('stylename') ?>/main.css"; /*]]>*/</style>
    <link rel="stylesheet" type="text/css" media="print" href="<?php $this->text('stylepath') ?>/common/commonPrint.css" />
    <style type="text/css" media="screen,projection">/*<![CDATA[*/ @import "<?php $this->text('stylepath') ?>/<?php $this->text('stylename') ?>/niftycorners.css"; /*]]>*/</style>
    <style type="text/css" media="screen,projection">/*<![CDATA[*/ @import "<?php $this->text('stylepath') ?>/<?php $this->text('stylename') ?>/niftycorners.css"; /*]]>*/</style>
    <style type="text/css" media="print">/*<![CDATA[*/ @import "<?php $this->text('stylepath') ?>/<?php $this->text('stylename') ?>/niftycorners-print.css"; /*]]>*/</style>

    <!--[if lt IE 5.5000]><style type="text/css">@import "<?php $this->text('stylepath') ?>/<?php $this->text('stylename') ?>/IE50Fixes.css";</style><![endif]-->
    <!--[if IE 5.5000]><style type="text/css">@import "<?php $this->text('stylepath') ?>/<?php $this->text('stylename') ?>/IE55Fixes.css";</style><![endif]-->
    <!--[if gte IE 6]><style type="text/css">@import "<?php $this->text('stylepath') ?>/<?php $this->text('stylename') ?>/IE60Fixes.css";</style><![endif]-->
    <!--[if IE]><script type="text/javascript" src="<?php $this->text('stylepath') ?>/common/IEFixes.js"></script>
    <meta http-equiv="imagetoolbar" content="no" /><![endif]-->
    <?php if($this->data['jsvarurl'  ]) { ?><script type="text/javascript" src="<?php $this->text('jsvarurl'  ) ?>"></script><?php } ?>
    <script type="text/javascript" src="<?php                                   $this->text('stylepath' ) ?>/common/wikibits.js"></script>
    <?php if($this->data['usercss'   ]) { ?><style type="text/css"><?php              $this->html('usercss'   ) ?></style><?php    } ?>
    <?php if($this->data['userjs'    ]) { ?><script type="text/javascript" src="<?php $this->text('userjs'    ) ?>"></script><?php } ?>
    <?php if($this->data['userjsprev']) { ?><script type="text/javascript"><?php      $this->html('userjsprev') ?></script><?php   } ?>
    
    <script type="text/javascript" src="<?php $this->text('stylepath') ?>/<?php $this->text('stylename') ?>/niftycorners.js"></script>
    <script type="text/javascript">
        window.onload=function(){
            if(!NiftyCheck())
                return;
            if (document.body.id) {
                /*
                bodytag = document.body.id;
                selecteditem = bodytag.split("-");
                toselect= "#"+bodytag+" #nav-"+selecteditem[1]+" span.nav-label";
                */
                //Rounded('#p-nav',"all","#f1fae0","#e8f3d4","smooth");
            }
        }
    </script>
  </head>
  <body <?php if($this->data['body_ondblclick']) { ?>ondblclick="<?php $this->text('body_ondblclick') ?>"<?php } ?>
        <?php if($this->data['nsclass'        ]) { ?>class="<?php      $this->text('nsclass')         ?>"<?php } ?>
        <?php echo ' id="page-'.htmlspecialchars(preg_replace("/( |:)/","",$this->data['title'])).'"'; ?>>
	<script type="text/javascript"> if (window.isMSIE55) fixalpha(); </script>
	<!-- HEADER -->
	<div id="header-wrapper">
      <div id="header-main">
        <span class="publish">
          <a href="http://creativecommons.org/license/" class="cc-actions">
            <span class="img">
              <img src="http://creativecommons.org/images/license-8.png" border="0" class="publish"/>
            </span> 
            <span class="option">License</span>Your Work
          </a>
        </span>
        <span class="find">
          <a href="http://search.creativecommons.org/" class="cc-actions">
            <span class="img">
              <img src="http://creativecommons.org/images/find-8.png" border="0"/>
            </span>
            <span class="option">Find</span>CC Licensed Work
          </a>
        </span>
        
       <span class="logo">
         <a href="<?php echo htmlspecialchars($this->data['nav_urls']['mainpage']['href'])?>">
           <span>
             <img src="/images/cc-title-8.png" alt="creative commons" id="cc-title" border="0"/>
           </span>
         </a>
       </span>
      </div>
    </div>
    <!-- END HEADER -->
<div id="globalWrapper">
	<!--<div id="header">
		<div id="header-tab">
			<a href="/Main_Page">
			<img src="<?php $this->text('stylepath') ?>/<?php $this->text('stylename') ?>/images/cc-title.png" border="0" /></a>
		</div>
		</div>
    -->
	<div id="wrapper"> 	<div id="wrapper-ie">
    <div id="main-content">
    <!-- LOGIN SECTION -->
	        <?php 
            $i="";
            $navlist="";

            foreach($this->data['personal_urls'] as $key => $item) {
                $i++;
                $navlist .= '<span id="pt-'.htmlspecialchars($key).'"><a href="'.htmlspecialchars($item['href']).'"';
                if(!empty($item['class'])) { 
                    $navlist .= ' class="'.htmlspecialchars($item['class']).'"'; 
                } 
                $navlist .= '>';
                $navlist .= htmlspecialchars($item['text']).'</a></span> ';
                if ($i < 2) $navlist .= ": ";
            }
           // Hack to work-around broken MediaWiki stuff... 
            
            if (!ereg("Special:Userlogin",$navlist) || (!$this->data['personal_urls'])) {
                $userLoggedIn = true;
            }
	        if ($userLoggedIn) {
	            echo '<div id="features">';
	            echo '<div class="portlet" id="p-personal">';
	            echo "Logged in as ";
	            echo '<ul><li>';
	            echo $navlist;
	            echo '</li></ul>';
	            echo '</div>';
	        ?>
        
	<div id="p-cactions" class="portlet">
      Views:
	  <ul>
	    <?php foreach($this->data['content_actions'] as $key => $action) {
	       ?><li id="ca-<?php echo htmlspecialchars($key) ?>"
	       <?php if($action['class']) { ?>class="<?php echo htmlspecialchars($action['class']) ?>"<?php } ?>
	       ><a href="<?php echo htmlspecialchars($action['href']) ?>"><?php
	       echo htmlspecialchars($action['text']) ?></a></li>
	    <?php } ?>
	  </ul>
	</div>
	<div class="portlet" id="p-tb">
      <?php $this->msg('toolbox') ?>:
	    <ul>
			<li><a href="http://wiki.creativecommons.org/Special:Recentchanges">Recent Changes</a></li>
				<!--
					in the array just  below, 
					may have to add before 'whatlinkshere' : 'recentchanges',
				-->
		  <?php if($this->data['notspecialpage']) { foreach( array( 'whatlinkshere', 'recentchangeslinked' ) as $special ) { ?>
		  <li id="t-<?php echo $special?>"><a href="<?php
		    echo htmlspecialchars($this->data['nav_urls'][$special]['href']) 
		    ?>"><?php echo $this->msg($special) ?></a></li>
		  <?php } } ?>
	      <?php if($this->data['feeds']) { ?><li id="feedlinks"><?php foreach($this->data['feeds'] as $key => $feed) {
	        ?><span id="feed-<?php echo htmlspecialchars($key) ?>"><a href="<?php
	        echo htmlspecialchars($feed['href']) ?>"><?php echo htmlspecialchars($feed['text'])?></a>&nbsp;</span>
	        <?php } ?></li>
	      <?php } ?>
	      <?php foreach( array('contributions', 'emailuser', 'upload', 'specialpages') as $special ) { ?>
	      	<?php if($this->data['nav_urls'][$special]) {?><li id="t-<?php echo $special ?>"><a href="<?php
	        echo htmlspecialchars($this->data['nav_urls'][$special]['href'])
	        ?>"><?php $this->msg($special) ?></a></li><?php } ?>
	      <?php } ?>
	    </ul>
	</div>
       
	<?php if( $this->data['language_urls'] ) { ?><div id="p-lang" class="portlet">
	  <h5><?php $this->msg('otherlanguages') ?></h5>
	  <div class="pBody">
	    <ul>
	      <?php foreach($this->data['language_urls'] as $langlink) { ?>
	      <li>
	      <a href="<?php echo htmlspecialchars($langlink['href'])
	        ?>"><?php echo $langlink['text'] ?></a>
	      </li>
		  <?php } ?>
	    </ul>
	  </div>
      </div>
      
      <?php 
          } 
          echo '</div>';
       
    ?>
	<!-- BEGIN when user is logged in, use "blog"-->
	<div id="blog">
	  <?php if($this->data['sitenotice']) { ?><div id="siteNotice"><?php $this->html('sitenotice') ?></div><?php } ?>
	  <?php
          if ($this->data['title'] != 'Main Page') {
              echo '<h1 class="firstHeading">'.htmlspecialchars($this->data['title']).'</h1>';
          }
      ?>
	  <div id="bodyContent">
	    <h3 id="siteSub"><?php $this->msg('tagline') ?></h3>
	    <div id="contentSub"><?php $this->html('subtitle') ?></div>
	    <?php if($this->data['undelete']) { ?><div id="contentSub"><?php     $this->html('undelete') ?></div><?php } ?>
	    <?php if($this->data['newtalk'] ) { ?><div class="usermessage"><?php $this->html('newtalk')  ?></div><?php } ?>
	    <!-- start content -->
	    <?php $this->html('bodytext') ?>
	    <?php if($this->data['catlinks']) { ?><div id="catlinks"><?php       $this->html('catlinks') ?></div><?php } ?>
	    <!-- end content -->
	    <div class="visualClear"></div>
	  </div>
	</div>
	<!-- OTHERWISE use "page"-->
	      <?php } else { ?>

	 <div id="page">
	  <?php if($this->data['sitenotice']) { ?><div id="siteNotice"><?php $this->html('sitenotice') ?></div><?php } ?>
	  <?php
          if ($this->data['title'] != 'Main Page') {
              echo '<h1 class="firstHeading">'.htmlspecialchars($this->data['title']).'</h1>';
          }
      ?>
	  <div id="bodyContent">
	    <h3 id="siteSub"><?php $this->msg('tagline') ?></h3>
	    <div id="contentSub"><?php $this->html('subtitle') ?></div>
	    <?php if($this->data['undelete']) { ?><div id="contentSub"><?php     $this->html('undelete') ?></div><?php } ?>
	    <?php if($this->data['newtalk'] ) { ?><div class="usermessage"><?php $this->html('newtalk')  ?></div><?php } ?>
	    <!-- start content -->
	    <?php $this->html('bodytext') ?>
	    <?php if($this->data['catlinks']) { ?><div id="catlinks"><?php       $this->html('catlinks') ?></div><?php } ?>
	    <!-- end content -->
	    <div class="visualClear"></div>
	  </div>
	</div>
	<?php } ?>  <!-- END LOGIN SECTION -->
	</div> <!-- end main-content -->
	
	
				<div id="sidebar">
				<ul class="nav">
				  	<li><a href="/">Home</a></li>
					<li><a href="/Frequently_Asked_Questions">FAQ</a></li>
		 			<li><a href="/CcWiki:About">About</a></li>
		 			<li><a href="/Developer">Developers</a></li>
		 			<li><a href="http://creativecommons.org/">creativecommons.org</a></li> 
					<li><a href="http://creativecommons.org/find/">Find Content</a></li>
					<li><a href="http://creativecommons.org/license/">License Content</a></li>
					<li><a href="http://creativecommons.org/worldwide/">Worldwide</a></li>
 				</ul>
					<h4>The Commons</h4>
					<ul> 
					  <li><img src="<?php $this->text('stylepath') ?>/<?php $this->text('stylename') ?>/images/sc.png"/> <a href="http://sciencecommons.org">Science Commons</a></li>
					  <li><img src="<?php $this->text('stylepath') ?>/<?php $this->text('stylename') ?>/images/ic.png"/> <a href="http://icommons.org">iCommons</a></li>
					  <li><img src="<?php $this->text('stylepath') ?>/<?php $this->text('stylename') ?>/images/cci.png"/> <a href="http://creativecommons.org/worldwide">ccInternational</a></li>
					  <li><img src="<?php $this->text('stylepath') ?>/<?php $this->text('stylename') ?>/images/labs.png"/> <a href="http://labs.creativecommons.org">ccLabs</a></li>
					  <li><img src="<?php $this->text('stylepath') ?>/<?php $this->text('stylename') ?>/images/mix.png"/> <a href="http://ccmixter.org">ccMixter</a></li>
					</ul>
			</div>

  <div id="footer">
  
  <div id="cc"><a rel="license" title="This wiki is licensed to the public under the Creative Commons Attribution 2.5 License" href="http://creativecommons.org/licenses/by/2.5/"><img src="http://creativecommons.org/images/public/somerights20.png"  border="0" alt="Some Rights Reserved"/></a> </div>
 <div id="mw"><a href="http://www.mediawiki.org/"><img src="<?php $this->text('stylepath') ?>/<?php $this->text('stylename') ?>/images/mediawiki.png" border="0" alt=""/></a></div>
 
 
	<div id="p-search" class="portlet">
	  <div class="pBody">
	    <form name="searchform" action="<?php $this->text('searchaction') ?>" id="searchform">
        <!--<label for="searchInput"><?php $this->msg('search') ?></label>-->
	      <input id="searchInput" name="search" type="text"
	        <?php if($this->haveMsg('accesskey-search')) {
	          ?>accesskey="<?php $this->msg('accesskey-search') ?>"<?php }
	        if( isset( $this->data['search'] ) ) {
	          ?> value="<?php $this->text('search') ?>"<?php } ?> />
	      <input type='submit' name="go" class="searchButton" id="searchGoButton"
	        value="<?php $this->msg('search') ?>" /> 
                  <!--
                <input type='submit' name="fulltext"
	        class="searchButton"
	        value="<?php $this->msg('search') ?>" />
                -->
	    </form>
	  </div>
	</div>
      <?php if(!$userLoggedIn) { 
	      if ($this->data['personal_urls']['login']) {
		      $loginvar="login";
	      } else {
		      $loginvar="anonlogin";
	      }
              echo '<div id="f-login"><a href="'.htmlspecialchars($this->data['personal_urls'][$loginvar]['href']).'">'.
              htmlspecialchars($this->data['personal_urls'][$loginvar]['text']).'</a>'.'</div>';
              echo '<div id="f-login"><p style="background: url(http://www.openid.net/login-bg.gif) no-repeat 4px 40%; color: #000; border: 1px solid #ccc; margin-left: auto; margin-right: auto; padding: 0.4em 0 0.4em 25px; width: 21em">You can also <a href="/Special:OpenIDLogin">log in using your OpenID</a>.</p></div>';
              //print_r($this->data['personal_urls'][$loginvar]);
		}
      ?>
	<?php /*if($this->data['copyrightico']) { ?><div id="f-copyrightico"><?php $this->html('copyrightico') ?></div><?php } */?>
	<div id="f-list">
	  <?php if($this->data['lastmod'   ]) { ?><div id="f-lastmod"><?php    $this->html('lastmod')    ?></div><?php } ?>
	  <?php if($this->data['viewcount' ] && $userLoggedIn) { ?><div id="f-viewcount"><?php  $this->html('viewcount')  ?></div><?php } ?>
	  <?php if($this->data['credits'   ]) { ?><div id="f-credits"><?php    $this->html('credits')    ?></div><?php } ?>
	  <?php if($this->data['copyright' ]) { ?><div id="f-copyright"><?php  $this->html('copyright')  ?></div><?php } ?>
	  <?php /*if($this->data['disclaimer']) { ?><div id="f-disclaimer"><?php $this->html('disclaimer') ?></div><?php }*/ ?>
	  <?php if($this->data['about'     ]) { ?><div id="f-about"><?php      $this->html('about')      ?></div><?php } ?>
          </div>
      </div> <!-- end footer -->
      </div> <!-- end wrapper-ie -->
      </div> <!-- end wrapper -->
    </div>
    <?php $this->html('reporttime') ?>

<script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>
<script type="text/javascript">_uacct = "UA-2010376-5"; urchinTracker();</script>
</body>
</html>
<?php
	}
}

?>
