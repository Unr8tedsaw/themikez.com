<?php
echo "Hellow World";
//the_post();

//the_ID();
$categories = get_cat_name(get_the_ID());
var_dump($categories);


//get_template_part( 'content-page' );
?>
