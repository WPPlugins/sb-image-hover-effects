<?php

// Register Shortcode
function sihe_effects_shortcode($atts) {
    extract(shortcode_atts(array(
        'id' => '',
                    ), $atts));


    $q = new WP_Query(
            array('posts_per_page' => -1, 'post_type' => 'sihe-hov', 'p' => $id)
    );

    while ($q->have_posts()) : $q->the_post();
        $id = get_the_ID();
       
        $sihe_meta = vp_metabox('sihe_meta.style', false);
        $style = vp_metabox('sihe_meta.effectscustom.0.style', false);
	$style_effect = vp_metabox('sihe_meta.effectscustom.0.style_effect', false);
        $animation = vp_metabox('sihe_meta.effectscustom.0.animation', false);
	$table = vp_metabox('sihe_meta.effectscustom.0.table', false);
        $pic_size = vp_metabox('sihe_meta.effectscustom.0.pic_size', false);
       
       
         
        
        $i = 0;
         $output = '<div class="main-wrapper sihe-container" ><style>.sihe-circle a .hover-img:before{    box-shadow: 0 0 0 '.$bordershadow.'px rgba(255, 255, 255, 0.6) inset, 0 1px 2px rgba(0, 0, 0, 0.3);} .hover-img-cycle:before{   box-shadow: inset 0 0 0 '.$bordershadow.'px rgba(255,255,255,0.6), 0 1px 2px rgba(0,0,0,0.3);   }</style> <div class="sihe-row" style="margin: 20px auto;">   ';
        foreach ($sihe_meta as $info) {
       
       
       if ($style == circle and $style_effect == effect1) {
             $output .= '  
                <div class="sihe-map" style="margin: 20px auto;">
                   <div class="' . $table . '">
                         <div class="sihe-hover sihe-circle sihe-circle-effect-1 ' . $animation . '" style="width:' . $pic_size . 'px; height:' . $pic_size . 'px;">
                                    <a target=" " href="' . $info[sihe_url] . '"> 
                                        <div class="hover-img hover-img-cycle">
                                            <img src="' . $info[sihe_upload] . '" alt="img">
                                        </div>
                                        <div class="sihe-info-circle " style=" background-color: ;">
                                            <h3 style="color:font-family:   ;font-family:  ;font-size:18px; padding:10% 0 0 0;">' . $info[sihe_title] . '</h3>
                                            <p style="color:;font-family:  font-size:14px;border-top:!important;">' . $info[sihe_descr] . '</p>
                                        </div>
                                    </a>
                          </div>
                    </div>
            </div>
                               ';
            }
                else if ($style == circle and $style_effect == effect2) {
                $output .= '  

                            <div class="' . $table . '">
                                    <div class="sihe-map" style="margin: 20px auto;">

                                        <div class="sihe-hover sihe-circle sihe-circle-effect2 ' . $animation . '" style="width:' . $pic_size . 'px; height:' . $pic_size . 'px;">
                                            <a target=" " href="' . $info[sihe_url] . '">

                                                <div class="hover-img hover-img-cycle">
                                                    <img src="' . $info[sihe_upload] . '" alt="img">
                                                </div>
                                                <div class="sihe-info-circle " style=" background-color: ;" >
                                                    <h3 style="color: ;font-family:  ;font-size:18px; padding:10% 0 0 0;">' . $info[sihe_title] . '</h3>
                                                    <p style="color:;font-family:  ;font-size:14px;border-top:!important;">' . $info[sihe_descr] . '</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div> 
                               ';
            }
           else if ($style == circle and $style_effect == effect3) {
                $output .= '  

                              <div class="' . $table . '">
                                    <div class="sihe-map" style="margin: 20px auto;">

                                        <div class="sihe-hover sihe-circle sihe-circle-effect-3" style="width:' . $pic_size . 'px; height:' . $pic_size . 'px;">

                                            <a target=" " href="' . $info[sihe_url] . '">
                                                <div class="hover-img hover-img-cycle">
                                                    <img src="' . $info[sihe_upload] . '">
                                                </div>
                                                <div class="sihe-info-circle " style=" background-color: ;" >
                                                    <h3 style="color: ;font-family:  ;font-size:18px; padding:10% 0 0 0;">' . $info[sihe_title] . '</h3>
                                                    <p style="color: font-family:  ;;font-size:14px;border-top:!important;">' . $info[sihe_descr] . '</p>

                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div> 
                               ';
            }
           else if ($style == circle and $style_effect == effect4) {
                $output .= '  

                               <div class="' . $table . '">
                                    <div class="sihe-map" style="margin: 20px auto;">

                                        <div class="sihe-hover sihe-circle sihe-circle-effect-4 sihe-right-to-left" style="width:' . $pic_size . 'px; height:' . $pic_size . 'px;">
                                            <a target=" " href="' . $info[sihe_url] . '">

                                                <div class="hover-img hover-img-cycle">
                                                    <img src="' . $info[sihe_upload] . '">
                                                </div>
                                                <div class="sihe-info-circle " style=" background-color: ;">
                                                    <h3 style="color: ;font-family:  ;font-size:18px; padding:10% 0 0 0;">' . $info[sihe_title] . '</h3>
                                                    <p style="color:;font-family:  ;font-size:14px;border-top:!important;">' . $info[sihe_descr] . '</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div> 
                               ';
            }
           else if ($style == circle and $style_effect == effect5) {
                $output .= '  

                            <div class="' . $table . '">
                                    <div class="sihe-map" style="margin: 20px auto;">

                                        <div class="sihe-hover sihe-circle sihe-circle-effect-5 sihe-top-to-bottom"  style="width:' . $pic_size . 'px; height:' . $pic_size . 'px;">
                                            <a target=" " href="' . $info[sihe_url] . '">
                                                <div class="hover-img hover-img-cycle">
                                                    <img src="' . $info[sihe_upload] . '">
                                                </div>
                                                <div class="sihe-info-circle ">
                                                    <h3 style="color: ;font-family:  ;font-size:18px; padding:10% 0 0 0;">' . $info[sihe_title] . '</h3>
                                                    <p style="color:;font-family:  ;font-size:14px;border-top:!important;">' . $info[sihe_descr] . '</p>

                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div> 
                               ';
            }
           else if ($style == circle and $style_effect == effect6) {
                $output .= '  

                              <div class="' . $table . '">
                                    <div class="sihe-hover sihe-circle sihe-circle-effect-6 ' . $animation . '"  style="width:' . $pic_size . 'px; height:' . $pic_size . 'px;">
                                        <a  target=" " href="' . $info[sihe_url] . '">
                                            <div class="hover-img-1 hover-img-cycle">
                                                <img src="' . $info[sihe_upload] . '" alt="img">
                                            </div>
                                            <div class="sihe-info-circle ">
                                                <h3 style="color: ;font-family:  ;font-size:18px; padding:10% 0 0 0;">' . $info[sihe_title] . '</h3>
                                                <p style="color:;font-family:  ;font-size:14px;border-top:!important;">' . $info[sihe_descr] . '</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                               ';
            }
           else if ($style == circle and $style_effect == effect7) {
                $output .= '  

                                <div class="' . $table . '">
                                    <div class="sihe-hover sihe-circle sihe-circle-effect-7 sihe-left-to-right"  style="width:' . $pic_size . 'px; height:' . $pic_size . 'px;">
                                        <a  target=" " href="' . $info[sihe_url] . '">
                                            <div class="hover-img hover-img-cycle">
                                                <img src="' . $info[sihe_upload] . '" alt="img"></div>
                                            <div class="sihe-info-circle ">
                                                <h3 style="color: ;font-family:  ;font-size:18px; padding:10% 0 0 0;">' . $info[sihe_title] . '</h3>
                                                <p style="color:;font-family:  ;font-size:14px;border-top:!important;">' . $info[sihe_descr] . '</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                               ';
            }
           else if ($style == circle and $style_effect == effect8) {
                $output .= '  

                               <div class="' . $table . '">
                                    <div class="sihe-hover sihe-circle sihe-circle-effect-8" style="width:' . $pic_size . 'px; height:' . $pic_size . 'px;">
                                        <a  target=" " href="' . $info[sihe_url] . '"> 
                                            <div class="hover-img-2">
                                                <img src="' . $info[sihe_upload] . '" alt="img">
                                            </div>
                                            <div class="sihe-info-circle">
                                                <div class="sihe-info-circle-back ">
                                                    <h3 style="color: ;font-family:  ;font-size:18px; padding:10% 0 0 0;">' . $info[sihe_title] . '</h3>
                                                    <p style="color:;font-family:  ;font-size:14px;border-top:!important;">' . $info[sihe_descr] . '</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                               ';
            }
           else if ($style == circle and $style_effect == effect9) {
                $output .= '  
                                 <div class="' . $table . '">
                                    <div class="sihe-hover sihe-circle sihe-circle-effect-9 sihe-scale-up" style="width:' . $pic_size . 'px; height:' . $pic_size . 'px;">
                                        <a  target=" " href="' . $info[sihe_url] . '"> 
                                            <div class="hover-img hover-img-cycle">
                                                <img src="' . $info[sihe_upload] . '" alt="img">
                                            </div>
                                            <div class="sihe-info-circle-1 ">
                                                <h3 style="color: ;font-family:  ;font-size:18px; padding:10% 0 0 0;">' . $info[sihe_title] . '</h3>
                                                <p style="color:;font-family:  ;font-size:14px;border-top:!important;">' . $info[sihe_descr] . '</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                               ';
            }
           else if ($style == circle and $style_effect == effect10){
                $output .= '  
                                   <div class="' . $table . '">
                                    <div class="sihe-hover sihe-circle sihe-circle-effect-10 sihe-left-to-right" style="width:' . $pic_size . 'px; height:' . $pic_size . 'px;">
                                        <a  target=" " href="' . $info[sihe_url] . '"> 
                                            <div class="hover-img hover-img-cycle">
                                                <img src="' . $info[sihe_upload] . '" alt="img">
                                            </div>
                                            <div class="sihe-info-circle ">

                                                <h3 style="color: ;font-family:  ;font-size:18px; padding:10% 0 0 0;">' . $info[sihe_title] . '</h3>
                                                <p style="color:;font-family:  ;font-size:14px;border-top:!important;">' . $info[sihe_descr] . '</p>

                                            </div>
                                        </a>
                                    </div>
                                </div>
                               ';
            }
          
           else if ($style == square and $style_effect == effect1){
                $output .= ' 
                       <div class="' . $table . '">
                                    <div class="sihe-map" style="margin: 20px auto;">


                                        <div class="sihe-hover sihe-square sihe-square-effect-1" style="width:' . $pic_size . 'px; height:' . $pic_size . 'px;">
                                            <a target=" " href="' . $info[sihe_url] . '" >
                                                <div class="hover-img">
                                                    <img alt="img" src="' . $info[sihe_upload] . '"></div>
                                                <div class="sihe-info-square ">
                                                    <h3 style="color: ;font-family:  ;font-size:18px; padding:20% 0 0 0;">' . $info[sihe_title] . ' </h3>
                                                    <p style="color:;font-family: ' .$google_fontdesc . ' ;font-size:14px;border-top:!important;">' . $info[sihe_descr] . '</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                               ';
            }
           else if ($style == square and $style_effect == effect2){
                $output .= '  
                     <div class="' . $table . '">
                                    <div class="sihe-map" style="margin: 20px auto;">

                                        <div class="sihe-hover sihe-square sihe-square-effect-2" style="width:' . $pic_size . 'px; height:' . $pic_size . 'px;">
                                            <a target=" " href="' . $info[sihe_url] . '">
                                                <div class="hover-img">
                                                    <img src="' . $info[sihe_upload] . '">
                                                </div>
                                                <div class="sihe-info-square ">
                                                    <h3 style="color: ;font-family:  ;font-size:18px; padding:10% 0 0 0;">' . $info[sihe_title] . ' </h3>
                                                    <p style="color:;font-family: ' .$google_fontdesc . ' ;font-size:14px;border-top:!important;">' . $info[sihe_descr] . '</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div> 

                               ';
            }
           else if ($style == square and $style_effect == effect3) {
                $output .= '  
                     <div class="' . $table . '">
                                    <div class="sihe-map" style="margin: 20px auto;">

                                        <div class="sihe-hover sihe-square sihe-square-effect-3 ' . $animation . '"  style="width: 270px; height: 270px;">
                                            <a target=" " href="' . $info[sihe_url] . '">
                                                <div class="hover-img">
                                                    <img src="' . $info[sihe_upload] . '">
                                                </div>
                                                <div class="sihe-main-sqr ">
                                                    <div class="sihe-part-sqr">
                                                        <h3 style="color: ;font-family:  ;font-size:18px; padding:10% 0 0 0;">' . $info[sihe_title] . '</h3>
                                                        <p style="color:;font-family: ' .$google_fontdesc . ' ;font-size:14px;border-top:!important;">' . $info[sihe_descr] . '</p>

                                                    </div>
                                                </div>

                                            </a>
                                        </div>   


                                    </div>
                                </div>
                    

                               ';
            }
           else if ($style == square and $style_effect == effect4) {
                $output .= '  
                    <div class="' . $table . '">
                                    <div class="sihe-map" style="margin: 20px auto;">

                                        <div class="sihe-hover sihe-square sihe-square-effect-4" style="width:' . $pic_size . 'px; height:' . $pic_size . 'px;">


                                            <a target=" " href="' . $info[sihe_url] . '">
                                                <div class="hover-img">
                                                    <img src="' . $info[sihe_upload] . '">
                                                </div>
                                                <div class="sihe-main-sqr-2 ">
                                                    <h3 style="color: ;font-family:  ;font-size:18px; padding:10% 0 0 0;">' . $info[sihe_title] . ' </h3>
                                                    <p style="color:;font-family: ' .$google_fontdesc . ' ;font-size:14px;border-top:!important;">' . $info[sihe_descr] . ' ' . $info[sihe_descr] . ' ' . $info[sihe_descr] . ' ' . $info[sihe_descr] . '</p>

                                                </div>
                                            </a>



                                        </div>

                                    </div>
                                </div>

                               ';
            }
           else if ($style == square and $style_effect == effect5) {
                $output .= '  
                      <div class="' . $table . '">
                                    <div class="sihe-map" style="margin: 20px auto;">        

                                        <div class="sihe-sqr-hover sihe-square sihe-square-effect-5 counterclockwise" style="width:' . $pic_size . 'px;height:' . $pic_size . 'px;border:0px solid ;">
                                            <a target=" " href="' . $info[sihe_url] . '" >

                                                <div class="hover-img-1">
                                                    <img alt="hover-img" src="' . $info[sihe_upload] . '">
                                                </div>
                                                <div class="sihe-main-sqr-3 ">
                                                    <h3 style="color: ;font-family:  ;font-size:18px; padding:10% 0 0 0;">' . $info[sihe_title] . ' </h3>
                                                    <p style="color:;font-family: ' .$google_fontdesc . ' ;font-size:14px;border-top:!important;">' . $info[sihe_descr] . '</p>
                                                </div>

                                            </a>
                                        </div>

                                    </div>
                                </div>

                               ';
            }
           else if ($style == square and $style_effect == effect6) {
                $output .= '  
                    <div class="' . $table . '">
                                    <div class="sihe-map" style="margin: 20px auto;">
                                        <div class="sihe-hover sihe-square sihe-square-effect-6 sihe-top-to-bottom" style="width:' . $pic_size . 'px; height:' . $pic_size . 'px;">
                                            <a target=" " href="' . $info[sihe_url] . '" >
                                                <div class="hover-img">
                                                    <img alt="hover-img" src="' . $info[sihe_upload] . '">
                                                </div>
                                                <div class="sihe-info-square ">
                                                    <h3 style="color: ;font-family:  ;font-size:8px; padding:10% 0 0 0;">' . $info[sihe_title] . ' </h3>
                                                    <p style="color:;font-family: ' .$google_fontdesc . ' ;font-size:14px;border-top:!important;">' . $info[sihe_descr] . '</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                               ';
            }
           else if ($style == square and $style_effect == effect7) {
                $output .= '  
                     <div class="' . $table . '">
                                    <div class="sihe-map" style="margin: 20px auto;">
                                        <div class="sihe-hov-content">

                                            <div class="sihe-sqr-hover sihe-square sihe-square-effect-7 ' . $animation . '" style="width:' . $pic_size . 'px;height:' . $pic_size . 'px;border:0px solid ;">
                                                <a href="" >
                                                    <div class="hover-img-1">
                                                        <img alt="hover-img-1" src="' . $info[sihe_upload] . '">
                                                    </div>
                                                    <div class="sihe-main-sqr-3 bg-1-2">
                                                        <h3 style="color: ;font-family:  ;font-size:18px; padding:10% 0 0 0;">' . $info[sihe_title] . ' </h3>
                                                        <p style="color:;font-family: ' .$google_fontdesc . ' ;font-size:14px;border-top:!important;">' . $info[sihe_descr] . '</p>
                                                    </div>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                               ';
            }
           else if ($style == square and $style_effect == effect8) {
                $output .= '  
                    <div class="' . $table . '">
                                    <div class="sihe-map" style="margin: 20px auto;">
                                        <div class="sihe-hover sihe-square sihe-square-effect-8" style="width:' . $pic_size . 'px; height:' . $pic_size . 'px;">
                                            <a target=" " href="' . $info[sihe_url] . '" >
                                                <div class="hover-img">
                                                    <img alt="img" src="' . $info[sihe_upload] . '">
                                                </div>
                                                <div class="sihe-info-square ">
                                                    <h3 style="color: ;font-family:  ;font-size:8px; padding:10% 0 0 0;">' . $info[sihe_title] . ' </h3>
                                                    <p style="color:;font-family: ' .$google_fontdesc . ' ;font-size:14px;border-top:!important;">' . $info[sihe_descr] . '</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                               ';
            }
           else if ($style == square and $style_effect == effect9) {
                $output .= '  
                      <div class="' . $table . '">
                                    <div class="sihe-map" style="margin: 20px auto;">
                                        <div class="sihe-sqr-hover sihe-square sihe-square-effect-9 sihe-right-to-left" style="width:' . $pic_size . 'px;height:' . $pic_size . 'px;border:0px solid ;">
                                            <a target=" " href="' . $info[sihe_url] . '" >
                                                <div class="hover-img-1">
                                                    <div class="hover-img-1">
                                                        <img alt="hover-img-1" src="' . $info[sihe_upload] . '"></div>
                                                </div>
                                                <div class="sihe-main-sqr-4">
                                                    <div class="sihe-part-sqr-4 " style="background-color:rgba(255,0,0,0.5);">
                                                        <h3 style="color: ;font-family:  ;font-size:18px; padding:10% 0 0 0;">' . $info[sihe_title] . ' </h3>
                                                        <p style="color:;font-family: ' .$google_fontdesc . ' ;font-size:14px;border-top:!important;">' . $info[sihe_descr] . '</p>
                                                    </div>
                                                </div>
                                            </a>

                                        </div>
                                    </div>
                                </div>

                               ';
            }
           else if ($style == square and $style_effect == effect10) {
                $output .= '  
                     <div class="' . $table . '">
                                    <div class="sihe-map" style="margin: 20px auto;">

                                        <div class="sihe-hov-content">

                                            <div class="sihe-sqr-hover sihe-square sihe-square-effect-10 sihe-top-to-bottom" style="width:' . $pic_size . 'px;height:' . $pic_size . 'px;border:0px solid ;">
                                                <a target=" " href="' . $info[sihe_url] . '" >
                                                    <div class="img">
                                                        <img alt="img" src="' . $info[sihe_upload] . '">
                                                    </div>
                                                    <div class="sihe-info-square-10 ">
                                                        <h3 style="color: ;font-family:  ;font-size:18px; padding:10% 0 0 0;">' . $info[sihe_title] . ' </h3>
                                                        <p style="color:;font-family: ' .$google_fontdesc . ' ;font-size:14px;border-top:!important;">' . $info[sihe_descr] . '</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                               ';
            }

           $i++;
        }
        $output .='  </div> </div>';
     

    endwhile;
    wp_reset_query();
    return $output;
}

add_shortcode('sihe_hover', 'sihe_effects_shortcode');
