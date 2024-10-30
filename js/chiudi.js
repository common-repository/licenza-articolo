/*$ ha il valore di alias di jQuery.*/
/*Dato che il simbolo $ non è utilizzato soltanto da jQuery e che all’interno di WordPress ci sono molte altre librerie JS, il simbolo $ potrebbe creare dei conflitti e mandare il sistema in confusione perché non riesce a comprendere quale libreria desideriamo utilizzare. 
Per risolvere questo problema una soluzione è cambiare leggermente il codice che mi permette di lanciare jQuery .*/
/*jQuery(document).ready(function($){
    $('.ylb-close').click(function(){
        $(this).parent().parent().slideUp('slow');
        return false;
    });
});
*/
/*//oppure: creo una variabile jquery
var $j = jQuery.noConflict();
$j(document).ready(function(){
   $j('.ylb-close').click(function(){
        $j(this).parent().parent().slideUp('slow');
        return false;
    });
});

*/
/*oppure*/
jQuery(document).ready(function(){
   jQuery('.ylb-close').click(function(){
        jQuery(this).parent().parent().slideUp('slow');
        return false;
    });
});