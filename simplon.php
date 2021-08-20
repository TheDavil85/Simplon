<?php
/*
Plugin Name: Simplon
Description: un plugin pour présenter la formation
Version: 1.0
Author: The Dav'il
*/

add_shortcode( 'simplon', 'simplon_shortcode' );

if ( !function_exists( 'simplon_shortcode' )) {

    function simplon_shortcode() {

        $text = '<hr/>';
        $text .= '<p>';
        $text .= 'Destinée aux chercheurs d’emplois en situation de reconversion, la formation Référent.e Numérique Entreprise prépare en 8 mois aux métiers du numérique et est couronnée par l’obtention de 3 certifications.
        Le métier de référent.e numérique consiste à accompagner les structures dans la mise en place de solutions numériques adaptées à leurs besoins.
        La formation est menée conjointement par :';
        $text .= '</p>';
        $text .= '<ul>';
        $text .= '<li>';
        $text .= '<a href="https://www.insa-rouen.fr">INSA Rouen Normandie</a>';
        $text .= '</li>';
        $text .= '<li>';
        $text .= '<a href="https://rouen.cesi.fr/">Le CESI Rouen</a>' ;
        $text .= '</li>';
        $text .= '<li>';
        $text .= '<a href="https://simplon.co">Simplon</a>';
        $text .= '</li>';
        $text .= '</ul>';
        $text .= '<hr/>';

        return $text;
    }
}