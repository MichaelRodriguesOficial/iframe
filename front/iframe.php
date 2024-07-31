<?php
/*
   ----------------------------------------------------------
   Plugin Iframe 1.0
   GLPI 9.1.6 
  
   Autor: Javier David Marín Zafrilla.
   Fecha: Febrero 2019


   Plugin Iframe 1.0.3
   GLPI 10x
  
   Autor: Michael Rodrigues
   Fecha: Julho/2024
   
   ----------------------------------------------------------
 */

include ("../../../inc/includes.php");

Html::header(__('iframe', 'iframe'), $_SERVER['PHP_SELF'] ,"config", "PluginIframeConfig", "iframe");


// Check if plugin is activated...
$plugin = new Plugin();
if(!$plugin->isInstalled('iframe') || !$plugin->isActivated('iframe')) {
   Html::displayNotFoundError();
}

if (Session::haveRight('plugin_iframe',UPDATE)) {
	Search::Show('PluginIframeIframe');
	Html::footer();
} else {
	Html::displayRightError();
}

?>