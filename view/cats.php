<?php 
    //Obtenim la url de la imatge d'un determinat gat
    function getCatImgSrc($catId){
        return "https://cataas.com/cat/$catId";
    }

    //Obtenim l'atribut alt d'una imatge de gat
    function getCatAlt($tagList){
        return "Image of a cat tagged as " . implode(",",$tagList);
    }
    
    //TODO: Implementa la funció getHTMLCatGrid() que retorna una taula html amb els gats passats com a paràmetre (array de gats)
    function getHTMLCatGrid($cats){
    }