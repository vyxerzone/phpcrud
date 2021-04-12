<?php

class ConexionDB{

    public function cDB(){

        $bd = new PDO("mysql:host=82.223.121.97:3323;dbname=crud", "root", "Mil890823@");

        return $bd;

    }

}