<?php 

//  kontrola jadra 
if(!defined('_core')) die; 

// funkce pluginu 
function _twitterShare($args) 
{ 
 $args['output'] .= "<a href='https://twitter.com/share' class='twitter-share-button'>Tweet</a>
 <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='//platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','twitter-wjs');</script>";
}
// registrace pluginu  
_extend('reg', 'article.comments', '_twitterShare');