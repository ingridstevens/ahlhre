<?php

$caption_head = $data['_carousel_head'];
$caption_p = $data['_carousel_p'];

$images = $data['_carousel_image'];
// print_r($data);

if ($i == 0) {
    $active = 'active';
}
else {
    $active = '';
}
echo '<div class="item ', $active, '">';
    foreach ($images as $image){
        $carousel_image = wp_get_attachment_image($image, carousel);
        echo $carousel_image;
    }
echo '<div class="carousel-caption">';

echo '<h3>',$caption_head,'</h3>';
echo '<p>',$caption_p,'</p>';

echo '</div>';
echo '</div>';

?>
