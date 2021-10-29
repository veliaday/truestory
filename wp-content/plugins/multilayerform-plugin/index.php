<?php
/*
* Plugin Name: Multilayer Form Popup Plugin
* Plugin URI: http://localhost/
* Description: This is a Multilayer Form Popup plugin to get the users attention and connect them with their interests for a specific company. The plugin was based on HTML5, CSS, JS and PHP
* Version: 2.0.1
* Author: Murat Kilic
* Author URI: http://localhost/
* License: GPL2
*/


function multi_steps_form ()
{
     $content = '';
    $content .= '<div id="overlay">';
    $content .= '</div>';
    $content .= '<div class="login-form">';
    $content .= '<div class="popupCloseButton">X</div>';
    $content .= '<form id="regForm" action=" ">';
    
    $content .= '<div class="tab">';
    $content .= '<h3 id="headline-text">Hvad er dine interesser?</h3>';
    $content .= '<button type="button" id="nextBtn" onclick="nextPrev(1)">Musik</button>';
    $content .= '<button type="button" id="nextBtn" onclick="nextPrev(1)">Sport</button>';
    $content .= '<button type="button" id="nextBtn" onclick="nextPrev(1)">Økonomi</button>';
    $content .= '<button type="button" id="nextBtn" onclick="nextPrev(1)">Psykologi</button>';
    $content .= '<button type="button" id="nextBtn" onclick="nextPrev(1)">Kemi</button>';
    
    $content .= '</div>';
    
    $content .= '<div class="tab">';
    $content .= '<h3 id="headline-text">Hvad vil du gerne arbejde med i fremtiden?</h3>';
    $content .= '<button type="button" id="nextBtn" onclick="nextPrev(1)">Noget med mennesker</button>';
    $content .= '<button type="button" id="nextBtn" onclick="nextPrev(1)">Handel og økonomi</button>';
    $content .= '<button type="button" id="nextBtn" onclick="nextPrev(1)">Gastronomi</button>';
    $content .= '<button type="button" id="nextBtn" onclick="nextPrev(1)">Bruge min hænder</button>';
    $content .= '<button type="button" id="nextBtn" onclick="nextPrev(1)">Jeg ved det ikke</button>';
    $content .= '</div>';
    
    $content .= '<div class="tab">';
    $content .= '<h3 id="headline-text">Har du svært ved at finde den rigtige studieretning?</h3>';
    $content .= '<p id="p-text">Skriv din mail og modtag en skræddersyet studieretning som matcher dine interesser.</p>';
    $content .= '<p><input placeholder="Fornavn..." oninput="this.className = "></p>';
    $content .= '<div class="input">';
    $content .= '<input type="email" name="email" id="email" placeholder="Skriv din email her..." required><i class="fas fa-envelope"></i>';
    $content .= '</div>';
    $content .= '<button type="button" id="nextBtn" class="submitbtn" onclick="nextPrev(1)">Send mig spændende tilbud</button>';
    $content .= '</div>';
    
    $content .= '<div style="overflow:auto;">';
    $content .= '<div style="float:right;">';
   
    $content .= '</div>';
    $content .= '</div>';
    
    $content .= '<div style="text-align:center;margin-top:40px;">';
    $content .= '<span class="step"></span>';
    $content .= '<span class="step"></span>';
    $content .= '<span class="step"></span>';
    $content .= '</div>';
    
    $content .= '</form>';
  	$content .= '</div>';
    
    return $content;
}


    #First parameter is a self choosen name for a unique short-code. Second parameter is the name of the function that creates the newsletter
    add_shortcode('show_multilayerform_popup','multi_steps_form');
    
    add_action('wp_enqueue_scripts','register_styles_and_scripts_for_plugin');
    

    function register_styles_and_scripts_for_plugin() 
    {
        wp_enqueue_style('fontAwesomCDN', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css');
        
        wp_enqueue_style('CustomFontMontserrat','https://fonts.googleapis.com/css?family=Montserrat:400,500,800&display=swap');
        
        wp_enqueue_style('CustomStylesheet', plugins_url('multilayerform-plugin/css/style.css'));
        
        wp_deregister_script('jquery');
        
        wp_enqueue_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
        
        wp_enqueue_script('CustomScript', plugins_url('multilayerform-plugin/js/script.js'), array('jquery'), null, true);
    }

?>
