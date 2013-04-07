
<?php 

function getOrientation( $imageSrc ) {


    // get the widths of each image
    $width = $imageSrc->imagesx;
    $height = $imageSrc->imagesy;


    // the existing classes already on the images
    $existing_classes = $imageSrc->getAttribute('class');

    // the class we're adding
    $landscape_class = 'landscape';
  	$portrait_class = 'portrait';

    // if image is less than 480px, add their old classes back in plus our new class
    if( $width > $height) {
        $imageSrc->setAttribute('class', $portrait_class . $existing_classes);
    }
    else {
        $imageSrc->setAttribute('class', $landscape_class . $existing_classes);
    }
    
}

?>
