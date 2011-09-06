<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss2_url'); ?>" />
    <!-- <link rel="alternate" type="application/rss+xml" title="Atom" href="<?php bloginfo('atom_url'); ?>" />
    <link rel="alternate" type="application/rss+xml" title="Without tweets (RSS 2.0)" href="http://pipes.yahoo.com/pipes/pipe.run?_id=42c49e49008e4f6f5417b7ffeba68a13&_render=rss" />
        <link rel="alternate" type="application/rss+xml" title="Without tweets (Atom)" href="http://pipes.yahoo.com/pipes/pipe.run?_id=50f853fc58b345a67fdd3dec20093dce&_render=rss" /> -->
    <link rel="icon" type="image/png" href="/all-this/wp-content/themes/drang/snowman16.png" mce_href="/all-this/wp-content/themes/drang/snowman16.png" />
    <!-- <script type="text/javascript" src="/jsMath/easy/load.js"></script> -->
    <script type="text/javascript" src="/MathJax/MathJax.js"></script>
    <script type="text/javascript" src="/all-this/wp-content/themes/drang/highlight.pack.js"></script>
    <script type="text/javascript" src="/all-this/wp-content/themes/drang/styleCode.js"></script>
     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
     <script type="text/javascript" src="/all-this/wp-content/themes/drang/footnote-popup.js"></script>
    <script type="text/javascript">
    if (top !== self && document.referrer.match(/digg\.com\/\w{1,8}/)) {
      top.location.replace(self.location.href);
    }
    </script>
    <title><?php
    if (is_single()){the_title(); echo ' - All this';}
    elseif (is_tag()) {single_tag_title('Posts tagged \''); echo '\' - All this';}
    elseif (is_search()) {echo 'Search results for \''; the_search_query(); echo '\' - All this';}
    else {bloginfo('name');}
    ?></title>
    <?php wp_head(); ?> 
  </head>
  <body onload="styleCode()">
    <div id="container">

      <div id="header">
        <img src="/all-this/wp-content/themes/drang/snowman-200.jpg" />
        <h1><a href="/all-this/">And now it’s all this</a></h1>
        <h2>I just said what I said and it was wrong. Or was taken wrong.</h2>
      </div> <!-- header -->
  

