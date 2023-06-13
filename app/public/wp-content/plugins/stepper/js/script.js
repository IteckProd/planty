jQuery(document).ready(function($) {
    var chiffre = $('.mon-module .chiffre');
    var boutonPlus = $('.mon-module .bouton-plus');
    var boutonMoins = $('.mon-module .bouton-moins');

    boutonPlus.click(function() {
        var valeur = parseInt(chiffre.text(), 10);
        chiffre.text(valeur + 1);
    });

    boutonMoins.click(function() {
        var valeur = parseInt(chiffre.text(), 10);
        if (valeur > 0) {
            chiffre.text(valeur - 1);
        }
    });
});
