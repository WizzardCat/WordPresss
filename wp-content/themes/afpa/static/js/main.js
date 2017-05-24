/**
 * Created by Formation on 24/05/2017.
 */

alert("coucou");

// Cacher du texte en clickant quelque part (le slogan en l'occurence).

jQuery(function ($) { // Ici est aussi écrivable: $(document).ready(function() { $('#id_element_soumis_fading').fadeIn(400);});

    // Ecrire nos fonctions avec des $

    $(".slogan").on("click", function () {
        $("#features-slider").slideToggle('slow');
    })
});