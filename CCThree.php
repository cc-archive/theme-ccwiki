<?php
/**
 * See skin.txt
 *
 * @todo document
 * @addtogroup Skins
 */

if( !defined( 'MEDIAWIKI' ) )
	die( -1 );

/** */
//require_once( dirname(__FILE__) . '/MonoBook.php' );
require_once('includes/SkinTemplate.php');


class SkinCCThree extends SkinTemplate {
	function initPage( &$out ) {
		SkinTemplate::initPage( $out );
		$this->skinname  = 'ccthree';
		$this->stylename = 'ccthree';
		$this->template  = 'CCThreeTemplate';
	}

}

class CCThreeTemplate extends QuickTemplate {

	function execute () {
		?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
 <head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <title><?php $this->text('pagetitle') ?></title>
  <meta name="generator" content="MediaWiki " />
  <meta name="keywords" content="creative commons, commons, free culture, open source, attribution, non-commercial, share-alike, no derivatives, lessig" />
  <meta name="description" content="Creative Commons licenses provide a flexible range of protections and freedoms for authors, artists, and educators." />
  
  <style type="text/css">
    @import "http://creativecommons.org/includes/style.css";
  </style>
 </head>
 <body onload="">
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
        
        <span class="logo"><a href="<?php echo htmlspecialchars($this->data['nav_urls']['mainpage']['href'])?>"><span><img src="http://creativecommons.org/images/cc-title-8.png" alt="creative commons" id="cc-title" border="0"/></span></a></span>
      </div>
    </div>


    <div id="wrapper"><div id="wrapper-ie">
    
    <div class="jurisdictions">
      <h4><a href="/sitemap">Search Site</a>&nbsp;&nbsp;&nbsp;&nbsp;</h4><strong>|</strong>&nbsp;&nbsp;&nbsp;&nbsp;
      <h4><a href="/worldwide">Worldwide</a>&nbsp;</h4>
      <select name="sortby" onchange="orderby(this)">
        <option value="">Select a jurisdiction</option>
        <script type="text/javascript" src="/includes/jurisdictions.js"></script>
      </select>
    </div>
    <div class="clear">&nbsp;</div>
<!-- content -->


    <div id="body">
      <div id="splash">
        <h1>
         <?php $this->data['displaytitle']!=""?$this->html('title'):$this->text('title') ?>
        </h1>
        <div id="splash-menu">
          
        </div>
      </div>

      <div id="content">
        <div id="main-content">
          <div id="page">
            <div class="post">
             <!-- start content -->
			 <?php $this->html('bodytext') ?>
			 <?php if($this->data['catlinks']) { ?>
			 	<div id="catlinks"><?php $this->html('catlinks') ?></div>
			 <?php } ?>
			 <!-- end content -->
            </div>
          </div>
        </div>  
        
        

<!-- sidebar -->
<div id="sidebar">
<ul class="nav">
  <li><a href="/">Home</a></li>
  <li><a href="/weblog/">Weblog</a></li>
  <li><a href="/faq/">FAQ</a></li>

</ul>
<br/>
<h4>Explore</h4>
<ul>

</ul>
<br/>
<h4>The Commons</h4>
<ul>
  <li><img src="/images/commons/sc.png"/> <a href="http://sciencecommons.org">Science Commons</a></li>
  <li><img src="/images/commons/ic.png"/> <a href="http://icommons.org">iCommons</a></li>
  <li><img src="/images/commons/cci.png"/> <a href="http://creativecommons.org/worldwide">ccInternational</a></li>
  <li><img src="/images/commons/labs.png"/> <a href="http://labs.creativecommons.org">ccLabs</a></li>
  <li><img src="/images/commons/mix.png"/> <a href="http://ccmixter.org">ccMixter</a></li>
</ul>

</div>

<!-- footer -->
      </div>
      <div class="clear">&nbsp;</div>
    </div>
    </div></div>
    <div id="footer">
      <div id="sub-footer">
        <div class="ccExtras">
          <h2><a href="http://wiki.creativecommons.org/Tools">Tools</a></h2>
          Publish from your desktop, browse with mozCC, and more...
        </div>
        <div class="ccExtras">
          <h2><a href="http://wiki.creativecommons.org/Developers">Developers</a></h2>
          Help put Creative Commons into your applications.
        </div>
        <div class="ccExtras">
          <h2><a href="http://creativecommons.org/discuss">Discuss</a></h2>
          Join our discussion lists. Read and contribute to our <a href="http://wiki.creativecommons.org/">wiki</a>.
        </div>
        <div class="ccExtras">
          <h2><a href="http://wiki.creativecommons.org/Events">Events</a></h2>
          Join us at the next Creative Commons event.
        </div>
        <div class="ccExtras">
          <h2><a href="/featured-projects">Featured Projects</a></h2>
          Read about people and projects that use CC.
        </div> 
        <div class="clear">&nbsp;</div>
      </div>
      <p>
<a rel="license" href="http://creativecommons.org/licenses/by/3.0/"><img src="http://i.creativecommons.org/l/by/3.0/88x31.png" alt="Creative Commons License" style="border: medium none ;" height="31" width="88"></a><br>
Except where otherwise <a class="subfoot" href="/policies#license">noted</a>, content on this site is<br/>
licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/3.0/" class="subfoot">Creative Commons Attribution 3.0 License</a>
      <p>
    </div>
  </div>
</body>
</html>
		<?php
	}
}

?>

