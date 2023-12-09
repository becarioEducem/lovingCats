<?php
    //TODO #1: Modifica la cadena de connexió amb les teves dades d'accés
    function getConnection(){
        $connString = 'mysql:host=localhost;port=3306;dbname=lovingcats;charset=utf8';
        $user = 'root';
        $pass = '';
        $db = null;
        try{
            $db = new PDO($connString,$user,$pass,[PDO::ATTR_PERSISTENT => True]);
        }catch(PDOException $e){
            echo "<p style=\"color:red;\">Error " . $e->getMessage() . "</p>";
        }finally{
            return $db;
        }
    }

    // TODO #2: Implementa la funció insertCats($cats) que reb un array de gats i els inserta a la base de dades
    // TODO   : Si un gat ja existeix a la base de dades no s'ha de tornar a inserir (cal comprovar-ho abans d'inserir)
    function insertCats($cats){

    }