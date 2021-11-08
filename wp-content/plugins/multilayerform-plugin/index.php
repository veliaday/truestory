<?php
/*
* Plugin Name: Multilayer Form Popup Plugin
* Plugin URI: http://localhost/
* Description: This is a Multilayer Form Popup plugin to get the users attention and connect them with their interests for a specific company. The plugin was based on HTML5, CSS, JS and PHP
* Version: 2.0.4
* Author: Murat Kilic
* Author URI: http://localhost/
* License: GPL2
*/


function multi_steps_form ()
{
    $content .= '<div id="overlay">';
    $content .= '<div class="login-form">';
    $content .= '<div id="popupclose" class="popupCloseButton">X</div>';
    $content .= '<form id="regForm" action=" ">';
    
    $content .= '<div class="tab">';
    $content .= '<h3 id="headline-text">Hvad er dine interesser?</h3>';
    $content .= '<button type="button" id="nextBtn" onclick="nextPrev(1)">Adrenalin</button>';
    $content .= '<button type="button" id="nextBtn" onclick="nextPrev(1)">Smag</button>';
    $content .= '<button type="button" id="nextBtn" onclick="nextPrev(1)">Kultur</button>';
    $content .= '<button type="button" id="nextBtn" onclick="nextPrev(1)">Wellness & Spa</button>';
    $content .= '<button type="button" id="nextBtn" onclick="nextPrev(1)">Natur</button>';
    $content .= '<button type="button" id="nextBtn" onclick="nextPrev(1)">Ophold</button>';
    
    $content .= '</div>';
    
    $content .= '<div class="tab">';
    $content .= '<h3 id="headline-text">Hvem vil du helst opleve det sammen med?</h3>';
    $content .= '<button type="button" id="nextBtn" onclick="nextPrev(1)">Familie</button>';
    $content .= '<button type="button" id="nextBtn" onclick="nextPrev(1)">Kæreste</button>';
    $content .= '<button type="button" id="nextBtn" onclick="nextPrev(1)">Venner/Veninder</button>';
    $content .= '<button type="button" id="nextBtn" onclick="nextPrev(1)">Date</button>';
  
    $content .= '</div>';
    
    $content .= '<div class="tab">';
    $content .= '<h3 id="headline-text">Tilmeld dig nyhedsbrevet og få 10% på første oplevelse.</h3>';
    $content .= '<p id="p-text">Få inspiration til oplevelser direkte i indbakken.</p>';
    $content .= '<p><input placeholder="Fornavn..." oninput="this.className = "></p>';
    $content .= '<div class="input">';
    $content .= '<input type="email" name="email" id="email" placeholder="Skriv din email" required>';
    $content .= '</div>';
    $content .= '<button type="button" id="nextBtn" class="submitbtn" onclick="nextPrev(1)">Tilmeld</button>';
    $content .= '</div>';
    
    $content .= '<div style="overflow:auto;">';
    $content .= '<div style="float:right;">';
   
    $content .= '</div>';
    $content .= '</div>';
    
    $content .= '<div style="text-align:center;margin-top:40px;">';
    $content .= '<span id="step1" class="step"></span>';
    $content .= '<span id="step2" class="step"></span>';
    $content .= '<span id="step3" class="step"></span>';
    $content .= '</div>';
    
     $content .= '</form>';
     $content .= '</div>';
     $content .= '</div>';
     $content .= '<button id="knappen" class="wobble-hor-bottom">';
     $content .= '<i class="fas fa-bell"></i>';
     $content .= '</button>'; 
     

     
    return $content;
}


    #First parameter is a self choosen name for a unique short-code. Second parameter is the name of the function that creates the newsletter
    add_shortcode('show_multilayerform_popup','multi_steps_form');
    
    add_action('wp_enqueue_scripts','register_styles_and_scripts_for_plugin');
    

    function register_styles_and_scripts_for_plugin() 
    {
        wp_enqueue_style('fontAwesomCDN', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css');
        
        wp_enqueue_style('CustomFontMontserrat','https://fonts.googleapis.com/css?family=Montserrat:400,500,800&display=swap');
        
        wp_enqueue_style('CustomStylesheet', plugins_url('multilayerform-plugin/css/style.css'),"all");
        
        wp_enqueue_script('CustomScript', plugins_url('multilayerform-plugin/js/script.js'), array('jquery'), null, true);
    }


?>
