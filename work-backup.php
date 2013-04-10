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
              


          <div class="image-title"><h3><?= $title; ?></h3></div>

              <div class="imagebox">  

                <a href="<?= $image; ?>"><img src="images/preloader.png" data-original="<?= $thumb; ?>" class="<?= $orientation ?> lazy" rel="group" alt="<?= $title; ?>"/></a>

          </div>

            <?php endforeach;
        ?> 

	  </div>   





/*.imagebox-wrapper
{
  width: 100%;
  overflow: auto;
  @include hover-fade-normal;
}

.imagebox-position
{
  margin-left: -1%;
}

.imagebox
{
  width: 15.666%;
  padding-bottom: 15.666%;
  margin: 0 0 1% 1%;
  float: left;
  position: relative;
  overflow: hidden;
  @include hover-fade-normal;
  @include border-radius-full;
}

.imagebox:hover
{
   @include hover-shrink;
   opacity: 0.8;
   filter: alpha(opacity = 80);
}

.imagebox img
{
  position: absolute;
}
  .imagebox img:hover
  {
   zoom: 1;
  }*/    