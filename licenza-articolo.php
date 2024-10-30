<?php
/*
Plugin Name: Licenza Articolo
Plugin URI: http://www.esempio.it
Description: Visualizza un box con info sulla licenza dell'articolo
Version: 1.0
Author: Francesca Morelli
Author URI: http://www.esempio.it
 */

function licenza_articolo($content)
{
    $return = $content;
    $return .= '<div class="ylb-container">
    <p>Il testo di questo articolo &eacute; di propriet&agrave; di  ' . get_the_author() . ' ed &eacute; rilasciato sotto licenza Creative Commons. Sei libero di ridistribuirlo e riprodurlo....</p>
    <p><a href="#" class="ylb-close">chiudi</a></p>
    </div>';
    return $return;
}



/* I filtri sono degli agganci lanciati da Wordpress per modificare qualsiasi forma di testo prima di aggiungerlo al database o prima di stamparlo sullo schermo.
 add_filter( $tag, $funzione, $priorità, $argomenti ); 
 $tag: Il nome del filtro con cui agganciare la $funzione
 $funzione:nome della funzione da chiamare quando il filtro viene applicato. 
 $priorità: Utilizzato per specificare l'ordine in cui le funzioni associate con una particolare azione vengono eseguite.
           numeri bassi: priorita alta
		   default: 10
 $argomenti: numero di argomenti che accetta la funzione
 
 
 the_content mostra il testo dell'articolo.
*/
add_filter('the_content', 'licenza_articolo');

 //aggiunge gli stili contenuti nel file style.css
 //I fogli di stile vanno inclusi tramite un’apposita funzione, wp_enqueue_style
 //uso la costante predefinita WP_PLUGIN_URL che contiene l’url della cartella plugin
wp_enqueue_style('*', WP_PLUGIN_URL . '/licenza-articolo/css/style.css');
//aggiunge la funzione jquery per chiudere il pannello
wp_enqueue_script('ylb-custom-script', WP_PLUGIN_URL . '/licenza-articolo/js/chiudi.js', array('jquery'));
 
?>
