<?php
/*
Plugin Name: Amortization Calculator by www.calculator.io
Plugin URI: https://www.calculator.io/amortization-calculator/
Description: This amortization calculator will show you how much your monthly payments will be and the breakdown of your payments. You can also see a graph and a pie chart of your loan’s amortization.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_amortization_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Amortization Calculator by Calculator.iO";

function display_ci_amortization_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Amortization Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_amortization_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_amortization_calculator', 'display_ci_amortization_calculator' );