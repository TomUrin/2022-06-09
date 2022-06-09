<?php

class Kibiras1 {

    protected $akmenuKiekis = 0;
    function pridetiAkmeni() {
        $akmenuKiekis++;
    }

    function pridetiDaugAkmenu($kiekis) {

    }

    function kiekPririnktaAkmenu() {
        echo $akmenuKiekis;
    }
}