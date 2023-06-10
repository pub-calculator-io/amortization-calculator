<?php
/*
Plugin Name: Amortization Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/amortization-calculator/
Description: This amortization calculator will show you how much your monthly payments will be and the breakdown of your payments. You can also see a graph and a pie chart of your loan’s amortization.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_amortization_calculator
*/

if (!function_exists('add_shortcode')) die("No direct call");

function display_ci_amortization_calculator(){
    $page = 'index.html';
    return '<h2><a href="https://www.calculator.io/amortization-calculator/" target="_blank"><img src="' . plugins_url('assets/images/icon-48.png', __FILE__ ) . '" width="48" height="48"></a> Amortization Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . plugins_url($page, __FILE__ ) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_amortization_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_amortization_calculator', 'display_ci_amortization_calculator' );