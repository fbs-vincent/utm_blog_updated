<?php 

add_shortcode( 'sidebar', 'sidebar_profile');
function sidebar_profile($atts, $content) {  
    $option = shortcode_atts(array(
        'prof_image' => '',
        'body' => '', 
        ),
     $atts);
    
     $output = '
     <div class="blog__sidebar__profile">
         
              <div class="blog__sidebar__profile__img">
                <img src="'.$option['prof_image'].'" alt="" />
              </div>
              <div class="blog__sidebar__profile__content">
                <p>
                '.$option['body'] .'
                </p>
                <a class="btn btn--primary" href="./contact">connect with me</a>
              </div>
            </div>
     
     ';
     return $output;  
}