
<?php 

function getOrientation( $imageSrc ) {

$imageSrc = $dom->getElementsByTagName('img');

    foreach ($imageSrc as $image) {

        // get the widths of each image
        $width = $image->imagesx;

        $height = $image->imagesy;


        // the existing classes already on the images
        $existing_classes = $image->getAttribute('class');

        // the class we're adding
        $landscape_class = 'landscape';
    	$portrait_class = 'portrait';

        // if image is less than 480px, add their old classes back in plus our new class
        if( $width > $height) {
            $image->setAttribute('class', $portrait_class . $existing_classes);
        }
        else {
            $image->setAttribute('class', $landscape_class . $existing_classes);
        }
    }

}

?>
