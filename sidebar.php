	<div id="sidebar">
	  
	  <p><img style="padding-top:.75em" src="<?php echo get_bloginfo('home') . '/images/snowman2-100.jpg'; ?>" /></p>
	  <p>drdrang at gmail</p>
	  
	  <hr />
	  
	  <h1>Meta</h1>
	    <ul>
	      <li><a href="<?php echo get_bloginfo('home'); ?>/">Home page</a></li>
	      <li><a href="<?php echo bloginfo('rss2_url'); ?>">RSS feed</a></li>
	      <li><a href="http://www.twitter.com/drdrang">Twitter stream</a></li>
	      <li><a href="http://flickr.com/photos/drdrang">Flickr stream</a></li>
  	  </ul>
	  
	  <hr />
	  
	  <h1>Search</h1>
	  <?php include (TEMPLATEPATH . '/searchform.php'); ?><p></p>

	  <!-- <hr />
	         
	      <div id="twitter_div">
	      <h1><a href="http://www.twitter.com/drdrang">Twitter Updates</a></h1>
	      <ul id="twitter_update_list"></ul>
	      </div> -->
    
    <hr />
    
    <h1><a href="http://flickr.com/photos/drdrang">Flickr Updates</a></h1>
    <p><?php get_flickrRSS(); ?></p>
    
    <hr />
    
	  <h1>Tags</h1>
	  <p class="tag-cloud"><?php wp_tag_cloud('smallest=75&largest=150&unit=%&number=50'); ?></p>
	  
	  <hr />
	  
	  <h1>Popular posts</h1>
	    <ul>
	      <li><a href="<?php echo get_bloginfo('home') . '/2005/09/ical_to_hpda_printing/'; ?>">
                                    iCal to Hipster PDA printing</a></li>
                                    <li><a href="<?php echo get_bloginfo('home') . '/2005/08/ruler_card_for_hipster_pda/'; ?>">
                                    Ruler card for Hipster PDA</a></li>
                                    <li><a href="<?php echo get_bloginfo('home') . '/2005/08/hpda_temperature_conversion_ca/'; ?>">
                                    Temperature conversion card for Hipster PDA</a></li>
                                    <li><a href="<?php echo get_bloginfo('home') . '/2007/03/improved-currency-conversion-card/'; ?>">
                                    Improved currency conversion card for Hipster PDA</a></li>
                                    <li><a href="<?php echo get_bloginfo('home') . '/2009/07/improved-mac-screenshotupload-utility/'; ?>">
                                    Screenshot uploading utility</a></li>
                                    <li><a href="<?php echo get_bloginfo('home') . '/2005/08/address_labels/'; ?>">
                                    Printing address labels</a></li>
                                    <li><a href="<?php echo get_bloginfo('home') . '/2005/08/file_folder_labels/'; ?>">
                                    Printing file folder labels</a></li>
                                    <li><a href="<?php echo get_bloginfo('home') . '/2006/03/markdown_links_in_textmate_the/'; ?>">
                                    Markdown links in TextMate</a></li>
                                    <li><a href="<?php echo get_bloginfo('home') . '/2007/04/superduper-reports-with-geektool/'; ?>">SuperDuper! reports with GeekTool</a></li>
                                    <li><a href="<?php echo get_bloginfo('home') . '/2007/11/long_and_shortened_url_scripts/'; ?>">
                                    Automatic shortening of URLs</a></li>
                                    <li><a href="<?php echo get_bloginfo('home') . '/2008/02/leopard-screen-sharing-over-the-internet/'; ?>">
                                    Leopard screen sharing over the internet</a></li>
                                    <li><a href="<?php echo get_bloginfo('home') . '/2008/04/emacs-lisp-as-a-scripting-language/'; ?>">
                                    Emacs Lisp as a scripting language</a></li>
                                    <li><a href="<?php echo get_bloginfo('home') . '/2007/04/more-desktop-weather-with-geektool/'; ?>">
                                    Desktop weather with GeekTool</a></li>
                                    <li><a href="<?php echo get_bloginfo('home') . '/2008/09/latex-figure-captions/'; ?>">
                                    LaTeX figure captions</a></li>
                                    <li><a href="<?php echo get_bloginfo('home') . '/2009/08/camry-smart-key-battery-replacement/'; ?>">
                                    Camry smart key battery replacement</a></li>
                                    <li><a href="<?php echo get_bloginfo('home') . '/2008/04/time-practice-sheet-for-kids/'; ?>">
                                    Time practice sheets for kids</a></li>
                                    <li><a href="<?php echo get_bloginfo('home') . '/2009/09/math-practice-sheets/'; ?>">
                                    Math practice sheets for kids</a></li>
                                  </ul>
	  <hr />
	  
    <h1>Blogroll</h1>
      <h2>Computer</h2>
        <ul>
          <li><a href="http://daringfireball.net/">Daring Fireball</a></li>
          <li><a href="http://ihnatko.com">Andy Ihnatko’s CWOB</a></li>
          <li><a href="http://www.macosxhints.com">MacOSXHints</a></li>
          <li><a href="http://www.tidbits.com">TidBits</a></li>
          <li><a href="http://markelikalderon.com/blog/">Excursus</a></li>
          <li><a href="http://www.dragthing.com/blog/">Three Letter Acronym</a></li>
          <li><a href="http://www.libertypages.com/clarktech/">Clark's Tech Blog</a></li>
        </ul>
      <h2>Other</h2>
        <ul>
          <li><a href="http://www.43folders.com/">43 Folders</a></li>
          <li><a href="http://www.kk.org/cooltools/">Cool Tools</a></li>
          <li><a href="http://www.motherjones.com/kevin-drum/">Kevin Drum</a></li>
          <li><a href="http://tbogg.firedoglake.com">TBogg</a></li>
          <li><a href="http://crookedtimber.org">Crooked Timber</a></li>
          <li><a href="http://www.michaelberube.com/index.php">Michael Bérubé</a></li>
          <li><a href="http://scienceblogs.com/pharyngula/">Pharyngula</a></li>
        </ul>
	  
	  <hr />
	  
	  <p>This work is licensed under a 
    <a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution-Share Alike 3.0 Unported License</a>.</p>
    
    <hr />
    
	  <div class="credit"><a href="http://www.wordpress.org"><img src="<?php echo get_bloginfo('home') . '/images/wordpress-badge.png'; ?>"</a></div>
	  
	  <div class="credit"><a href="http://www.mathjax.org/">
      <img title="Powered by MathJax"
           src="http://www.mathjax.org/badge.gif"
           border="0" alt="Powered by MathJax" />
    </a></div>
	  
	    
  </div> <!-- sidebar -->
	  
	  
	  
	  