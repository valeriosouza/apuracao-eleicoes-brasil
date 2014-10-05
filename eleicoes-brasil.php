<?php
/*
Plugin Name: Apuração Eleições Brasil
Plugin URI: https://github.com/valeriosouza/apuracao-eleicoes-brasil
Description: Apuração das Eleições 2014 do Brasil
Version: 0.1.1
Author: Valerio Souza
Author URI: http://valeriosouza.com.br
Text Domain: eleicoes-brasil
Domain Path: /languages
*/

// Add Shortcode
function apura_tse() {?>
<iframe
src="http://divulga.tse.jus.br/oficial/index.html" height="700" width="100%" frameborder="0" scrolling="auto">You need an iframes capable browser to view this content.</iframe>
<?php }
add_shortcode( 'apuracao', 'apura_tse' );