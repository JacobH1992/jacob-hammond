<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="The portfolio of multimedia designer Jacob Hammond (ChubbaART). Featuring digital art, website design, 3d modelling and animation, graphic design, photography and even more."/>

<meta name="author" content="Jacob Hammond"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

<title>Jacob Hammond | Multimedia Designer</title>


<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/normalize.css" type="text/css" media="screen" />

<link rel="shortcut icon" href="images/favicon.ico">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,600,700' rel='stylesheet' type='text/css'>

</head>
<!--[if lt IE 10]>
<style>
#nav{width:420px;}

article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
  display: block;

<script type="text/javascript" src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>

}
</style>
<![endif]-->

<!--[if lt IE 8]>
<style>

#ie-message{display:block; margin-left: -30px;}
.content-box-wrapper{ width:49%; }
.content-box{ width:100%; }
}
</style>
<div id="ie-message">
	<div id="ie-message-text">
		<p style="font-weight:800; font-size:2em">You are viewing this website using Internet Explorer 7.</p><p>This website may not display correctly in Internet Explorer 7 and is best viewed using Chrome, Firefox or Internet Explorer 9+.</p><p>Please come back using one of these browsers or visit my blog instead:</p><br/>
		<a style="font-size:2em;" href="http://chubbaart.tumblr.com/">chubbaart.tumblr.com</a><br/><br/><div class="peek"><a href="#">Look anyway -></a></div>
	</div>
</div>
<![endif]-->

<body>

<div id="main-wrapper">

<header>

	<a href="index.html">
			<h1 id="logo">JH</h1>
	</a>
	
	<div id="nav">
		<ul>
			<li>WORK</li>
			<li>ABOUT</li>
			<li>CONTACT</li>
		</ul>
	</div>	

</header>	



<div class="clear"></div>



<div id="content-wrapper">

    <div class="top-msg">
        <h2>THE WORK OF<br/><span>JACOB HAMMOND</span><br /></h2>
    </div>

    <div class="imagebox-wrapper">

      <div class="imagebox-position">

        <?php
	    	include 'php/image-orientation.php';
            
            $webDesign = simplexml_load_file('http://backend.deviantart.com/rss.xml?q=gallery:ChubbaART/43022466');
            $channel = $webDesign->channel;

               foreach($channel->item as $item):
                    $title = $item->title;
                    $url   = $item->link;
                    $date  = $item->pubDate;
                    $description = $item->children('media', true)->description;
                    $thumb = $item->children('media', true)->thumbnail->{1}->attributes()->url;
                    $image = $item->children('media', true)->content->attributes()->url;
 	                  $orientation = getOrientation($image);

                    /*$description = preg_replace('/[\-]+$/','<li>',$description);  // strip off "-" and replace with "<li>" 
                    $description = preg_replace('/[\<br/>]+$/','</li>',$description);  // strip off "</br>" and replace with "</li>" 

                        the [] match whatever's between them by the looks of it
                        also, problem with that is, all the <br/>s will be replaced
                        not just the ones you want

                        you need to match ...
                        - ANY TEXT HERE<br />
                        so a string that starts with "- " and ends with "<br/>"
                        ignore preg_replace for the time being
                        i think there's preg_match as well
                        which will return an array of matches
                        that'll be good.
                        so you'll have
                        1. string before the bullet points
                        2. array of matches
                        3. string after the bullet points
                        then just concat them all together at the end 
                        */

              ?>
              

          <!-- <div class="image-title"><h3><?= $title; ?></h3></div>

              <div class="imagebox">  

                <a href="<?= $image; ?>"><img src="images/preloader.png" data-original="<?= $thumb; ?>" class="<?= $orientation ?> lazy" rel="group" alt="<?= $title; ?>"/></a>

              </div>-->


            <div class="image-title"><h3><?= $title; ?></h3></div>
            <div class="clear"></div>
            <div class="image-image"><img src="images/preloader.png" data-original="<?= $image; ?>" class="lazy" alt="<?= $title; ?>"</div>
            <div class="clear"></div>
            <div class="image-description"><p><?= $description; ?></p></div>

            <?php endforeach;
        ?> 

	  </div>    
    
  </div>

<div class="clear"></div>
	
</div>

</div>
</body>



<script src="js/jquery-1.9.1.min.js" charset="utf-8"></script>
<script src="js/modernizr.custom.js" charset="utf-8"></script>
<script src="js/jqeury-functions.js" charset="utf-8"></script>

<script src="js/jquery.lazyload.js" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
    $(function() {          
        $("img.lazy").show().lazyload({
            effect      : "fadeIn",
            failurelimit : 0
        });
  	});
   
</script>

<!-- Force HD quality on YouTube videos) -->
<script type="text/javascript" src="http://www.youtube.com/iframe_api"></script>

<!-- GOOGLE ANALYTICS -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37082315-1']);
  _gaq.push(['_setDomainName', 'jacobhammond.co.uk']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</html>