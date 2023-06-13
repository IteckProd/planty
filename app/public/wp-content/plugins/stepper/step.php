<?php
function mon_module_html() {
    $output = '
    <div class="mon-module">
        <div class="chiffre-container">
            <span class="chiffre">0</span>
        </div>
        <div class="boutons">
            <button class="bouton-plus">+</button>
            <div class="separateur"></div>
            <button class="bouton-moins">-</button>
        </div>
    </div>';
    return $output;
}
