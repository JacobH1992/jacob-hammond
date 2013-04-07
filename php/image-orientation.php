
<?php 

function getOrientation($imageSrc) {


    // get the width of image
    $width = $imageSrc->imagesx;
    $height = $imageSrc->imagesy;

    // the class we're adding
    $landscape_class = 'landscape';
  	$portrait_class = 'portrait';

    // if image is landscape or portrait add class name accordingly 
    if( $imageSrc->$width > $imageSrc->$height) {
        return $landscape_class;
    }
    else {
        return $portrait_class;
    }
    
}

?>
